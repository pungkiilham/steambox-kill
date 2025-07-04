@include('header')

<body id="pemasakan-page">

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
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search Nomor Steambox" aria-label="Search" aria-describedby="basic-addon2">

                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </form>
                                <div class="d-flex align-items-center">
                                    <div class="form-number d-flex align-items-center mr-3">
                                        <label for="" class="mb-0 mr-2 font-weight-semibold text-gray-900">Mulai Pemasakan (derajat)</label>
                                        <input type="text" class="form-control text-center font-weight-semibold text-gray-900" style="width:60px">
                                    </div>
                                    <button class="btn bg-white text-gray-700 py-1 shadow"><i class="fa fa-save"></i></button>
                                    {{-- <div class="form-number d-flex align-items-center mr-2">
                                        <label for="" class="mb-0 mr-2 font-weight-semibold text-gray-900">Standar Pemanasan (menit)</label>
                                        <input type="text" class="form-control text-center font-weight-semibold text-gray-900" style="width:60px">
                                    </div>
                                    <button class="btn bg-white text-gray-700 py-1 shadow"><i class="fa fa-save"></i></button> --}}
                                    <div class="button-header ml-4">
                                        <button class="btn bg-white text-gray-600 py-1 shadow"  data-toggle="modal" data-target="#listWarna" type="button"><i class="fa fa-list"></i> List Warna</button>
                                        <button class="btn bg-white text-gray-600 py-1 shadow ml-1"  data-toggle="modal" data-target="#tambahWarna" type="button"><i class="fa fa-plus"></i> Add Warna</button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center legend-box">
                                    <div class="legend-steambox">
                                        <input type="radio" id="checkbox1" name="legend-input">
                                        <label for="checkbox1" id="label1" class="legend-title"><span class="color-legend" style="background:#fff"></span>Belum terisi</label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="radio" id="checkbox2" name="legend-input">
                                        <label for="checkbox2" id="label2" class="legend-title"><span class="color-legend" style="background:#ecff0f"></span>Pemanasan</label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="radio" id="checkbox3" name="legend-input">
                                        <label for="checkbox3" id="label3" class="legend-title"><span class="color-legend" style="background:#2be172"></span>Pemasakan</label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="radio" id="checkbox4" name="legend-input">
                                        <label for="checkbox4" id="label4" class="legend-title"><span class="color-legend" style="background:#39e8f8"></span>15 Menit pemasakan berakhir</label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="radio" id="checkbox5" name="legend-input">
                                        <label for="checkbox5" id="label5" class="legend-title"><span class="color-legend" style="background:#e10200"></span>COMM error</label>
                                    </div>
                                    <div class="legend-steambox">
                                        <input type="radio" id="checkbox6" name="legend-input">
                                        <label for="checkbox6" id="label6" class="legend-title"><span class="color-legend" style="background:#894ddd"></span>Kendala produksi</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary short-button bg-white shadow border-0 text-gray-700 d-flex align-items-center"><span class="material-symbols-outlined">swap_vert</span></button>
                                <button class="btn btn-primary short-button bg-white shadow border-0 text-gray-700 d-flex align-items-center"><span class="material-symbols-outlined">refresh</span></button>

                            </div>
                            <div class="row data-pemasakan mt-4">
                                <div class="col-12 col-sm-12">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <th style="width:15%">No. Steambox</th>
                                                    <th style="width:65%">Status</th>
                                                    <th style="width:20%">Button Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="number-pemasakan">01</div>
                                                    </td>
                                                    <td>
                                                        <div class="status-stop">STOP / BERHENTI</div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-green" data-toggle="modal" data-target="#mulaiTugasBaru">
                                                            Mulai Tugas Baru
                                                            <span class="material-symbols-outlined">
                                                            library_add_check
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-yellow" data-toggle="modal" data-target="#tambahKeterangan">
                                                            Tambah Keterangan
                                                            <span class="material-symbols-outlined">
                                                            edit_document
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="card p-0 shadow maintenance-status">
                                        <div class="card-body p-0">
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <th style="width:15%">No. Steambox</th>
                                                    <th style="width:65%">Status</th>
                                                    <th style="width:20%">Button Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="number-pemasakan">02</div>
                                                    </td>
                                                    <td>
                                                        <div class="status-stop">STOP / BERHENTI</div>
                                                        <div class="maintenance-alert">maintenance : mesin tidak dapat digunakan karena seal bocor</div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-green" data-toggle="modal" data-target="#mulaiTugasBaru" disabled>
                                                            Mulai Tugas Baru
                                                            <span class="material-symbols-outlined">
                                                            library_add_check
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-yellow" data-toggle="modal" data-target="#tambahKeterangan" disabled>
                                                            Tambah Keterangan
                                                            <span class="material-symbols-outlined">
                                                            edit_document
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="card p-0 shadow comm-error">
                                        <div class="card-body p-0">
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <th style="width:15%">No. Steambox</th>
                                                    <th style="width:35%">Detail Produk</th>
                                                    <th style="width:30%">Detail Proses</th>
                                                    <th style="width:20%">Button Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="number-pemasakan bg-pemanasan">06</div>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td>Suhu Awal</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Suhu Aktual</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="font-weight-bold text-red text-center text-error">COMM Error</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td class="text-center">Surya Bintang Kancing Mitra Gondang Legi Kerep</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 1 / Merah / 90 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 2 / Putih / 10 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 3 / Putih Kuning / 10 Gelondong</td>
                                                            </tr>
                                                        </table>
                                                        <table class="w-100">
                                                            <tr>
                                                                <th style="width:25%">Versi Resep</th>
                                                                <th style="width:25%">Jenis Troli</th>
                                                                <th style="width:50%">Kode Resep</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">Longgar</td>
                                                                <td class="text-center">KCSURYA KNG LBR</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Jam Mulai</td>
                                                                <td class="text-right">10:30:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemanasan</td>
                                                                <td class="text-right">00:20:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Pemasakan</td>
                                                                <td class="text-right">10:50:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemasakan</td>
                                                                <td class="text-right">01:15:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tambahan Waktu</td>
                                                                <td class="text-right">+ 00:02:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Selesai</td>
                                                                <td class="text-right">
                                                                    <div class="d-flex justify-content-between w-100 align-items-center"><i class="fa fa-flag text-green"></i>12:07:50</div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-red" data-toggle="modal" data-target="#stopPemasakan">
                                                            Stop Pemasakan
                                                            <span class="material-symbols-outlined">
                                                            error
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-blue" data-toggle="modal" data-target="#tambahWaktu">
                                                            Tambah Waktu
                                                            <span class="material-symbols-outlined">
                                                            more_time
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-yellow" data-toggle="modal" data-target="#tambahKeterangan">
                                                            Tambah Keterangan
                                                            <span class="material-symbols-outlined">
                                                            edit_document
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <th style="width:15%">No. Steambox</th>
                                                    <th style="width:35%">Detail Produk</th>
                                                    <th style="width:30%">Detail Proses</th>
                                                    <th style="width:20%">Button Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="number-pemasakan bg-pemanasan">18</div>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td>Suhu Awal</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Suhu Aktual</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="">&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td class="text-center">Surya Bintang Kancing Mitra Gondang Legi Kerep</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 1 / Merah / 90 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 2 / Putih / 10 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                        <table class="w-100">
                                                            <tr>
                                                                <th style="width:25%">Versi Resep</th>
                                                                <th style="width:25%">Jenis Troli</th>
                                                                <th style="width:50%">Kode Resep</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">Longgar</td>
                                                                <td class="text-center">KCSURYA KNG LBR</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Jam Mulai</td>
                                                                <td class="text-right">10:30:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemanasan</td>
                                                                <td class="text-right">00:20:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Pemasakan</td>
                                                                <td class="text-right">10:50:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemasakan</td>
                                                                <td class="text-right">01:15:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tambahan Waktu</td>
                                                                <td class="text-right">+ 00:02:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Selesai</td>
                                                                <td class="text-right">
                                                                    <div class="d-flex justify-content-between w-100 align-items-center"><i class="fa fa-flag text-green"></i>12:07:50</div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-red" data-toggle="modal" data-target="#stopPemasakan">
                                                            Stop Pemasakan
                                                            <span class="material-symbols-outlined">
                                                            error
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-blue" data-toggle="modal" data-target="#tambahWaktu">
                                                            Tambah Waktu
                                                            <span class="material-symbols-outlined">
                                                            more_time
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-yellow" data-toggle="modal" data-target="#tambahKeterangan">
                                                            Tambah Keterangan
                                                            <span class="material-symbols-outlined">
                                                            edit_document
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12">
                                    <div class="card p-0 shadow comm-error">
                                        <div class="card-body p-0">
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <th style="width:15%">No. Steambox</th>
                                                    <th style="width:35%">Detail Produk</th>
                                                    <th style="width:30%">Detail Proses</th>
                                                    <th style="width:20%">Button Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="number-pemasakan bg-pemasakan">19</div>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td>Suhu Awal</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Suhu Aktual</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="font-weight-bold text-red text-center text-error">COMM Error</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td class="text-center">Surya Bintang Kancing Mitra Gondang Legi Kerep</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 1 / Merah / 90 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 2 / Putih / 10 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 3 / Putih Kuning / 10 Gelondong</td>
                                                            </tr>
                                                        </table>
                                                        <table class="w-100">
                                                            <tr>
                                                                <th style="width:25%">Versi Resep</th>
                                                                <th style="width:25%">Jenis Troli</th>
                                                                <th style="width:50%">Kode Resep</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">Longgar</td>
                                                                <td class="text-center">KCSURYA KNG LBR</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Jam Mulai</td>
                                                                <td class="text-right">10:30:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemanasan</td>
                                                                <td class="text-right">00:20:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Pemasakan</td>
                                                                <td class="text-right">10:50:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemasakan</td>
                                                                <td class="text-right">01:15:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tambahan Waktu</td>
                                                                <td class="text-right">+ 00:02:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Selesai</td>
                                                                <td class="text-right">
                                                                    <div class="d-flex justify-content-between w-100 align-items-center"><i class="fa fa-flag text-green"></i>12:07:50</div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-red" data-toggle="modal" data-target="#stopPemasakan">
                                                            Stop Pemasakan
                                                            <span class="material-symbols-outlined">
                                                            error
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-blue" data-toggle="modal" data-target="#tambahWaktu">
                                                            Tambah Waktu
                                                            <span class="material-symbols-outlined">
                                                            more_time
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-yellow" data-toggle="modal" data-target="#tambahKeterangan">
                                                            Tambah Keterangan
                                                            <span class="material-symbols-outlined">
                                                            edit_document
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="produksi-comment">produksi : ada kebocoran di pintu, pintu tidak bisa dibuka</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="card p-0 shadow ">
                                        <div class="card-body p-0">
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <th style="width:15%">No. Steambox</th>
                                                    <th style="width:35%">Detail Produk</th>
                                                    <th style="width:30%">Detail Proses</th>
                                                    <th style="width:20%">Button Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="number-pemasakan bg-pemasakan">11</div>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td>Suhu Awal</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Suhu Aktual</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="font-weight-bold text-red text-center text-error">&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td class="text-center">Surya Bintang Kancing Mitra Gondang Legi Kerep</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 1 / Merah / 90 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 2 / Putih / 10 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                        <table class="w-100">
                                                            <tr>
                                                                <th style="width:25%">Versi Resep</th>
                                                                <th style="width:25%">Jenis Troli</th>
                                                                <th style="width:50%">Kode Resep</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">Longgar</td>
                                                                <td class="text-center">KCSURYA KNG LBR</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Jam Mulai</td>
                                                                <td class="text-right">10:30:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemanasan</td>
                                                                <td class="text-right">00:20:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Pemasakan</td>
                                                                <td class="text-right">10:50:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemasakan</td>
                                                                <td class="text-right">01:15:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tambahan Waktu</td>
                                                                <td class="text-right">+ 00:02:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Selesai</td>
                                                                <td class="text-right">
                                                                    <div class="d-flex justify-content-between w-100 align-items-center"><i class="fa fa-flag text-green"></i>12:07:50</div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-red" data-toggle="modal" data-target="#stopPemasakan">
                                                            Stop Pemasakan
                                                            <span class="material-symbols-outlined">
                                                            error
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-blue" data-toggle="modal" data-target="#tambahWaktu">
                                                            Tambah Waktu
                                                            <span class="material-symbols-outlined">
                                                            more_time
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-yellow" data-toggle="modal" data-target="#tambahKeterangan">
                                                            Tambah Keterangan
                                                            <span class="material-symbols-outlined">
                                                            edit_document
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="produksi-comment">produksi : ada kebocoran di pintu, pintu tidak bisa dibuka</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <div class="card p-0 shadow ">
                                        <div class="card-body p-0">
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <th style="width:15%">No. Steambox</th>
                                                    <th style="width:35%">Detail Produk</th>
                                                    <th style="width:30%">Detail Proses</th>
                                                    <th style="width:20%">Button Aksi</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="number-pemasakan bg-pemasakan">12</div>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td>Suhu Awal</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Suhu Aktual</td>
                                                                <td>92 C</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="font-weight-bold text-red text-center text-error">&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="w-100">
                                                            <tr>
                                                                <td class="text-center">Surya Bintang Kancing Mitra Gondang Legi Kerep</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 1 / Merah / 90 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Batch 2 / Putih / 10 Gelondong</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                        <table class="w-100">
                                                            <tr>
                                                                <th style="width:25%">Versi Resep</th>
                                                                <th style="width:25%">Jenis Troli</th>
                                                                <th style="width:50%">Kode Resep</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-center">Longgar</td>
                                                                <td class="text-center">KCSURYA KNG LBR</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Jam Mulai</td>
                                                                <td class="text-right">10:30:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemanasan</td>
                                                                <td class="text-right">00:20:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Pemasakan</td>
                                                                <td class="text-right">10:50:50</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Durasi Pemasakan</td>
                                                                <td class="text-right">01:15:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tambahan Waktu</td>
                                                                <td class="text-right">+ 00:02:00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jam Selesai</td>
                                                                <td class="text-right">
                                                                    <div class="d-flex justify-content-between w-100 align-items-center"><i class="fa fa-flag text-green"></i>12:07:50</div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-red" data-toggle="modal" data-target="#stopPemasakan">
                                                            Stop Pemasakan
                                                            <span class="material-symbols-outlined">
                                                            error
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-blue" data-toggle="modal" data-target="#tambahWaktu">
                                                            Tambah Waktu
                                                            <span class="material-symbols-outlined">
                                                            more_time
                                                            </span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-yellow" data-toggle="modal" data-target="#tambahKeterangan">
                                                            Tambah Keterangan
                                                            <span class="material-symbols-outlined">
                                                            edit_document
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="produksi-comment">produksi : ada kebocoran di pintu, pintu tidak bisa dibuka</td>
                                                </tr>
                                                <tr>
                                                    <td class="maintenance-alert py-2 bg-red text-white" colspan="4">maintenance : mesin tidak dapat digunakan karena seal bocor</td>
                                                </tr>
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

