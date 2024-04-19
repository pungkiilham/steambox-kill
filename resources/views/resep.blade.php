@include('header')

<body id="resep-page">

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
                            <div class="d-flex search-bar px-3 py-2 mb-3 rounded-3 justify-content-between">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search Resep" aria-label="Search" aria-describedby="basic-addon2">
                                        
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="d-flex align-items-center button-header bg-transparent px-0 py-0">
                                    <button class="btn bg-white text-gray-600 shadow"  data-toggle="modal" data-target="#tambahResep" type="button"><span class="material-symbols-outlined">assignment_add</span> Resep Baru</button>
                                    <button class="btn bg-white text-gray-600 shadow ml-3"  data-toggle="modal" data-target="#tambahTrolli" type="button"><span class="material-symbols-outlined">dns</span> Add Trolli</button>
                                </div>
                            </div>
                            <div class="row data-resep mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-wrap">
                                            <table id="resepTable" class="table" style="">
                                                <thead class="text-nowrap text-center">
                                                    <tr>
                                                        <th rowspan="2" style="min-width:35px !important">No.</th>
                                                        <th rowspan="2" style="width:10%">SKU</th>
                                                        <th rowspan="2" style="width:25%">Nama Resep</th>
                                                        <th rowspan="2">Versi</th>
                                                        <th rowspan="2">Ket Versi</th>
                                                        <th colspan="5">Max qty trolli (gelondong)</th>
                                                        <th colspan="3">Standar waktu masuk (menit)</th>
                                                        <th rowspan="2">Aksi produk</th>
                                                    </tr>
                                                    <tr>
                                                        <th>flip</th>
                                                        <th>biasa</th>
                                                        <th>longgar1</th>
                                                        <th>longgar2</th>
                                                        <th>longgar3</th>
                                                        <th>normal</th>
                                                        <th>minimal</th>
                                                        <th>maksimal</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr class="row-parent">
                                                        <td rowspan="5" class="text-center text-gray-900">1</td>
                                                        <td rowspan="5" class="text-left text-gray-900">SBK</td>
                                                        <td rowspan="5" class="text-left text-gray-900">Surya Bintang Kancing</td>
                                                        <td class="text-gray-900">1</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                        <td rowspan="5" class="text-nowrap">
                                                            <a href="" class="btn btn-blue px-2 text-white btn-action"><span class="material-symbols-outlined">edit_square</span></a>
                                                            <a href="" class="btn btn-red px-2 text-white btn-action"><span class="material-symbols-outlined">delete</span></a>
                                                            <button type="button" class="btn btn-green px-2 text-white btn-action" data-toggle="modal" data-target="#tambahVersiModal"><span class="material-symbols-outlined">library_add</span></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">2</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">3</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">4</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr class="row-disable">
                                                        <td class="text-gray-900">5</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr class="row-parent">
                                                        <td rowspan="3" class="text-center text-gray-900">2</td>
                                                        <td rowspan="3" class="text-left text-gray-900">SBKG</td>
                                                        <td rowspan="3" class="text-left text-gray-900">Surya Bintang Kancing Gondang</td>
                                                        <td class="text-gray-900">1</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                        <td rowspan="3" class="text-nowrap">
                                                            <a href="" class="btn btn-blue px-2 text-white btn-action"><span class="material-symbols-outlined">edit_square</span></a>
                                                            <a href="" class="btn btn-red px-2 text-white btn-action"><span class="material-symbols-outlined">delete</span></a>
                                                            <button type="button" class="btn btn-green px-2 text-white btn-action" data-toggle="modal" data-target="#tambahVersiModal"><span class="material-symbols-outlined">library_add</span></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">2</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">3</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr class="row-parent">
                                                        <td rowspan="4" class="text-center text-gray-900">3</td>
                                                        <td rowspan="4" class="text-left text-gray-900">SAEUK SKCL</td>
                                                        <td rowspan="4" class="text-left text-gray-900">Saek Kancing Cerme Lebar</td>
                                                        <td class="text-gray-900">1</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                        <td rowspan="4" class="text-nowrap">
                                                            <a href="" class="btn btn-blue px-2 text-white btn-action"><span class="material-symbols-outlined">edit_square</span></a>
                                                            <a href="" class="btn btn-red px-2 text-white btn-action"><span class="material-symbols-outlined">delete</span></a>
                                                            <button type="button" class="btn btn-green px-2 text-white btn-action" data-toggle="modal" data-target="#tambahVersiModal"><span class="material-symbols-outlined">library_add</span></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">2</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">3</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">4</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">edit_document</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">visibility</span></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><span class="material-symbols-outlined">delete</span></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
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

