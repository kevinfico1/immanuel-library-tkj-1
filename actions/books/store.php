<?php
if (isset($_POST['title']) && isset($_POST['isbn']) && isset($_POST['year']) && isset($_POST['stock']) && isset($_POST['category_id']) && isset($_POST['description'])) {
    echo "Data buku berhasil diterima";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>
