@include('header')

<body id="steambox-page">

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
                            <div class="d-flex justify-content-between">
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
                                <button class="btn btn-primary short-button bg-white shadow border-0 text-gray-700 d-flex align-items-center"><span class="material-symbols-outlined">swap_vert</span></button>
                                <button class="btn btn-primary short-button bg-white shadow border-0 text-gray-700 d-flex align-items-center"><span class="material-symbols-outlined">refresh</span></button>
                                <div class="list-resep">
                                    <select id="mySelect">
                                        <option value="">Pilih resep</option>
                                        <option value="1">KCSURYA KNG LBR KCL MRAH VVIP 05</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row data-steambox mt-4">
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">01</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">07</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">08</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">12</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">14</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">17</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">21</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">28</div>
                                                <div class="status-stembox">Belum Terisi</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">03</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow error">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">06</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow error">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">09</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">11</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">19</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">27</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">02</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">05</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">10</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">15</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">16</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">20</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">22</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">24</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">25</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">26</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow error">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">29</div>
                                                <div class="status-stembox" style="background:#ecff0f">Pemanasan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">04</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow error">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">13</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">18</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">23</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3 col-lg-2">
                                    <div class="card p-0 shadow">
                                        <div class="card-body p-0">
                                            <div class="d-flex justify-content-between px-1 py-1">
                                                <div class="number-steambox">30</div>
                                                <div class="status-stembox" style="background:#2be172">Pemasakan</div>
                                            </div>
                                            <table class="table w-100 m-0">
                                                <tr>
                                                    <td style="width:55%">Nama Resep</td>
                                                    <td>SBKKO</td>
                                                </tr>
                                                <tr>
                                                    <td>Suhu Aktual/Target</td>
                                                    <td>80 C/90 C</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Mulai</td>
                                                    <td>10 : 00 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Selesai Pemanasan</td>
                                                    <td>10 : 15 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Jam Selesai</td>
                                                    <td>12 : 05 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>Hitung Mundur</td>
                                                    <td>02 : 10 : 40</td>
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
