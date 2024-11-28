<?php
session_start();
session_unset();
session_destroy();
header("Location: login (2).php"); // Kembali ke halaman login setelah logout
exit();
?>