<!-- Modal Tugas Baru -->
<div class="modal fade" id="mulaiTugasBaru" tabindex="-1" role="dialog" aria-labelledby="mulaiTugasBaruLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mulaiTugasBaruLabel">Mulai Tugas Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="myForm">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="resepList" class="text-gray-900 font-weight-semibold">1. Nama Resep</label>
						<select id="resepList" name="namaresep" class="w-100">
							<option value="">Pilih resep</option>
							<option value="1">KCSURYA KNG LBR KCL MRAH VVIP 05</option>
							<option value="2">KCSURYA KNG LBR KCL MRAH VVIP 06</option>
							<option value="3">KCSURYA KNG LBR KCL MRAH VVIP 07</option>
						</select>
                        <span id="nameError" class="text-danger"></span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="versi" class="text-gray-900 font-weight-semibold">2. Versi</label>
                        <select name="versi" class="versi-input form-control" id="versi" >
                            <option value="">Pilih versi</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <span id="versiError" class="text-danger"></span>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="form-group">
                        <label for="trolli" class="text-gray-900 font-weight-semibold">3. Nama Trolli</label>
                        <select name="trolli" class="trolli-input form-control" id="trolli" >
                            <option value="">Pilih trolli</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <span id="trolliError" class="text-danger"></span>
                    </div>
                </div>
            </div>
            <label for="" class="text-gray-900 font-weight-semibold mt-3">4. Detail Produk</label>
            <div class="row align-items-end position-relative">
                <div class="col-12 col-sm-10" id="produk-add">
                    <div class="row produk-row mb-3">
                        <div class="col-12 col-sm-3 text-gray-900 font-weight-semibold  pt-4 mt-1">Item Produk 1</div>
                        <div class="col-12 col-sm-5">
                            <label for="" class="mb-1 text-gray-800">Warna</label>
                            <select name="pilihan[]" class="warna-input form-control">
                            <option value="">Pilih warna</option>
                            <option value="1">Pilihan 1</option>
                            <option value="2">Pilihan 2</option>
                            <option value="3">Pilihan 3</option>
                            </select>
                            <span class="error-message"></span>
                        </div>
                        <div class="col-12 col-sm-2">
                            <label for="" class="mb-1 text-gray-700">Batch</label>
                            <input type="text" class="batch-input  form-control" name="batch[]" /><span class="error-message"></span>
                        </div>
                        <div class="col-12 col-sm-2">
                            <label for="" class="mb-1 text-nowrap text-gray-700">Jmlh Gelondong</label>
                            <input type="number" class="gelondong-input form-control" name="gelondong[]" /><span class="error-message">sisa: 40 gldng</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2 text-right">
                    <div id="buttonContainer" class="mb-3 pb-1">
                        <button id="addRow">+</button>
                        <button id="deleteLastRow">-</button>
                    </div>
                </div>
                <div class="last-item ">
                    <label class="d-flex align-items-center"><input type="checkbox" name="last-produk" id="" class="mb-0 mr-1"> Sudah tidak ada tambahan item</label>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-12 col-sm-5">
                    <div class="form-group">
                        <label for="namaresep" class="text-gray-900 font-weight-semibold">5. Tambahan waktu (optional)</label>
                        <div class="input-group mb-3">
                            <input type="text" id="namaresep" name="namaresep" class=" form-control" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">menit</span>
                            </div>
                        </div>
                        <span id="nameError" class="text-danger"></span>
                    </div>
                </div>
            </div>
				<button type="submit" class="btn btn-primary" id="sisaGelondongButton">Sisa Gelondong</button>
				<button type="submit" class="btn btn-primary" id="kelebihanGelondongButton">Kelebihan Gelondong</button>
				<button type="submit" class="btn btn-primary" id="batchTerpakaiButton">Batch Sudah Terpakai</button>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary mr-4" id="closeButton" data-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
            </div>
        </form>


      </div>
    </div>
  </div>
