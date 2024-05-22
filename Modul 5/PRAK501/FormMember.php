<?php
require 'Model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'nama_member' => $_POST['nama_member'],
        'nomor_member' => $_POST['nomor_member'],
        'alamat' => $_POST['alamat'],
        'tgl_mendaftar' => $_POST['tgl_mendaftar'],
        'tgl_terakhir_bayar' => $_POST['tgl_terakhir_bayar']
    ];

    if (isset($_POST['id_member']) && !empty($_POST['id_member'])) {
        update('member', $data, $_POST['id_member'], 'id_member');
    } else {
        insert('member', $data);
    }
    header("Location: Member.php");
    exit;
}

$member = null;
if (isset($_GET['id'])) {
    $member = getById('member', $_GET['id'], 'id_member');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Member</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Member</h1>
        <form method="post" action="FormMember.php">
            <input type="hidden" name="id_member" value="<?= isset($member['id_member']) ? $member['id_member'] : '' ?>">
            <div class="form-group">
                <label for="nama_member">Nama Member</label>
                <input type="text" class="form-control" id="nama_member" name="nama_member" value="<?= isset($member['nama_member']) ? $member['nama_member'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="nomor_member">Nomor Member</label>
                <input type="text" class="form-control" id="nomor_member" name="nomor_member" value="<?= isset($member['nomor_member']) ? $member['nomor_member'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?= isset($member['alamat']) ? $member['alamat'] : '' ?></textarea>
            </div>
            <div class="form-group">
                <label for="tgl_mendaftar">Tanggal Mendaftar</label>
                <input type="date" class="form-control" id="tgl_mendaftar" name="tgl_mendaftar" value="<?= isset($member['tgl_mendaftar']) ? $member['tgl_mendaftar'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label>
                <input type="date" class="form-control" id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" value="<?= isset($member['tgl_terakhir_bayar']) ? $member['tgl_terakhir_bayar'] : '' ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?= $member ? 'Update' : 'Tambah' ?></button>
            <a href="Member.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>