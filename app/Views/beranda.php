<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <ul class="nav">
            <li>
                <a href="<?= base_url('beranda') ?>" class="nav-link">Home</a>                
            </li>
            <li>
                <a href="<?= base_url('data-siswa') ?>" class="nav-link">Data Siswa</a>                
            </li>
            <li>
                <a href="<?= base_url('info-kegiatan') ?>" class="nav-link">Info Kegiatan</a>                
            </li>
        </ul>
    </nav>

    <!-- jumbotron -->
    <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat datang di Portal Informasi Siswa SMA 404!</p>
        <a href="http://" class="btn btn-dark">Info Kegiatan</a>        
        <a href="http://" class="btn btn-primary">Data Siswa</a>    
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>