<?php
$servername = "localhost"; // Nama server (localhost jika menggunakan server lokal seperti XAMPP)
$username = "root";        // Username MySQL (default untuk XAMPP adalah "root")
$password = "";            // Password MySQL (kosong untuk XAMPP secara default)
$database = "nama_database"; // Pastikan nama database sesuai dengan yang ada di MySQL

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
if ($conn) {
    echo "Koneksi ke database berhasil!";
}

?>
