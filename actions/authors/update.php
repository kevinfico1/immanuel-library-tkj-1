<?php
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['bio'])) {
    echo "Data penulis berhasil diperbarui";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>
