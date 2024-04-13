

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JavaScript Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


    <script>
 $(document).ready(function() {
    // Inisialisasi Select2
    var select2 = $('#mySelect').select2();

    // Setelah Select2 terbuka, sesuaikan lebar dropdown
    select2.on('select2:open', function() {
        // Setel lebar dropdown menjadi lebih besar dari lebar teks terpanjang
        $('.select2-dropdown').css('width', 'auto');
        $('.select2-dropdown').css('min-width', '300px'); // Atur lebar minimum jika diperlukan
    });
});
    </script>
</body>

</html>