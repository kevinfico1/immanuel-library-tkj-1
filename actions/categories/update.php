<?php
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])) {
    echo "Data kategori berhasil diperbarui";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>