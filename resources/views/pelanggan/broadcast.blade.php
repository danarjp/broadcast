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
                <h4>Halaman Broadcast</h4>
            </div>
            <div class="broadcast-container">
                <div class="broadcast-column">
                    <div class="mb-3">
                        <div class="broadcast-row">
                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <label>Atur jarak pengiriman pesan</label>
                    <div class="broadcast-row">
                        <input class="form-control" type="text">
                        <h5>&</h5>
                        <input class="form-control" type="text">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
                <div class="broadcast-column">
                    <div class="mb-3">
                        <div class="broadcast-row">
                            <label for="formFile" class="form-label">Uppload CSV</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            </div>
                        </div>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Piilih kolom nomer hp</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <label>Atur jarak pengiriman pesan</label>
                    <div class="broadcast-row">
                        <input class="form-control" type="text">
                        <h5>&</h5>
                        <input class="form-control" type="text">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
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
