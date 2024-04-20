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
                                    <form action="" class="status-search d-flex">
                                        <select name="" id="statusList" class="form-control mr-3">
                                            <option value="">Pilih Status</option>
                                            <option value="normal">Normal</option>
                                            <option value="rusakbisajalan">Rusak bisa jalan</option>
                                            <option value="down-time">Down - time</option>
                                        </select>
                                        <button class="btn btn-primary short-button bg-white shadow border-0 text-gray-700 d-flex align-items-center" type="button">
                                        <span class="material-symbols-outlined">refresh</span>
                                        </button>
                                    </form>
                                </div>
                                <div class="d-flex">
                                    <form action="" class="d-flex align-items-center mr-4">
                                        <div class="form-number d-flex align-items-center mr-2">
                                            <label for="" class="mb-0 mr-2 font-weight-semibold text-gray-900" style="line-height:1.2">Standar maintenance<br/>berkala (menit)</label>
                                            <input type="text" class="form-control text-center font-weight-semibold text-gray-900" style="width:60px" fdprocessedid="fulggd">
                                        </div>
                                        <button class="btn bg-white text-gray-700 py-1 shadow" fdprocessedid="ivd7uo"><i class="fa fa-save"></i></button>
                                    </form>
                                    <div class="d-flex align-items-center button-header">
                                        <button class="btn bg-white text-gray-600 shadow py-1"  id="downloadExcel" type="button" disabled><span class="material-symbols-outlined">sim_card_download</span> Export CSV</button>
                                        <button class="btn bg-white text-gray-600 shadow ml-3 py-1"  id="downloadPdf" type="button" disabled><span class="material-symbols-outlined">sim_card_download</span> Export pdf</button>
                                    </div>
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
                                                        <th>Nomor SB</th>
                                                        <th>Hour 1</th>
                                                        <th>Hour 2</th>
                                                        <th>Keterangan Produksi</th>
                                                        <th>Keterangan Maintenance</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center text-nowrap text-gray-900">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>steambox 1</td>
                                                        <td>43800:55</td>
                                                        <td>23:52 <button class="btn btn-secondary bg-gray-200 text-gray-600 px-2 ml-2 border-dark"><span class="material-symbols-outlined">cached</span></button></td>
                                                        <td>Ada kebocoran di pintu</td>
                                                        <td>Kebocoran minor dan masih bisa digunakan</td>
                                                        <td>Rusak bisa jalan</td>
                                                        <td class="text-wrap">
                                                            <button type="button" class="btn btn-primary btn-green" data-toggle="modal" data-target="#ubahKeterangan" fdprocessedid="a75jlj">
                                                                Ubah Keterangan
                                                                <span class="material-symbols-outlined">
                                                                edit_note
                                                                </span>
                                                            </button>
                                                            <a href="/logdetail" class="btn btn-primary btn-yellow">
                                                                Lihat Log
                                                                <span class="material-symbols-outlined">
                                                                edit_document
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>steambox 2</td>
                                                        <td>43800:55</td>
                                                        <td>23:52 <button class="btn btn-secondary bg-gray-200 text-gray-600 px-2 ml-2 border-dark"><span class="material-symbols-outlined">cached</span></button></td>
                                                        <td>Ada kebocoran di pintu</td>
                                                        <td>Karet pintu sobek & tekanan drop</td>
                                                        <td>Down - time</td>
                                                        <td class="text-wrap">
                                                            <button type="button" class="btn btn-primary btn-green" data-toggle="modal" data-target="#ubahKeterangan" fdprocessedid="a75jlj">
                                                                Ubah Keterangan
                                                                <span class="material-symbols-outlined">
                                                                edit_note
                                                                </span>
                                                            </button>
                                                            <a href="/logdetail" class="btn btn-primary btn-yellow">
                                                                Lihat Log
                                                                <span class="material-symbols-outlined">
                                                                edit_document
                                                                </span>
                                                            </a>
                                                        </td>
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


<!-- Modal Edit Keterangan -->
<div class="modal fade" id="ubahKeterangan" tabindex="-1" role="dialog" aria-labelledby="ubahKeteranganLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahKeteranganLabel">Edit Keterangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="mb-3">
                <label for="statuslist">Status</label>
                <select name="" id="statuslist" class="form-control mr-3 w-50">
                    <option value="">Pilih Status</option>
                    <option value="normal">Normal</option>
                    <option value="rusakbisajalan">Rusak bisa jalan</option>
                    <option value="down-time">Down - time</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="keteranganmaintenance">Keterangan Maintenance</label>
                <textarea type="text" class="form-control" id="keteranganmaintenance" name="keteranganmaintenance"></textarea>
            </div>
            <div class="d-flex justify-content-between mb-3 pt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>

	$('#logmaintenance-menu').addClass('active');	

    
    
    const statusList = document.getElementById('statusList');
    const downloadExcel = document.getElementById('downloadExcel');
    const downloadPdf = document.getElementById('downloadPdf');

    statusList.addEventListener('input', function() {
        if (statusList.value !== '') {
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
