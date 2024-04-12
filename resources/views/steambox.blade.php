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

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col mb-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center legend-box">
                                    <div class="legend-steambox">
                                        <input type="checkbox" id="checkbox1">
                                        <label for="checkbox1" id="label1" class="legend-title"><span class="color-legend" style="background:#fff"></span>Belum terisi <span class="order"></span></label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2" id="label2" class="legend-title"><span class="color-legend" style="background:#ecff0f"></span>Pemanasan <span class="order"></span></label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3" id="label3" class="legend-title"><span class="color-legend" style="background:#2be172"></span>Pemasakan <span class="order"></span></label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="checkbox" id="checkbox4">
                                        <label for="checkbox4" id="label4" class="legend-title"><span class="color-legend" style="background:#39e8f8"></span>15 Menit pemasakan berakhir <span class="order"></span></label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="checkbox" id="checkbox5">
                                        <label for="checkbox5" id="label5" class="legend-title"><span class="color-legend" style="background:#e10200"></span>COMM Error <span class="order"></span></label>
                                    </div>
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
