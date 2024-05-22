<?php
require 'Koneksi.php';

function getAll($table) {
    $pdo = koneksiDB();
    $stmt = $pdo->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getById($table, $id, $id_column) {
    $pdo = koneksiDB();
    $stmt = $pdo->prepare("SELECT * FROM $table WHERE $id_column = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insert($table, $data) {
    $pdo = koneksiDB();
    $columns = implode(", ", array_keys($data));
    $values = implode(", ", array_fill(0, count($data), "?"));
    $stmt = $pdo->prepare("INSERT INTO $table ($columns) VALUES ($values)");

    if ($stmt->execute(array_values($data))) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . implode(":", $stmt->errorInfo());
    }
}

function update($table, $data, $id, $id_column) {
    $pdo = koneksiDB();
    $columns = implode(" = ?, ", array_keys($data)) . " = ?";
    $stmt = $pdo->prepare("UPDATE $table SET $columns WHERE $id_column = ?");
    $stmt->execute(array_merge(array_values($data), [$id]));
}

function delete($table, $id, $id_column) {
    $pdo = koneksiDB();
    $stmt = $pdo->prepare("DELETE FROM $table WHERE $id_column = ?");
    $stmt->execute([$id]);
}

function getPeminjaman() {
    $pdo = koneksiDB();
    $stmt = $pdo->prepare("
        SELECT peminjaman.*, member.nama_member, buku.judul_buku
        FROM peminjaman
        JOIN member ON peminjaman.id_member = member.id_member
        JOIN buku ON peminjaman.id_buku = buku.id_buku
    ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>