<!-- Modal Tambah Trolli -->
<div class="modal fade" id="tambahTrolli" tabindex="-1" role="dialog" aria-labelledby="tambahTrolliLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahTrolliLabel">Add Trolli</h5>
        <div class="text-gray-900">Input nama trolli pada tempat yang telah disediakan</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="mb-3">
                <label for="input-trolli1">Trolli 1</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control" id="input-trolli1">
                    <input type="checkbox" name="check-trolli" id="check-trolli1" class="check-trolli">
                    <label class="check-info d-flex align-items-center" for="check-trolli1">
                        <div class="check-icon"></div>
                        <div class="check-status">
                            <div class="on">On</div>
                            <div class="off">Off</div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="input-trolli2">Trolli 2</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control" id="input-trolli2">
                    <input type="checkbox" name="check-trolli" id="check-trolli2" class="check-trolli">
                    <label class="check-info d-flex align-items-center" for="check-trolli2">
                        <div class="check-icon"></div>
                        <div class="check-status">
                            <div class="on">On</div>
                            <div class="off">Off</div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="input-trolli3">Trolli 3</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control" id="input-trolli3">
                    <input type="checkbox" name="check-trolli" id="check-trolli3" class="check-trolli">
                    <label class="check-info d-flex align-items-center" for="check-trolli3">
                        <div class="check-icon"></div>
                        <div class="check-status">
                            <div class="on">On</div>
                            <div class="off">Off</div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="input-trolli4">Trolli 4</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control" id="input-trolli4">
                    <input type="checkbox" name="check-trolli" id="check-trolli4" class="check-trolli">
                    <label class="check-info d-flex align-items-center" for="check-trolli4">
                        <div class="check-icon"></div>
                        <div class="check-status">
                            <div class="on">On</div>
                            <div class="off">Off</div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="input-trolli5">Trolli 5</label>
                <div class="d-flex align-items-center">
                    <input type="text" class="form-control" id="input-trolli5">
                    <input type="checkbox" name="check-trolli" id="check-trolli5" class="check-trolli">
                    <label class="check-info d-flex align-items-center" for="check-trolli5">
                        <div class="check-icon"></div>
                        <div class="check-status">
                            <div class="on">On</div>
                            <div class="off">Off</div>
                        </div>
                    </label>
                </div>
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

<!-- Modal Tambah Resep -->
<div class="modal fade" id="tambahResep" tabindex="-1" role="dialog" aria-labelledby="tambahResepLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahResepLabel">Resep Baru</h5>
        <div class="text-gray-900">Input nama resep dan kode resep pada tempat yang telah disediakan</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="mb-3">
                <label for="kode-resep">Kode Resep</label>
                <input type="text" class="form-control" id="kode-resep" name="kode-resep">
            </div>
            <div class="mb-3">
                <label for="nama-resep">Nama Resep</label>
                <textarea type="text" class="form-control" id="nama-resep" name="nama-resep"></textarea>
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

