<?php
function koneksiDB() {
    $host = 'localhost';
    $db = 'perpustakaan';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $tables = ['Peminjaman', 'Buku', 'Member'];
        foreach ($tables as $table) {
            $pdo->exec("ALTER TABLE $table AUTO_INCREMENT = 1");
        }
        return $pdo;
    } catch (PDOException $e) {
        die("Koneksi ke database gagal " . $e->getMessage());
    }
}
?>