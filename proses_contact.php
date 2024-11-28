<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "nama_database"; // Ganti dengan nama database Anda

$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("<div class='error-message'>Koneksi gagal: " . $conn->connect_error . "</div>");
}

// Ambil data dari form
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$message = $_POST['message'];

// Query untuk menyimpan data ke tabel contact_messages
$sql = "INSERT INTO contact_messages (full_name, email, phone_number, message) 
        VALUES (?, ?, ?, ?)";

// Menggunakan prepared statement untuk mencegah SQL Injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $full_name, $email, $phone_number, $message);

// Mulai output dengan HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message Response</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4c1d0d; /* Warna krem */
            color: #fff; /* Warna teks putih */
            text-align: center;
            padding: 50px;
        }
        .message {
            background-color: #ffcc99; /* Warna coklat terang */
            border: 2px solid #cc6600;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px;
        }
        .message.success {
            color: #336600;
            border-color: #99cc33;
        }
        .message.error {
            color: #cc0000;
            border-color: #ff6666;
        }
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #cc6600;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }
        .back-button:hover {
            background-color: #994d00;
        }
    </style>
</head>
<body>
<?php
// Eksekusi query
if ($stmt->execute()) {
    echo "<div class='message success'>Terima kasih, <b>" . htmlspecialchars($full_name) . "</b>! Pesan Anda telah berhasil dikirim.</div>";
} else {
    echo "<div class='message error'>Gagal mengirim pesan: " . htmlspecialchars($stmt->error) . "</div>";
}
?>
<div>
    <a href="index.php" class="back-button">Kembali ke Halaman Utama</a>
</div>

<?php
// Tutup koneksi
$stmt->close();
$conn->close();
?>
</body>
</html>
