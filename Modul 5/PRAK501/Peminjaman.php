<?php
require 'Model.php';
$peminjaman = getPeminjaman();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Data Peminjaman</h1>
        <a href="FormPeminjaman.php" class="btn btn-primary mb-3">Tambah Peminjaman</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Member</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peminjaman as $p): ?>
                <tr>
                    <td><?= $p['id_peminjaman'] ?></td>
                    <td><?= $p['nama_member'] ?></td>
                    <td><?= $p['judul_buku'] ?></td>
                    <td><?= $p['tgl_pinjam'] ?></td>
                    <td><?= $p['tgl_kembali'] ?></td>
                    <td>
                        <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>" class="btn btn-warning">Edit</a>
                        <a href="Delete.php?table=peminjaman&id=<?= $p['id_peminjaman'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>