<?php
require 'Model.php';
$buku = getAll('buku');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Data Buku</h1>
        <a href="FormBuku.php" class="btn btn-primary mb-3">Tambah Buku</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $b): ?>
                <tr>
                    <td><?= $b['id_buku'] ?></td>
                    <td><?= $b['judul_buku'] ?></td>
                    <td><?= $b['penulis'] ?></td>
                    <td><?= $b['penerbit'] ?></td>
                    <td><?= $b['tahun_terbit'] ?></td>
                    <td>
                        <a href="FormBuku.php?id=<?= $b['id_buku'] ?>" class="btn btn-warning">Edit</a>
                        <a href="Delete.php?table=buku&id=<?= $b['id_buku'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
