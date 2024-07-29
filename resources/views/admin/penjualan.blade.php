<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Dasboard Admin</title>
    <style>
        /* Sidebar styling */
        
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <span class="toggle-btn" onclick="toggleSidebar()">☰</span>
        <h2>Admin</h2>
        <div class="item-sidebar label-sidebar">
            <a href="/dasboard_admin">Dasboard</a>
            <a href="/penjualan">Penjualan</a>
            <a href="/daftar_pengguna">Daftar Pengguna</a>
            <a href="/daftar_broadcast">Broadcast</a>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="penjualan">
            <div class="top-container">
                <h4>Halaman Penjualan</h4>
            </div>
            <table class="table table-bordered">
                <thead class="table-head">
                    <tr>
                        <th class="table-head">#</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>amar</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>Tya</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>Afif</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>Rama</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                    <tr>
                        <th>6</th>
                        <th>Nur</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                    <tr>
                        <th>7</th>
                        <th>Saleh</th>
                        <th>Reguler</th>
                        <th>Rp. 200.000,00</th>
                        <th>1</th>
                        <th>Rp. 200.000,00</th>
                        <th>27-06-2024 13:00</th>
                        <th>
                            <a><button id="gift" type="button" class="btn btn-primary">Detail</button></a>
                        </th>
                    </tr>
                </tbody>
            </table>
            <div class="chart-column">
                <canvas id="penjualan" style="width:100%;max-width:600px"></canvas>
                <h5>Grafik penjualan</h5>
            </div>
            <!-- popup -->
            <div id="popup" class="popup">
                    <div class="popup-row" data-aos="fade-up" data-aos-duration="2000">
                        <span id="closeOverlay" class="close-overlay">&times;</span>
                    </div>
                    <div class="popup-column">
                        <h4>Detail</h4>
                        <div class="popup-container">
                            <h4>Bukti Transfer</h4>
                            <img src="assets/images/image.png" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div id="overlay" class="overlay"></div>
    <script>
        document.getElementById('gift').addEventListener('click', function() {
        document.getElementById('popup').classList.add('popup-show');
        document.getElementById('overlay').classList.add('overlay-show');
    });

        document.getElementById('closeOverlay').addEventListener('click', function() {
        document.getElementById('popup').classList.remove('popup-show');
        document.getElementById('overlay').classList.remove('overlay-show');
    });

        document.getElementById('overlay').addEventListener('click', function() {
        document.getElementById('popup').classList.remove('popup-show');
        document.getElementById('overlay').classList.remove('overlay-show');
    });
    </script>

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
    <script>
        // Data untuk chart Penjualan
        const penjualanData = {
            labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
            datasets: [{
                label: 'Penjualan',
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
            }]
        };

        new Chart("penjualan", {
            type: "line",
            data: penjualanData,
            options: {
                legend: { display: false },
                scales: {
                    yAxes: [{ ticks: { min: 6, max: 16 } }]
                }
            }
        });
    </script>
</body>
</html>
