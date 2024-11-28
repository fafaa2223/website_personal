<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        /* CSS untuk styling halaman */
        body {
            font-family: 'Arial', sans-serif; /* Mengatur jenis font */
            background-color: #4c1d0d; /* Warna latar belakang halaman */
            margin: 0; /* Menghapus margin default */
            padding: 20px; /* Memberikan padding di sekeliling halaman */
            display: flex; /* Menggunakan flexbox */
            justify-content: center; /* Menengah horizontal */
            align-items: center; /* Menengah vertikal */
            height: 100vh; /* Tinggi penuh viewport */
        }

        .container {
            background-color: #fff; /* Warna latar belakang form */
            padding: 30px; /* Padding di dalam form */
            border-radius: 10px; /* Membuat sudut form melengkung */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Memberikan bayangan di sekitar form */
            max-width: 400px; /* Lebar maksimum form */
            text-align: center;
            width: 100%; /* Lebar container */
        }

        h2 {
            color: #4c1d0d; /* Warna teks judul */
            margin-bottom: 20px; /* Jarak bawah judul */
        }

        label {
            display: block; /* Menampilkan label sebagai blok agar tidak bersebelahan */
            margin-bottom: 8px; /* Jarak bawah untuk label */
            font-weight: bold; /* Menebalkan font label */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%; /* Lebar input 100% dari form */
            padding: 12px; /* Padding input */
            margin-bottom: 15px; /* Jarak bawah antar input */
            border: 1px solid #ccc; /* Garis batas input */
            border-radius: 5px; /* Membuat sudut input melengkung */
            font-size: 14px; /* Ukuran font input */
            box-sizing: border-box; /* Menjamin padding termasuk dalam lebar */
        }

        button {
            background-color: #d96226; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            padding: 12px; /* Padding tombol disamakan dengan input */
            border: none; /* Menghapus garis batas tombol */
            border-radius: 5px; /* Membuat sudut tombol melengkung */
            cursor: pointer; /* Mengubah kursor saat hover */
            font-size: 16px; /* Ukuran font tombol */
            width: 100%; /* Lebar tombol 100% dari form */
            box-sizing: border-box; /* Menjamin padding termasuk dalam lebar */
        }

        button:hover {
            background-color: #165eab; /* Warna saat tombol di-hover */
        }

        .link-kembali-login {
            text-align: center; /* Menengahkan teks link */
            margin-top: 15px; /* Jarak atas untuk link */
        }

        .link-kembali-login a {
            color: #008CBA; /* Warna teks link */
            text-decoration: none;
            font-weight: bold; /* Menebalkan font link */
        }

        .link-kembali-login a:hover {
            text-decoration: underline; /* Menambahkan garis bawah pada link saat di-hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <form action="proses_update.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password_baru">Password Baru:</label>
            <input type="password" id="password_baru" name="password_baru" required>

            <label for="konfirmasi_password">Konfirmasi Password Baru:</label>
            <input type="password" id="konfirmasi_password" name="konfirmasi_password" required>

            <button type="submit">Reset Password</button>
        </form>
        <div class="link-kembali-login">
            <p><a href="login (2).php">Kembali ke Halaman Login</a></p>
        </div>
    </div>
</body>
</html>
