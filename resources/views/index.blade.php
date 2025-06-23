@include('header')

<body id="operator-page">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 bg-white mt-4 rounded px-2 py-2 shadow header-operator">
                <h1 class="h3 mb-0 text-gray-800 ml-2"><img src="{{ asset('images/ptsiap_logo.png') }}" alt="" class="logo-header"></h1>
                <div id="current-time">
                    <span id="current-hour"></span>:<span id="current-minute"></span>:<span id="current-second"></span>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-12">
                    <div class="table-wrapper">
                        <table class="table-data-operator table">
                            <thead class="text-center">
                            <tr>
                                <th>No.SB</th>
                                <th>Resep</th>
                                <th>Jam Selesai Masak</th>
                                <th>Sisa Waktu Pemasakan</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>17</td>
                                    <td class="nama-resep">Surya Bintang Gondang Kecil Kuning Trial</td>
                                    <td>15:53:40</td>
                                    <td class="countdown" data-finish-time="15:53:40"></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td class="nama-resep">Surya Bintang Gondang Besar Merah Putih</td>
                                    <td>15:55:00</td>
                                    <td class="countdown" data-finish-time="18:13:20"></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td class="nama-resep">Surya Bintang Gondang Besar Merah Putih</td>
                                    <td>16:30:00</td>
                                    <td class="countdown" data-finish-time="19:50:00"></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td class="nama-resep">Surya Bintang Gondang Besar Merah Putih</td>
                                    <td>23:10:00</td>
                                    <td class="countdown" data-finish-time="23:10:00"></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td class="nama-resep">Surya Bintang Gondang Trial</td>
                                    <td>23:50:00</td>
                                    <td class="countdown" data-finish-time="23:50:00"></td>
                                </tr>

                            </tbody>
                        </table>
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
     // Fungsi untuk mendapatkan waktu saat ini dan memperbarui elemen HTML
     function displayCurrentTime() {
        var now = new Date(); // Membuat objek Date yang mewakili waktu saat ini
        var hours = now.getHours(); // Mendapatkan jam
        var minutes = now.getMinutes(); // Mendapatkan menit
        var seconds = now.getSeconds(); // Mendapatkan detik

        // Membuat format waktu dengan menambahkan nol di depan jika nilainya kurang dari 10
        var hourString = hours < 10 ? '0' + hours : hours;
        var minuteString = minutes < 10 ? '0' + minutes : minutes;
        var secondString = seconds < 10 ? '0' + seconds : seconds;

        // Memperbarui elemen HTML dengan waktu yang baru
        document.getElementById('current-hour').innerText = hourString;
        document.getElementById('current-minute').innerText = minuteString;
        document.getElementById('current-second').innerText = secondString;
    }

    // Memanggil fungsi untuk pertama kali saat halaman dimuat
    displayCurrentTime();

    // Memperbarui waktu setiap detik
    setInterval(displayCurrentTime, 1000);



    //SCRIPT TABLE OPERATOR

// Fungsi untuk menghitung countdown dari jam selesai masak
function countdown() {
    var countdownElements = document.querySelectorAll('.countdown');

    countdownElements.forEach(function(element) {
        var finishTime = new Date();
        var finishTimeString = element.getAttribute('data-finish-time');
        var finishTimeParts = finishTimeString.split(':');
        finishTime.setHours(parseInt(finishTimeParts[0]));
        finishTime.setMinutes(parseInt(finishTimeParts[1]));
        finishTime.setSeconds(parseInt(finishTimeParts[2]));

        var intervalId = setInterval(function() {
            var currentTime = new Date();
            var difference = finishTime - currentTime;
            var hours = Math.floor(difference / (1000 * 60 * 60));
            var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((difference % (1000 * 60)) / 1000);

            // Menghilangkan jam "00" jika waktu jam kurang dari 1
            var timeString = (hours === 0 ? '' : (hours < 10 ? '0' : '') + hours + ':') +
                             (minutes < 10 ? '0' : '') + minutes + ':' +
                             (seconds < 10 ? '0' : '') + seconds;
            element.textContent = timeString;

            // Memeriksa apakah sisa waktu kurang dari 30 menit dan menambahkan kelas 'alert' pada elemen <tr> jika perlu
            if ((hours === 0 && minutes < 30) || hours <= 0 && minutes <= 0 && seconds <= 0) {
                element.parentNode.classList.add('alert');
            } else {
                element.parentNode.classList.remove('alert');
            }

            if (difference <= 0) {
                clearInterval(intervalId);
                element.textContent = '00:00';
            }
        }, 1000);
    });
}

// Memanggil fungsi countdown saat halaman dimuat
countdown();



</script>


@include('footer')
