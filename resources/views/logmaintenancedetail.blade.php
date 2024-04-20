@include('header')

<body id="logmaintenance-page">

<!-- Page Wrapper -->
<div id="wrapper">

@include('sidebar')


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('navbar', ['title' => '<h1 class="font-weight-semibold text-gray-900 h2 mb-0"><a href="/logmaintenance" class="btn bg-transparent"><i class="fa fa-chevron-left text-gray-900"></i></a><span class="h4 font-weight-semibold text-gray-900 ">Log Maintenance - steambox 1</span></h1>', 'subtitle' => ''])


        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->
            <div class="row">

                <div class="col mb-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col">
                            <div class="d-flex search-bar px-3 py-2 mb-3 rounded-3 justify-content-between align-items-center">
                                <div class="d-flex">    
                                    <form class="search-form mr-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search Resep" aria-label="Search" aria-describedby="basic-addon2">
                                            
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <form action="" class="date-search d-flex">
                                        <input class="form-control mr-2" type="date" id="tanggalmulai" name="tanggalmulai" class="form-control">
                                        <input class="form-control mr-2" type="date" id="tanggalselesai" name="tanggalselesai" class="form-control">
                                        <button class="btn btn-primary short-button bg-white shadow border-0 text-gray-700 d-flex align-items-center" type="button">
                                        <span class="material-symbols-outlined">refresh</span>
                                        </button>
                                    </form>
                                </div>
                                <div class="d-flex align-items-center button-header">
                                    <button class="btn bg-white text-gray-600 shadow py-1"  id="downloadExcel" type="button" disabled><span class="material-symbols-outlined">sim_card_download</span> Export CSV</button>
                                    <button class="btn bg-white text-gray-600 shadow ml-3 py-1"  id="downloadPdf" type="button" disabled><span class="material-symbols-outlined">sim_card_download</span> Export pdf</button>
                                </div>
                            </div>
                            <div class="row data-resep mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-wrap">
                                            <table id="logmaintenanceTable" class="defaultTable table" style="">
                                                <thead class="text-nowrap text-center">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Waktu Mulai</th>
                                                        <th>Waktu Selesai</th>
                                                        <th>Durasi</th>
                                                        <th>Keterangan Produksi</th>
                                                        <th>Keterangan Maintenance</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center text-nowrap text-gray-900">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>12 Maret 2024<br/>09:31:14</td>
                                                        <td>13 Maret 2024<br/>09:31:14</td>
                                                        <td>24:00:00</td>
                                                        <td>Ada kebocoran pintu</td>
                                                        <td class="text-wrap">Kebocoran minor & masih bisa digunakan</td>
                                                        <td>Rusak bisa jalan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>13 Maret 2024<br/>10:51:12</td>
                                                        <td>13 Maret 2024<br/>14:51:12</td>
                                                        <td>2:00:00</td>
                                                        <td>Bocor makin parah</td>
                                                        <td class="text-wrap">Steambox tidak dapat digunakan sementara waktu karena masih sparepart karet pintu</td>
                                                        <td>Down time</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                            <div class="row align-items-center mt-3 pagination-table px-4 font-weight-semibold">
                                                <div class="col-sm-3 col-12">showing 21-30 of 100 result</div>
                                                <div class="col-sm-6 col-12">
                                                    <nav aria-label="Page navigation example ">
                                                    <ul class="pagination justify-content-center mb-0">
                                                        <li class="page-item"><a class="page-link" href="#"><i class="fa-chevron-left fa"></i></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#"><i class="fa-chevron-right fa"></i></a></li>
                                                    </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-sm-3 col-12 text-right">Items perpage 
                                                    <select name="" id="">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                    </select>
                                                </div>
                                            </div>
                                    
                                        </div>
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

	$('#logmaintenance-menu').addClass('active');	

    
    
    const tanggalInput = document.getElementById('tanggalmulai');
    const downloadExcel = document.getElementById('downloadExcel');
    const downloadPdf = document.getElementById('downloadPdf');

    tanggalInput.addEventListener('input', function() {
        if (tanggalInput.value !== '') {
		    downloadPdf.classList.add("active");
		    downloadExcel.classList.add("active");
            downloadPdf.disabled = false;
            downloadExcel.disabled = false;
        } else {
		    downloadPdf.classList.remove("active");
		    downloadExcel.classList.remove("active");
            downloadPdf.disabled = true;
            downloadExcel.disabled = true;
        }
    });
</script>

@include('footer')