</div>

<!-- Modal Alert -->
<div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="modalAlertLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		<div id="modalMessage">
			Isi popup akan ditampilkan di sini...
		</div>
		<div class="d-flex justify-content-center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  Oke, Saya Mengerti
			</button>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Warning -->
<div class="modal fade" id="modalWarning" tabindex="-1" role="dialog" aria-labelledby="modalWarningLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-gray-900">
		<span class="material-symbols-outlined">warning</span>
		<h2>PERHATIAN !</h2>
		<div id="modalWarningMessage">
			Isi popup akan ditampilkan di sini...
		</div>
		<div class="d-flex justify-content-center mt-4">
			<button type="button" class="close no-button mr-5" data-dismiss="modal" aria-label="Close">
			  Tidak
			</button>
			<button type="button" class="close yes-button" data-dismiss="modal" aria-label="Close">
			  Ya
			</button>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Keterngan -->
<div class="modal fade" id="tambahKeterangan" tabindex="-1" role="dialog" aria-labelledby="tambahKeteranganLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:350px">
    <div class="modal-content">
      <div class="modal-header text-center pt-1" style="border-bottom:0;padding-bottom:0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title text-center mb-4" id="tambahKeteranganLabel">Steambox 1</h5>
        <form action="">
            <div class="">
                <label for="" class="mb-1 text-gray-700">Tambah keterangan:</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="mt-5">
                <button type="button" class="btn btn-primary btn-yellow w-100 mb-2">Tambah Keterangan</button>
                <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Add Warna-->
