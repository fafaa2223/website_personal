<?php
// koneksi.php - menghubungkan ke database
include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password_baru = $_POST['password_baru'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    // Cek apakah password baru dan konfirmasi password sama
    if ($password_baru !== $konfirmasi_password) {
        echo "Password baru dan konfirmasi password tidak cocok.";
        exit;
    }

    // Meng-hash password baru sebelum disimpan di database
    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

    // Update password di database menggunakan placeholder `?`
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $password_hash, $username);
    
    if ($stmt->execute()) {
        echo "Password berhasil direset.";
    } else {
        echo "Gagal mengupdate password. Pastikan username benar.";
    }

    // Menutup statement dan koneksi
    $stmt->close();
}

$conn->close();
?>
