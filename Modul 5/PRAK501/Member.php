<?php
require 'Model.php';
$members = getAll('member');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Data Member</h1>
        <a href="FormMember.php" class="btn btn-primary mb-3">Tambah Member</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomor Member</th>
                    <th>Alamat</th>
                    <th>Tanggal Mendaftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $m): ?>
                <tr>
                    <td><?= $m['id_member'] ?></td>
                    <td><?= $m['nama_member'] ?></td>
                    <td><?= $m['nomor_member'] ?></td>
                    <td><?= $m['alamat'] ?></td>
                    <td><?= $m['tgl_mendaftar'] ?></td>
                    <td><?= $m['tgl_terakhir_bayar'] ?></td>
                    <td>
                        <a href="FormMember.php?id=<?= $m['id_member'] ?>" class="btn btn-warning">Edit</a>
                        <a href="Delete.php?table=member&id=<?= $m['id_member'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>