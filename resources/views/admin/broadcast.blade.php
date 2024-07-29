<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Broadcast Admin</title>
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
                <h4>Halaman Broadcast</h4>
            </div>
            <table class="table table-bordered">
                <thead class="table-head">
                    <tr>
                        <th></th>
                        <th class="table-head">#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href=""><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <!-- <label class="form-check-label" for="flexCheckIndeterminate">
                                Indeterminate checkbox
                            </label> -->
                        </div>
                        </th>
                        <th>1</th>
                        <th>Aditya</th>
                        <th>aditya@gmail.com</th>
                        <th>
                            Jangan lupa pesananmu!<br>
                            Yuk, datang ke SPX Express Ngunut Hub <br>
                            & dan tunjukkan PIN kepada Petugas toko <br>
                            untuk mengambil pesananmu. Jika Tidak <br>
                            diambil dalam 2 hari, maka pesanan akan <br>
                            dikembalikan kepada penjual.
                        </th>
                        <th>22-07-2024 12:00</th>
                        <th>
                            <div class="row-button">
                                <a href="/detail_broadcast"><button type="button" class="btn btn-primary">Detail</button></a>
                            </div>
                        </th>
                    </tr>
                </tbody>
                
            </table>
            <div class="tabel-broadcast">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Select All
                    </label>
                </div>
                <a href="/detail_broadcast"><button type="button" class="btn btn-primary">Detail</button></a>
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
