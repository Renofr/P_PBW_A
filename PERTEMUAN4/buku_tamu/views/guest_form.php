<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        /* CSS untuk body */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* CSS untuk heading h2 */
        h2 {
            font-size: 36px;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
            background: -webkit-linear-gradient(45deg, #ffafbd, #ffc3a0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeIn 2s ease-in-out;
        }

        /* Form Styling */
        form {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            width: 300px;
        }

        label {
            font-size: 18px;
            margin-bottom: 10px;
            display: inline-block;
            text-align: left;
            width: 100%;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
        }

        input[type="text"]::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        /* Tombol submit */
        input[type="submit"] {
            background-color: #ff6f61;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff8563;
        }

        /* Animasi Fade In untuk h2 */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div>
        <h2>Selamat Datang di Buku Tamu</h2>
        <form action="index.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama Anda" required><br>
            <label for="comment">Komentar:</label>
            <textarea name="comment" id="comment" rows="5" placeholder="Tulis komentar Anda" required></textarea><br>
            <input type="submit" value="Kirim">
        </form>
    </div>
</body>
</html>

