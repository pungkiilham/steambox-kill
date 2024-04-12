@include('header')

<body id="operator-page">

<!-- Page Wrapper -->
<div id="wrapper">

@include('sidebar')


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <input type="checkbox" id="checkbox1">
<label for="checkbox1" id="label1">Option <span class="order"></span></label><br>
<input type="checkbox" id="checkbox2">
<label for="checkbox2" id="label2">Option <span class="order"></span></label><br>
<input type="checkbox" id="checkbox3">
<label for="checkbox3" id="label3">Option <span class="order"></span></label><br>
<input type="checkbox" id="checkbox4">
<label for="checkbox4" id="label4">Option <span class="order"></span></label><br>


                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

           

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<script>
var checkboxes = document.querySelectorAll('input[type=checkbox]');
var checkedOrder = [];

checkboxes.forEach(function(checkbox, index) {
    var label = document.getElementById('label' + (index + 1));
    var orderSpan = label.querySelector('.order'); // Ambil elemen span dengan kelas order di dalam label
    
    checkbox.addEventListener('change', function() {
        if (checkbox.checked) {
            if (!checkedOrder.includes(index)) {
                checkedOrder.push(index);
            }
        } else {
            var position = checkedOrder.indexOf(index);
            if (position !== -1) {
                checkedOrder.splice(position, 1);
            }
        }
        
        // Perbarui urutan di dalam span
        checkedOrder.forEach(function(checkedIndex, order) {
            var checkedLabel = document.getElementById('label' + (checkedIndex + 1));
            var checkedOrderSpan = checkedLabel.querySelector('.order'); // Ambil elemen span dengan kelas order di dalam label yang dicentang
            checkedOrderSpan.textContent = order + 1;
        });
        
        // Perbarui urutan di dalam span jika kotak centang diklik
        orderSpan.textContent = checkbox.checked ? checkedOrder.indexOf(index) + 1 : '';
    });
});


</script>

@include('footer')
