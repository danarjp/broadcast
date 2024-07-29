<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Dasboard Pelanggan</title>
    <style>
        /* Sidebar styling */
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <span class="toggle-btn" onclick="toggleSidebar()">☰</span>
        <h2>Pelanggan</h2>
        <div class="item-sidebar label-sidebar">
            <a href="/dasboard">Dasboard</a>
            <a href="/broadcast">Broadcast</a>
            <a href="/berlangganan">Berlangganan</a>
            <a href="/kontak">Kontak</a>
            <a href="/daftar_transaksi">Daftar Transaksi</a>
            <a href="/riwayat_broadcast">Riwayat Broadcast</a>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="berlangganan">
            <div class="top-container">
                <h4>Halaman Berlangganan</h4>
            </div>
            <div class="berlangganan-container">
                <div class="berlangganan-row">
                    <div class="berlangganan-column">
                        <h5 class="putih">Tipe</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="berlangganan-column">
                        <h5 class="putih">Harga</h5>
                        <input type="text" class="form-control" placeholder="Rp. 200.000,00" disabled>
                    </div>
                    <div class="berlangganan-column">
                        <h5 class="putih">Qty</h5>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="berlangganan-column">
                        <h5 class="putih">Total</h5>
                        <input type="text" class="form-control" placeholder="Rp. 200.000,00" disabled>
                    </div>
                </div>
                <h5 class="menjorok-kanan putih">Transfer ke :</h5>
                <div class="berlangganan-row tengah">
                    <div class="berlangganan-column tengah">
                        <img src="assets/images/image.png" alt="">
                        <h6 class="putih">Hadi Cahyono</h6>
                        <h6 class="putih">200984848</h6>
                        <button type="button" class="btn btn-primary putih">Copy Accound</button>
                    </div>
                    <div class="berlangganan-column tengah">
                        <img src="assets/images/image.png" alt="">
                        <h6 class="putih">Hadi Cahyono</h6>
                        <h6 class="putih">200984848</h6>
                        <button type="button" class="btn btn-primary">Copy Accound</button>
                    </div>
                    <div class="berlangganan-column tengah">
                        <img src="assets/images/image.png" alt="">
                        <h6 class="putih">Hadi Cahyono</h6>
                        <h6 class="putih">200984848</h6>
                        <button type="button" class="btn btn-primary putih">Copy Accound</button>
                    </div>
                </div>
                <h6 class="menjorok-kanan putih">Transfer sesuai dengan nominal pembelian</h6>
                <div class="berlangganan-row kanan-kiri">
                    <div class="column">
                        <h5 class="putih">Bukti Transfer</h5>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <button type="button" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open'); // Toggle 'open' class

            const content = document.querySelector('.content');
            if (sidebar.classList.contains('open')) {
                content.style.marginLeft = '250px'; // Adjust content margin when sidebar is open
            } else {
                content.style.marginLeft = '50px'; // Adjust content margin when sidebar is partially visible
            }
        }
    </script>
</body>
</html>
