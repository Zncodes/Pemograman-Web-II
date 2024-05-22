<?php
require 'Model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'id_member' => $_POST['id_member'],
        'id_buku' => $_POST['id_buku'],
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
    ];

    if (isset($_POST['id_peminjaman']) && !empty($_POST['id_peminjaman'])) {
        update('peminjaman', $data, $_POST['id_peminjaman'], 'id_peminjaman');
    } else {
        insert('peminjaman', $data);
    }
    header("Location: Peminjaman.php");
    exit;
}

$peminjaman = null;
if (isset($_GET['id'])) {
    $peminjaman = getById('peminjaman', $_GET['id'], 'id_peminjaman');
}

$members = getAll('member');
$books = getAll('buku');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Peminjaman</h1>
        <form method="post" action="FormPeminjaman.php">
            <input type="hidden" name="id_peminjaman" value="<?= isset($peminjaman['id_peminjaman']) ? $peminjaman['id_peminjaman'] : '' ?>">
            <div class="form-group">
                <label for="id_member">Member</label>
                <select class="form-control" id="id_member" name="id_member" required>
                    <?php foreach ($members as $member): ?>
                        <option value="<?= $member['id_member'] ?>" <?= isset($peminjaman['id_member']) && $peminjaman['id_member'] == $member['id_member'] ? 'selected' : '' ?>>
                            <?= $member['nama_member'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_buku">Buku</label>
                <select class="form-control" id="id_buku" name="id_buku" required>
                    <?php foreach ($books as $book): ?>
                        <option value="<?= $book['id_buku'] ?>" <?= isset($peminjaman['id_buku']) && $peminjaman['id_buku'] == $book['id_buku'] ? 'selected' : '' ?>>
                            <?= $book['judul_buku'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= isset($peminjaman['tgl_pinjam']) ? $peminjaman['tgl_pinjam'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= isset($peminjaman['tgl_kembali']) ? $peminjaman['tgl_kembali'] : '' ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?= $peminjaman ? 'Update' : 'Tambah' ?></button>
            <a href="Peminjaman.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>