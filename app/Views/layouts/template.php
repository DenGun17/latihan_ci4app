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
    

    <!-- tombol login/register -->
        <ul class="nav ml-auto">
            <li class="nav-link">
                <a href="<?= base_url('login') ?>" class="btn btn-outline-primary">Login</a>                
            </li>
            <li class="nav-link">
                <a href="<?= base_url('registrasi') ?>" class="btn btn-outline-success">Registrasi</a>                
            </li>
        </ul>
    </nav>
    <!-- Konten/Isi -->
    <?= $this->renderSection("content"); ?>

    <!-- Footer -->
    <footer class="fixed-bottom bg-dark text-white">
        <div class="text-center">
            SMA 404
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>