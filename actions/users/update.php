<?php
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['role'])) {
    echo "Data pengguna berhasil diperbarui";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>
