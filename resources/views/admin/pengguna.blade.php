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
                <h4>Halaman Daftar Pengguna</h4>
            </div>
            <table class="table table-bordered">
                <thead class="table-head">
                    <tr>
                        <th class="table-head">#</th>
                        <th>Nama</th>
                        <th>email</th>
                        <th>join</th>
                        <th>Jenis Langganan</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>22-07-2024 12:00</th>
                        <th>Jenis Langganan</th>
                        <th>Regule</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>22-07-2024 12:00</th>
                        <th>Jenis Langganan</th>
                        <th>Regule</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>22-07-2024 12:00</th>
                        <th>Jenis Langganan</th>
                        <th>Regule</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>22-07-2024 12:00</th>
                        <th>Jenis Langganan</th>
                        <th>Regule</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>22-07-2024 12:00</th>
                        <th>Jenis Langganan</th>
                        <th>Regule</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>22-07-2024 12:00</th>
                        <th>Jenis Langganan</th>
                        <th>Regule</th>
                        <th>
                            <div class="row-button">
                                <a id="gift"><button type="button" class="btn btn-primary">Detail</button></a>
                                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
            <div class="chart-column">
                <canvas id="pengguna" style="width:100%;max-width:600px"></canvas>
                <h5>Grafik penjualan</h5>
            </div>
            <!-- popup -->
            <div id="popup" class="popup">
                    <div class="popup-row" data-aos="fade-up" data-aos-duration="2000">
                        <span id="closeOverlay" class="close-overlay">&times;</span>
                    </div>
                    <div class="popup-column">
                        <h4>Edit Pengguna</h4>
                        <div class="popup-container">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Berlangganan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
