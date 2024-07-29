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
            <a href="/daftar_pengguna">Pengguna</a>
            <a href="/daftar_broadcast">Broadcast</a>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="chart-container">
            <div class="chart-column">
                <canvas id="penjualan" style="width:100%;max-width:600px"></canvas>
                <h5>Grafik penjualan</h5>
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
            <div class="chart-column">
                <canvas id="pengguna" style="width:100%;max-width:600px"></canvas>
                <h5>Grafik pengguna</h5>
                <button type="button" class="btn btn-primary">Primary</button>
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

        // Data untuk chart Pengguna
        const penggunaData = {
            labels: ['january', 'february', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'november', 'desember'],
            datasets: [{
                label: 'Pengguna',
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(255,0,0,1.0)",
                borderColor: "rgba(255,0,0,0.1)",
                data: [5, 6, 7, 8, 8, 9, 10, 10, 11, 13, 14]
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

        new Chart("pengguna", {
            type: "line",
            data: penggunaData,
            options: {
                legend: { display: false },
                scales: {
                    yAxes: [{ ticks: { min: 4, max: 15 } }]
                }
            }
        });
    </script>
</body>
</html>
