<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Sistem Manajemen Perpustakaan</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Manajemen Member
                    </div>
                    <div class="card-body">
                        <a href="Member.php" class="btn btn-primary btn-block">Lihat Semua Member</a>
                        <a href="FormMember.php" class="btn btn-success btn-block">Tambah Member Baru</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Manajemen Buku
                    </div>
                    <div class="card-body">
                        <a href="Buku.php" class="btn btn-primary btn-block">Lihat Semua Buku</a>
                        <a href="FormBuku.php" class="btn btn-success btn-block">Tambah Buku Baru</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Manajemen Peminjaman
                    </div>
                    <div class="card-body">
                        <a href="Peminjaman.php" class="btn btn-primary btn-block">Lihat Semua Peminjaman</a>
                        <a href="FormPeminjaman.php" class="btn btn-success btn-block">Tambah Peminjaman Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>