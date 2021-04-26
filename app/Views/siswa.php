<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <?= $this->extend("layouts/template"); ?>

    <?= $this->section("content"); ?>

    <h3>Data Siswa</h3>
    <div class="table-responsive-sm">
    <table class="table table-bordered table-striped table-sm ">
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Tanggal Lahir</th>
        </tr>
        <tr>
            <td>Andi Saputra</td>
            <td>101</td>
            <td>2003-12-22</td>
        </tr>
        <tr>
            <td>Budi Cahya</td>
            <td>102</td>
            <td>2004-1-30</td>
        </tr>
    </table>
    </div>    
    <?= $this->endSection(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>