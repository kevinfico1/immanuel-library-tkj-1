<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']) && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['bio'])) {
    echo "Data profil berhasil diperbarui";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Data tidak lengkap.";
}
?>