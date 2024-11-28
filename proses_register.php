<?php
// Koneksi ke database
$servername = "localhost"; // Ganti jika menggunakan server lain
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda jika ada
$dbname = "nama_database"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Menggunakan password_hash untuk menyimpan kata sandi dengan aman
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Menyiapkan statement SQL dengan placeholder
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

// Memeriksa apakah prepare berhasil
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

// Menggunakan password_hash untuk mengamankan kata sandi
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Mengikat parameter ke placeholder
$stmt->bind_param("ss", $username, $password_hash);

// Eksekusi statement
if ($stmt->execute()) {
    echo "Akun berhasil dibuat!";
} else {
    echo "Error: " . $stmt->error; // Menampilkan kesalahan jika ada
}


// Menutup statement dan koneksi
$stmt->close();
$conn->close();

?>
