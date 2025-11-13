<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Data produk tanpa database (simulasi)
$produk = [
    [
        "nama" => "Kopi Arabika Gayo",
        "harga" => "Rp 80.000",
        "deskripsi" => "Kopi khas Aceh dengan aroma kuat.",
        "gambar" => "images/kopiarabika.jpeg"
    ],
    [
        "nama" => "Kopi Toraja",
        "harga" => "Rp 75.000",
        "deskripsi" => "Kopi dengan cita rasa khas pegunungan Toraja.",
        "gambar" => "images/kopitoraja.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Kopi Kita</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f3ef;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 5px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .produk-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .produk-card {
            width: 250px;
            background: white;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
            text-align: center;
        }

        .produk-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .produk-card img {
            width: 100%;
            border-radius: 10px;
        }

        .produk-card h4 {
            margin: 10px 0 5px;
        }

        .btn {
            display: inline-block;
            background: #8B4513;
            color: #fff;
            padding: 10px 18px;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 30px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #63310d;
        }

        .logout-wrapper {
            text-align: center;
            margin-top: 25px;
        }
    </style>
</head>
<body>

    <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
    <h3>Daftar Produk Kopi Kita</h3>

    <div class="produk-container">
        <?php foreach ($produk as $p): ?>
            <div class="produk-card">
                <img src="<?= $p['gambar']; ?>" alt="<?= $p['nama']; ?>">
                <h4><?= $p['nama']; ?></h4>
                <p><?= $p['deskripsi']; ?></p>
                <strong><?= $p['harga']; ?></strong>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="logout-wrapper">
        <a href="logout.php" class="btn">Logout</a>
    </div>

</body>
</html>
