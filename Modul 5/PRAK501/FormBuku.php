<?php
require 'Model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
    ];

    if (isset($_POST['id_buku']) && !empty($_POST['id_buku'])) {
        update('buku', $data, $_POST['id_buku'], 'id_buku');
    } else {
        insert('buku', $data);
    }
    header("Location: Buku.php");
    exit;
}

$buku = null;
if (isset($_GET['id'])) {
    $buku = getById('buku', $_GET['id'], 'id_buku');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Buku</h1>
        <form method="post" action="FormBuku.php">
            <input type="hidden" name="id_buku" value="<?= isset($buku['id_buku']) ? $buku['id_buku'] : '' ?>">
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?= isset($buku['judul_buku']) ? $buku['judul_buku'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= isset($buku['penulis']) ? $buku['penulis'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= isset($buku['penerbit']) ? $buku['penerbit'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= isset($buku['tahun_terbit']) ? $buku['tahun_terbit'] : '' ?>" required>
            </div>
            <button type="submit" class="btn btn-primary"><?= $buku ? 'Update' : 'Tambah' ?></button>
            <a href="Buku.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>