<div class="modal fade" id="tambahWarna" tabindex="-1" role="dialog" aria-labelledby="tambahWarnaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:450px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahWarnaLabel">Add warna</h5>
        <div class="text-gray-900">Input warna pada tempat yang telah disediakan</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div id="list-warnainput">
                <div class="mb-3">
                    <label for="" class="mb-1 text-gray-700">Jenis warna</label>
                    <div class="d-flex">
                        <input type="text" id="tambahwaktu" name="tambahwaktu" class=" form-control" placeholder="">
                        <span class="remove-button ml-2" style="opacity:0"></span>
                    </div>
                </div>
            </div>
            <div class="d-flex pt-4 justify-content-between">
                <button id="addButton" class="btn btn-primary" type="button" ><span class="material-symbols-outlined mr-1">add_box</span>Add input</button>
                <div class="d-flex">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-blue ml-2">Save</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Add Warna-->
<div class="modal fade" id="listWarna" tabindex="-1" role="dialog" aria-labelledby="listWarnaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:450px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="listWarnaLabel">List warna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="search-form mb-3">
            <div class="input-group">
                <input type="text" class="form-control bg-light bg-white small" placeholder="Search warna, contoh: merah putih" aria-label="Search" aria-describedby="basic-addon2" fdprocessedid="g8xacu">

                <button class="btn btn-primary" type="button" fdprocessedid="51r28">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </form>
        <div id="list-warna">
            <table class="table mb-0">
                <tr>
                    <th style="width:14%">No</th>
                    <th>Jenis Warna</th>
                    <th style="width:17%">Aksi</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>merah</td>
                    <td class="text-center"><button class="btn btn-secondary px-2"><span class="material-symbols-outlined">delete</span></button></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>merah putih</td>
                    <td class="text-center"><button class="btn btn-secondary px-2"><span class="material-symbols-outlined">delete</span></button></td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>hijau</td>
                    <td class="text-center"><button class="btn btn-secondary px-2"><span class="material-symbols-outlined">delete</span></button></td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>hijau kuning</td>
                    <td class="text-center"><button class="btn btn-secondary px-2"><span class="material-symbols-outlined">delete</span></button></td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>hijau putih</td>
                    <td class="text-center"><button class="btn btn-secondary px-2"><span class="material-symbols-outlined">delete</span></button></td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Waktu -->
