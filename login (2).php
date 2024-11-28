<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        /* CSS untuk styling halaman */
        body {
            font-family: 'Arial', sans-serif; /* Mengatur jenis font */
            background-color: #4c1d0d; /* Warna latar belakang halaman */
            margin: 0; /* Menghapus margin default */
            padding: 20px; /* Memberikan padding di sekeliling halaman */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff; /* Warna latar belakang form */
            padding: 30px; /* Memberikan padding di dalam form */
            border-radius: 10px; /* Membuat sudut form melengkung */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Memberikan bayangan di sekitar form */
            max-width: 400px; /* Lebar maksimum form */
            text-align: center;
            width: 100%;
        }

        h2 {
            color: #4c1d0d; /* Warna teks judul */
            margin-bottom: 20px;
        }

        label {
            display: block; /* Menampilkan label sebagai blok agar tidak bersebelahan */
            margin-bottom: 8px; /* Jarak bawah untuk label */
            font-weight: bold; /* Menebalkan font label */
        }

        input[type="text"],
        input[type="password"] {
            width: 92%; /* Lebar input 100% dari form */
            padding: 12px 12px; /* Padding di dalam input */
            margin-bottom: 15px; /*Jarak bawah antar input */
            border: 1px solid #ccc; /* Garis batas input */
            border-radius: 5px; /* Membuat sudut input melengkung */
            font-size: 14px; /* Ukuran font input */
        }

        button {
            background-color: #d96226; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            padding: 12px 15px; /* Padding di dalam tombol */
            border: none; /* Menghapus garis batas tombol */
            border-radius: 5px; /* Membuat sudut tombol melengkung */
            cursor: pointer; /* Mengubah kursor saat hover */
            font-size: 16px; /* Ukuran font tombol */
            width: 100%; /* Lebar tombol 100% dari form */
        }

        button:hover {
            background-color: #165eab; /* Warna saat tombol di-hover */
        }

        .register-button {
            background-color: #008CBA;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .register-button:hover {
            background-color: #005f7f; /* Warna saat hover */
        }

        .link-lupa-password {
            text-align: center; /* Menengahkan teks link */
            margin-top: 15px; /* Jarak atas untuk link */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Halaman Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div style="margin-top: 20px;">
            <a href="buat_akun.php" class="register-button">Buat Akun Baru</a>
        </div>
        <div class="link-lupa-password">
            <a href="update.php">Lupa Password?</a>
        </div>
    </div>
</body>
</html>
