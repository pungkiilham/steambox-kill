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
                                <div class="d-flex align-items-center button-header">
                                    <button class="btn bg-white text-gray-600 shadow"><i class="fa fa-list"></i> Resep Baru</button>
                                    <button class="btn bg-white text-gray-600 shadow ml-3"><i class="fa fa-plus"></i> Add Trolli</button>
                                </div>
                            </div>
                            <div class="row data-resep mt-4">
                                <div class="col-12">
                                    <div class="card" style="overflow-x:auto">
                                        <div class="card-body">
                                            <table id="resepTable" class="table" style="">
                                                <thead class="text-nowrap text-center">
                                                    <tr>
                                                        <th rowspan="2">No.</th>
                                                        <th rowspan="2">SKU</th>
                                                        <th rowspan="2">Nama Resep</th>
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
                                                        <th>monomal</th>
                                                        <th>maksimal</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td rowspan="2" class="text-left text-gray-900">1</td>
                                                        <td rowspan="2" class="text-left text-gray-900">SBK</td>
                                                        <td rowspan="2" class="text-left text-gray-900">Surya Bintang Kancing</td>
                                                        <td class="text-gray-900">1</td>
                                                        <td class="text-nowrap">
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><div class="fa fa-edit"></div></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><div class="fa fa-eye"></div></a>
                                                            <a href="" class="btn bg-gray-200 px-2 py-1"><div class="fa fa-trash"></div></a>
                                                        </td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>50</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>120</td>
                                                        <td>119</td>
                                                        <td>121</td>
                                                        <td rowspan="2">aa</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-gray-900">2</td>
                                                        <td>edit hapus</td>
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

	$('#resep-menu').addClass('active');	
</script>

@include('footer')
