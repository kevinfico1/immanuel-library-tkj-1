<?php
if (isset($_POST['name']) && isset($_POST['bio'])) {
    echo "Data penulis berhasil diterima";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>