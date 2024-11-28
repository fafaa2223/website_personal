<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Akun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4c1d0d; /* Warna latar belakang  */
            color: #333; /* Warna teks gelap */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff; /* Warna latar belakang putih untuk kontainer */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            color: #4c1d0d; /* Warna merah kecoklatan */
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #cc6600; /* Warna coklat */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #994d00; /* Warna coklat lebih gelap pada hover */
        }
        .back-link {
            margin-top: 20px;
            font-size: 14px;
            color: #4c1d0d;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hapus Akun</h2>
        <form action="proses_delete.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">Hapus Akun</button>
        </form>
        <br>
        <a href="index.php" class="back-link">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
