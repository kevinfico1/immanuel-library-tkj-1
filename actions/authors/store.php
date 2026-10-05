<?php
if (isset($_POST['store']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h3>Data penulis berhasil diterima</h3>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>