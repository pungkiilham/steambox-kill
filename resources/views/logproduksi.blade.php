@include('header')

<body id="logproduksi-page">

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
                                    <button class="btn bg-white text-gray-600 shadow"  id="downloadExcel" type="button" disabled><span class="material-symbols-outlined">sim_card_download</span> Export CSV</button>
                                    <button class="btn bg-white text-gray-600 shadow ml-3"  id="downloadPdf" type="button" disabled><span class="material-symbols-outlined">sim_card_download</span> Export pdf</button>
                                </div>
                            </div>
                            <div class="row data-resep mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-wrap">
                                            <table id="logproduksiTable" class="defaultTable table" style="">
                                                <thead class="text-nowrap text-center">
                                                    <tr>
                                                        <th rowspan="2">Tanggal</th>
                                                        <th rowspan="2">No Steambox</th>
                                                        <th colspan="4">Detail Produk</th>
                                                        <th colspan="3">Item Produk</th>
                                                        <th colspan="8">Detail Proses</th>
                                                        <th rowspan="2">Keterangan Proses</th>
                                                    </tr>
                                                    <tr>
                                                        <th style="min-width:130px">kode resep</th>
                                                        <th>nama resep</th>
                                                        <th>versi</th>
                                                        <th>trolli</th>
                                                        <th>batch</th>
                                                        <th>warna</th>
                                                        <th>qty(gld)</th>
                                                        <th>suhu awal</th>
                                                        <th>suhu aktual</th>
                                                        <th>jam mulai</th>
                                                        <th>durasi pemanasan</th>
                                                        <th>jam pemasakan</th>
                                                        <th>durasi pemasakan</th>
                                                        <th>tambahan waktu</th>
                                                        <th>jam selesai</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center text-nowrap text-gray-900">
                                                    <tr class="row-parent">
                                                        <td>22/03/2024</td>
                                                        <td class="text-left">steambox 3</td>
                                                        <td class="text-left text-wrap">BAWANG BOREL</td>
                                                        <td>Bawang Borel</td>
                                                        <td>3</td>
                                                        <td>Custom - sisa batch</td>
                                                        <td>1</td>
                                                        <td>merah kuning hijau</td>
                                                        <td>60</td>
                                                        <td>92</td>
                                                        <td>92</td>
                                                        <td>10:30:50</td>
                                                        <td>00:20:00</td>
                                                        <td>10:30:50</td>
                                                        <td>01:00:00</td>
                                                        <td>+ 00:30:50</td>
                                                        <td>10:20:00</td>
                                                        <td><div class="alert alert-danger px-2 py-1 m-0 d-inline">Stop pemasakan</div></td>
                                                    </tr>
                                                    <tr class="row-parent">
                                                        <td rowspan="3">22/03/2024</td>
                                                        <td rowspan="3" class="text-left">steambox 2</td>
                                                        <td rowspan="3" class="text-left text-wrap">KCSURYA KNG</td>
                                                        <td rowspan="3">Kancing Surya Kenanga</td>
                                                        <td rowspan="3">3</td>
                                                        <td rowspan="3">Longgar</td>
                                                        <td>1</td>
                                                        <td>putih merah</td>
                                                        <td>80</td>
                                                        <td rowspan="3">92</td>
                                                        <td rowspan="3">92</td>
                                                        <td rowspan="3">10:30:50</td>
                                                        <td rowspan="3">00:20:00</td>
                                                        <td rowspan="3">10:30:50</td>
                                                        <td rowspan="3">01:00:00</td>
                                                        <td rowspan="3">+ 00:30:50</td>
                                                        <td rowspan="3">10:20:00</td>
                                                        <td rowspan="3"><div class="alert alert-success px-2 py-1 m-0 d-inline">Selesai</div></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>putih merah</td>
                                                        <td>60</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>putih merah</td>
                                                        <td>10</td>
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

	$('#logproduksi-menu').addClass('active');	

    
    
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
