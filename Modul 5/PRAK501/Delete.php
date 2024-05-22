<?php
require 'Model.php';

$table = $_GET['table'];
$id = $_GET['id'];
$id_column = '';

switch ($table) {
    case 'member':
        $id_column = 'id_member';
        break;
    case 'buku':
        $id_column = 'id_buku';
        break;
    case 'peminjaman':
        $id_column = 'id_peminjaman';
        break;
    default:
        die("Invalid table name.");
}

delete($table, $id, $id_column);

// Redirect back to the referring page
if (isset($_SERVER['HTTP_REFERER'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    // Fallback if HTTP_REFERER is not set
    header("Location: index.php");
}
exit;
?>