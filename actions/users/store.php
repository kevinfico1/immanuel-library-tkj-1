<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
    echo "Data pengguna berhasil diterima";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>