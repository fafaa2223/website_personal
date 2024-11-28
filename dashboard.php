<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Kembali ke halaman login jika belum login
    exit();
}
?>

<h1>Selamat Datang di Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
<p>Anda berhasil login.</p>
<a href="logout.php">Logout</a>

<p>
    <a href="delete.php">Delete Account</a>
</p>
