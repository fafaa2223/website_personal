<?php
// koneksi.php - menghubungkan ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Menyiapkan pernyataan SQL untuk menghindari SQL Injection
    $stmt = $conn->prepare("DELETE FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        echo "Akun dengan username '$username' berhasil dihapus.";
    } else {
        echo "Gagal menghapus akun. Username mungkin tidak ditemukan.";
    }

    $stmt->close();
}

$conn->close();
?>
