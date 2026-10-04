<?php
if (isset($_GET['id'])) {
    echo "Pengguna dengan ID " . $_GET['id'] . " berhasil dihapus (simulasi).";
} else {
    echo "ID tidak ditemukan.";
}
?>