<!-- Modal Tambah Versi -->
<div class="modal fade" id="tambahVersiModal" tabindex="-1" role="dialog" aria-labelledby="tambahVersiModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="stepForm">
            <ul class="step-header">
                <li class="step1"><div class="number-step">1</div>Versi</li>
                <li class="step2"><div class="number-step">2</div>Trolli</li>
                <li class="step3"><div class="number-step">3</div>Durasi</li>
                <li class="step4"><div class="number-step">4</div>Keterangan</li>
            </ul>
            <div class="step-wrapper">
                <div class="step" id="step1">
                    <div class="mb-3">
                        <label for="koderesep">Kode resep</label>
                        <input type="text" id="koderesep" name="koderesep" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="namaresep">Nama resep</label>
                        <input type="text" id="namaresep" name="namaresep" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="namaresep">Versi</label>
                        <input type="text" id="versi" name="versi" class="form-control">
                    </div>
                    <div class="button-step d-flex justify-content-end">
                        <button type="button" onclick="nextStep()" class="btn btn-primary font-weight-semibold">NEXT <i class="fa fa-chevron-right ml-2"></i></button>
                    </div>
                </div>

                <div class="step" id="step2">
                    <div class="mb-3">
                        <label for="flip">Flip</label>
                        <input type="text" id="flip" name="flip" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="biasa">Biasa</label>
                        <input type="text" id="biasa" name="biasa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="longgar">Longgar</label>
                        <input type="text" id="longgar" name="longgar" class="form-control">
                    </div>
                    <div class="button-step d-flex justify-content-between">
                        <button type="button" onclick="prevStep()" class="btn btn-secondary font-weight-semibold"><i class="fa fa-chevron-left mr-2"></i> BACK</button>
                        <button type="button" onclick="nextStep()" class="btn btn-primary font-weight-semibold">NEXT <i class="fa fa-chevron-right ml-2"></i></button>
                    </div>
                </div>

                <div class="step" id="step3">
                    <div class="mb-3">
                        <label for="durasimasak">Durasi masak</label>
                        <input type="text" id="durasimasak" name="durasimasak" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="durasiminimal">Durasi minimal</label>
                        <input type="text" id="durasiminimal" name="durasiminimal" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="durasimaksimal">Durasi maksimal</label>
                        <input type="text" id="durasimaksimal" name="durasimaksimal" class="form-control">
                    </div>
                    <div class="button-step d-flex justify-content-between">
                        <button type="button" onclick="prevStep()" class="btn btn-secondary font-weight-semibold"><i class="fa fa-chevron-left mr-2"></i> BACK</button>
                        <button type="button" onclick="nextStep()" class="btn btn-primary font-weight-semibold">NEXT <i class="fa fa-chevron-right ml-2"></i></button>
                    </div>
                </div>

                <div class="step" id="step4">
                    <div class="mb-3">
                        <label for="keterangan">Keterangan versi</label>
                        <textarea name="keterangan" id="keterangan" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <div class="button-step d-flex justify-content-between">
                        <button type="button" onclick="prevStep()" class="btn btn-secondary font-weight-semibold"><i class="fa fa-chevron-left mr-2"></i> BACK</button>
                        <button type="submit" class="btn btn-primary font-weight-semibold">SAVE</button>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>

	$('#resep-menu').addClass('active');	

    
    let currentStep = 0;
    const steps = document.querySelectorAll(".step");
    const stepHeaders = document.querySelectorAll(".step-header li");

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            if (index === stepIndex) {
                // step.style.display = "block";
                step.classList.add("active");
            } else {
                // step.style.display = "none";
                step.classList.remove("active");
            }
        });
        updateStepHeader(stepIndex);
    }

    function updateStepHeader(stepIndex) {
        stepHeaders.forEach((header, index) => {
            if (index === stepIndex) {
                header.classList.add("completed");
            } else if (index < stepIndex) {
                header.classList.add("completed");
            } else {
                header.classList.remove("completed");
            }
        });
    }

    function nextStep() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function prevStep() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    }

    showStep(currentStep); // Show the first step initially
</script>

@include('footer')
