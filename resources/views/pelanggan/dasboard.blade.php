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
        <div class="broadcast">
            <div class="top-container">
                <h4>Halaman Dasboard</h4>
                <div class="kanan">
                    <h5>Berlangganan:</h5> 
                    <h5>Reguler sampai</h5> 
                    <h5>21-06-2025 20:20</h5> 
                </div>
            </div>
            <div class="dasboard-column">
                <a href="/broadcast"><button type="button" class="btn btn-primary">Broadcast</button></a>
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