<div class="modal fade" id="tambahWaktu" tabindex="-1" role="dialog" aria-labelledby="tambahWaktuLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:350px">
    <div class="modal-content">
      <div class="modal-header text-center pt-1" style="border-bottom:0;padding-bottom:0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title text-center mb-4" id="tambahWaktuLabel">Steambox 1</h5>
        <form action="">
            <div class="">
                <label for="" class="mb-1 text-gray-700">Tambahan waktu:</label>
                <div class="input-group mb-3">
                    <input type="text" id="tambahwaktu" name="tambahwaktu" class=" form-control" placeholder="">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">menit</span>
                    </div>
                </div>
            </div>
            <div class="mt-4 pt-3">
                <button type="button" class="btn btn-primary btn-blue w-100 mb-2">Tambah Waktu</button>
                <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Stop Pemasakan -->
<div class="modal fade" id="stopPemasakan" tabindex="-1" role="dialog" aria-labelledby="stopPemasakanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:350px">
    <div class="modal-content">
      <div class="modal-header text-center pt-1" style="border-bottom:0;padding-bottom:0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title text-center mb-4" id="stopPemasakanLabel">Steambox 1</h5>
        <form action="">
            <div class="font-weight-semibold text-gray-900 text-center">Apakah Anda yakin menghentikan operasi pada mesin ini?</div>
            <div class="mt-5">
                <button type="button" class="btn btn-primary btn-red w-100 mb-2">STOP</button>
                <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Cancel</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>

	$('#pemasakan-menu').addClass('active');

	$(document).ready(function() {
		$('#resepList').select2();

		// Menambahkan event handler untuk perubahan nilai pada Select2
		$('#resepList').on('change', function() {
			var errorMessage = document.getElementById("nameError");
			errorMessage.textContent = ""; // Menghapus pesan kesalahan
		});
	});

	// Fungsi untuk menampilkan modal alert
	function showModal(message) {
		var modal = document.getElementById("modalAlert");
		var modalMessage = document.getElementById("modalMessage");
		modalMessage.innerHTML = message;
		modal.style.display = "block";
		modal.classList.add("show");

		// Menutup modal popup saat tombol close diklik
		var closeBtn = modal.querySelector(".close");
		closeBtn.onclick = function() {
		modal.style.display = "none";
		};

		// Menutup modal popup saat mengklik di luar area modal
		window.onclick = function(event) {
		if (event.target == modal) {
		  modal.style.display = "none";
		}
		};
	}

	// Mengecek apakah input sudah diisi dan memberikan gaya border hijau
	function checkInputFilled(inputElement) {
		if (inputElement.value.trim() !== "") {
			inputElement.style.border = "1px solid green"; // Atur gaya border menjadi hijau jika input sudah diisi
		} else {
			inputElement.style.border = ""; // Hapus gaya border jika input kosong
		}
	}

	// Menambahkan event listener untuk setiap input
	var inputs = document.querySelectorAll(".batch-input, .gelondong-input, .versi-input, #namaresep, .trolli-input, .warna-input, #resepList");
	inputs.forEach(function(input) {
		input.addEventListener("input", function() {
			checkInputFilled(input); // Panggil fungsi untuk memeriksa apakah input sudah diisi
		});
	});

	function addRow() {
		var rowCount = document.querySelectorAll("#produk-add .produk-row").length;
		var newRow = document.createElement("div");
		newRow.classList.add("row", "produk-row", "mb-3");

		if (rowCount >= 3) {
			showModal("<p class='text-center'>Sudah terdapat 3 inputan item produk.</p><p class='text-center'>Anda tidak dapat menambah inputan item produk lagi karena sudah mencapai batas maksimal.</p>");
			return; // Menghentikan fungsi jika jumlah baris sudah mencapai batas maksimum
		}

		var itemLabel = document.createElement("div");
		itemLabel.classList.add("col-12", "col-sm-3", "text-gray-900", "font-weight-semibold", "mt-1", "pt-4");
		itemLabel.textContent = "Item Produk " + (rowCount + 1);
		newRow.appendChild(itemLabel);

		var selectCol = document.createElement("div");
		selectCol.classList.add("col-12", "col-sm-5");
		newRow.appendChild(selectCol);

		var selectLabel = document.createElement("label");
		selectLabel.classList.add("mb-1", "text-gray-800");
		selectLabel.textContent = "Warna";
		selectCol.appendChild(selectLabel);

		var select = document.createElement("select");
		select.name = "pilihan[]";
		select.classList.add("warna-input", "form-control");
		selectCol.appendChild(select);

		var optionDefault = document.createElement("option");
		optionDefault.value = "";
		optionDefault.textContent = "Pilih warna";
		select.appendChild(optionDefault);

		var option1 = new Option("Pilihan 1", "1");
		var option2 = new Option("Pilihan 2", "2");
		var option3 = new Option("Pilihan 3", "3");
		select.appendChild(option1);
		select.appendChild(option2);
		select.appendChild(option3);

		var selectError = document.createElement("span");
		selectError.classList.add("error-message");
		selectCol.appendChild(selectError);

		var batchCol = document.createElement("div");
		batchCol.classList.add("col-12", "col-sm-2");
		newRow.appendChild(batchCol);

		var batchLabel = document.createElement("label");
		batchLabel.classList.add("mb-1", "text-gray-700");
		batchLabel.textContent = "Batch";
		batchCol.appendChild(batchLabel);

		var batchInput = document.createElement("input");
		batchInput.type = "text";
		batchInput.name = "batch[]";
		batchInput.classList.add("batch-input", "form-control");
		batchCol.appendChild(batchInput);

		var batchError = document.createElement("span");
		batchError.classList.add("error-message");
		batchCol.appendChild(batchError);

		var gelondongCol = document.createElement("div");
		gelondongCol.classList.add("col-12", "col-sm-2");
		newRow.appendChild(gelondongCol);

		var gelondongLabel = document.createElement("label");
		gelondongLabel.classList.add("mb-1", "text-nowrap", "text-gray-700");
		gelondongLabel.textContent = "Jmlh Gelondong";
		gelondongCol.appendChild(gelondongLabel);

		var gelondongInput = document.createElement("input");
		gelondongInput.type = "number";
		gelondongInput.name = "gelondong[]";
		gelondongInput.classList.add("gelondong-input", "form-control");
		gelondongCol.appendChild(gelondongInput);

		var gelondongError = document.createElement("span");
		gelondongError.classList.add("error-message");
		gelondongCol.appendChild(gelondongError);

		// Menambahkan event listener untuk memeriksa input saat berubah
		select.addEventListener("change", function () {
			checkInputFilled(select);
		});

		batchInput.addEventListener("input", function () {
			checkInputFilled(batchInput);
		});

		gelondongInput.addEventListener("input", function () {
			checkInputFilled(gelondongInput);
		});

		// Menambahkan baris baru ke dalam kontainer
		document.getElementById("produk-add").appendChild(newRow);

		// Menambahkan event listener untuk memeriksa input saat berubah pada baris baru
		newRow.querySelectorAll(".batch-input, .gelondong-input, .warna-input").forEach(function (input) {
			input.addEventListener("input", function () {
				clearErrorMessage(input);
			});
		});
	}



	// Fungsi untuk menghapus baris terakhir
	function deleteLastRow() {
	  var rowCount = document.querySelectorAll("#produk-add .produk-row").length;
	  if (rowCount > 1) { // Pastikan ada lebih dari satu baris sebelum menghapus
		document.querySelector("#produk-add .produk-row:last-child").remove();
	  } else {
		showModal("<p class='text-center'>Tidak dapat menghapus inputan item produk karena sudah mencapai batas minimal.</p>");
		return; // Menghentikan fungsi jika jumlah baris sudah mencapai batas maksimum
	  }
	}

	document.getElementById("addRow").addEventListener("click", addRow);
	document.getElementById("deleteLastRow").addEventListener("click", deleteLastRow);

	// Menghilangkan default behavior tombol tambah dan hapus untuk mencegah submit form
	document.getElementById("addRow").addEventListener("click", function(event) {
	  event.preventDefault(); // Menghentikan default behavior tombol tambah
	//   addRow();
	});

	// Menghilangkan default behavior tombol tambah dan hapus untuk mencegah submit form
	document.getElementById("deleteLastRow").addEventListener("click", function(event) {
	  event.preventDefault(); // Menghentikan default behavior tombol tambah
	//   deleteLastRow();
	});


	// Fungsi untuk menghapus pesan error jika input sudah terisi
	function clearErrorMessage(input) {
		var errorMessage = input.parentElement.querySelector(".error-message");
		errorMessage.textContent = "";
	}

	document.getElementById("submitButton").addEventListener("click", function(event) {
		var name = $("#resepList").val().trim(); // Menggunakan jQuery untuk mendapatkan nilai dari Select2
		var email = document.getElementById("versi").value.trim();
		var message = document.getElementById("trolli").value.trim();
		var error = false;

		// Validasi input Nama
		if (name === "") {
			document.getElementById("nameError").textContent = "isi resep";
            document.getElementById("resepList").classList.add("error-input"); // Tambahkan kelas error-input
			error = true;
		} else {
			document.getElementById("nameError").textContent = "";
            document.getElementById("resepList").classList.remove("error-input"); // Hapus kelas error-input jika tidak ada kesalahan
		}

		// Validasi input Email
		if (email === "") {
			document.getElementById("versiError").textContent = "isi versi";
            document.getElementById("versi").classList.add("error-input"); // Tambahkan kelas error-input
			error = true;
		} else {
			document.getElementById("versiError").textContent = "";
            document.getElementById("versi").classList.remove("error-input"); // Hapus kelas error-input jika tidak ada kesalahan
		}

		// Validasi input Pesan
		if (message === "") {
			document.getElementById("trolliError").textContent = "isi troli";
            document.getElementById("trolli").classList.add("error-input"); // Tambahkan kelas error-input
			error = true;
		} else {
			document.getElementById("trolliError").textContent = "";
            document.getElementById("trolli").classList.remove("error-input"); // Hapus kelas error-input jika tidak ada kesalahan
		}

		// Validasi input hasil dari addRow
		var warnaInputs = document.querySelectorAll(".warna-input");
		var batchInputs = document.querySelectorAll(".batch-input");
		var gelondongInputs = document.querySelectorAll(".gelondong-input");

		batchInputs.forEach(function(input) {
			if (input.value.trim() === "") {
				error = true;
				input.parentElement.querySelector(".error-message").textContent = "isi batch";
                input.classList.add("error-input");
			} else {
				clearErrorMessage(input); // Panggil fungsi untuk menghapus pesan error jika input sudah terisi
                input.classList.remove("error-input");
			}
		});

		gelondongInputs.forEach(function(input) {
			if (input.value.trim() === "") {
				error = true;
				input.parentElement.querySelector(".error-message").textContent = "isi gelondong";
                input.classList.add("error-input");
			} else {
				clearErrorMessage(input); // Panggil fungsi untuk menghapus pesan error jika input sudah terisi
                input.classList.remove("error-input");
			}
		});

		warnaInputs.forEach(function(input) {
			if (input.value.trim() === "") {
				error = true;
				input.parentElement.querySelector(".error-message").textContent = "isi warna";
                input.classList.add("error-input");
			} else {
				clearErrorMessage(input); // Panggil fungsi untuk menghapus pesan error jika input sudah terisi
                input.classList.remove("error-input");
			}
		});

		// Jika terdapat error, hentikan submit formulir
		if (error) {
			event.preventDefault();
			return false; // Tambahkan ini
		}
	});

	// Menambahkan event listener untuk setiap input
	var inputs = document.querySelectorAll(".batch-input, .gelondong-input, .warna-input");
	inputs.forEach(function(input) {
		input.addEventListener("input", function() {
			clearErrorMessage(input); // Panggil fungsi untuk menghapus pesan error saat input berubah
		});
	});

	// Fungsi untuk menghapus pesan error
	function clearErrorMessage(input) {
		input.parentElement.querySelector(".error-message").textContent = "";
	}

	// Menambahkan event listener untuk memeriksa setiap kali nilai selectbox berubah
	$("#versi, #trolli").change(function() {
		var inputId = $(this).attr("id");
		$("#" + inputId + "Error").text(""); // Menghapus teks error jika opsi telah dipilih
	});

	// Event handler for Select2 #resepList
	$('#resepList').on('change', function() {
		var select2Container = $('#select2-resepList-container');
		var selectedOption = $(this).find('option:selected').text().trim();

		if (selectedOption !== "") {
			select2Container.parent().css('border', '1px solid green'); // Set green border when an item is selected
		} else {
			select2Container.parent().css('border', ''); // Remove border if no item is selected
		}
	});




	// Fungsi untuk menampilkan modal warning
	function showWarningModal(message) {
		var modal = document.getElementById("modalWarning");
		var modalMessage = document.getElementById("modalWarningMessage");
		modalMessage.innerHTML = message;
		modal.style.display = "block";
		modal.classList.add("show");

		// Menutup modal popup saat tombol close diklik
		var closeBtn = modal.querySelector(".close");
		closeBtn.onclick = function() {
		modal.style.display = "none";
		};

		// Menutup modal popup saat mengklik di luar area modal
		window.onclick = function(event) {
		if (event.target == modal) {
		  modal.style.display = "none";
		}
		};
	}

	document.getElementById("sisaGelondongButton").addEventListener("click", function(event) {
		showWarningModal(
		'<p class="text-center">Terdapat sisa "20 gelondong" <br/>Apakah anda yakin tetap ingin memproses ini?</p><ul><li>jika "YA" maka sisa gelondong akan digunakan pada proses berikutnya yang menggunakan resep dan warna yang sama dengan proses ini.</li><li> jika "TIDAK" maka input gelondong sampai jumlahnya sama dengan batas max trolli yang dipilih.</li></ul>'
		);
		event.preventDefault(); // Menghentikan default behavior tombol tambah
	});

	document.getElementById("kelebihanGelondongButton").addEventListener("click", function(event) {
		showWarningModal(
		'<p class="text-center">Hari ini, ada sisa gelondong di batch sebelumnya dengan data</p><table class="table"><tr><td>resep</td><td>Surya Bintang Kancing Mitra Gondang Legi</td></tr><tr><td>versi</td><td>3</td></tr><tr><td>trolli</td><td>flip</td></tr><tr><td>warna</td><td>merah</td></tr><tr><td>batch</td><td>1</td></tr><tr><td>jmlh sisa gld</td><td>140</td></tr></table><p class="text-center">Apakah anda ingin melanjutkan sisa batch 1 : 40 gelondong?</p>'
		);
		event.preventDefault(); // Menghentikan default behavior tombol tambah
	});

	document.getElementById("batchTerpakaiButton").addEventListener("click", function(event) {
		showWarningModal(
		'<p class="text-center">Batch sudah terpakai dalam proses pemasakan, <br/>tidak ada sisa gelondong.</p><p class="text-center">Batch akan terganti otomatis dengan batch berikutnya.</p>'
		);
		event.preventDefault(); // Menghentikan default behavior tombol tambah
	});

    //tambah inputan warna
    document.addEventListener("DOMContentLoaded", function() {
        const wrapper = document.getElementById('list-warnainput');
        const addButton = document.getElementById('addButton');
        let counter = 2; // Untuk menyimpan angka urut

        // Fungsi untuk menambahkan elemen baru
        function addElement() {
            const div = document.createElement('div');
            div.className = 'mb-3';

            const label = document.createElement('label');
            label.className = 'mb-1 text-gray-700';
            label.textContent = 'Jenis warna';

            const inputGroup = document.createElement('div');
            inputGroup.className = 'd-flex';

            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'form-control';
            input.placeholder = '';

            const removeButton = document.createElement('span');
            removeButton.className = 'remove-button ml-2';
            removeButton.innerHTML = '<span class="material-symbols-outlined">close</span>';
            removeButton.addEventListener('click', function() {
                div.remove(); // Menghapus elemen ketika tombol hapus diklik
            });

            inputGroup.appendChild(input);
            inputGroup.appendChild(removeButton);

            div.appendChild(label);
            div.appendChild(inputGroup);

            wrapper.appendChild(div);

            counter++; // Meningkatkan angka urut setiap kali elemen ditambahkan
        }

        addButton.addEventListener('click', addElement);
    });
</script>

@include('footer')
