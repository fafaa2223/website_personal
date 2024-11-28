<?php
session_start();
include 'koneksi.php'; // Menghubungkan dengan koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Query untuk mendapatkan data pengguna
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    // Misalkan $username dan $password adalah input dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mengambil data pengguna berdasarkan username
$query = "SELECT * FROM users WHERE username = '$username'"; 
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Ambil data pengguna dari hasil query
    $row = mysqli_fetch_assoc($result);

    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        // Login berhasil
        $_SESSION['username'] = $username; // Menyimpan username ke sesi
        echo "Login berhasil! Selamat datang, " . $username;
        
        // Redirect ke halaman dashboard
        header("Location: dashboard2.php");
        exit();
    } else {
        // Password salah
        echo "Username atau password salah!";
    }
} else {
    // Username tidak ditemukan
    echo "Username atau password salah!";
}

}
?>
