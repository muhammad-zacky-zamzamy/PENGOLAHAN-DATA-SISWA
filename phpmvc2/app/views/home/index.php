<?php
if (!session_id()) session_start();

require_once '../app/init.php';

$app = new App;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE PENGOLAHAN DATA SISWA</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            background: url('https://wallpapercave.com/wp/wp4299470.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            z-index: 1;
        }
        body::before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8); /* Warna putih dengan transparansi 80% */
            z-index: -1;
        }
        .footer {
            background-color: rgba(248, 249, 250, 0.8); /* Warna footer dengan transparansi 80% */
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        .navbar {
            background-color: rgba(52, 58, 64, 0.8); /* Warna navbar dengan transparansi 80% */
        }
        .content-container {
            background-color: rgba(255, 255, 255, 0.8); /* Warna container dengan transparansi 80% */
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .lead {
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">WEBSITE PENGOLAHAN DATA SISWA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar items can be added here if needed -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container-fluid py-5 px-5">
        <div class="content-container">
            <h1 class="mt-5 text-center">Selamat Datang di Website Pengolahan Data Siswa</h1>
            <p class="lead text-center">Website ini dirancang untuk membantu institusi pendidikan dalam mengatur dan memantau informasi siswa secara efisien.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="m-0">© 2024 WEBSITE PENGOLAHAN DATA SISWA. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
