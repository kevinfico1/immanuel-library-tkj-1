<?php
if (isset($_GET['id'])) {
    echo "Buku dengan ID " . $_GET['id'] . " berhasil dihapus (simulasi).";
} else {
    echo "ID tidak ditemukan.";
}
?>