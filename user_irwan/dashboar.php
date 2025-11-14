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
        "gambar" => "images/kopi1.jpg"
    ],
    [
        "nama" => "Kopi Toraja",
        "harga" => "Rp 75.000",
        "deskripsi" => "Kopi dengan cita rasa khas pegunungan Toraja.",
        "gambar" => "images/kopi2.jpg"
    ],
    [
        "nama" => "Kopi Robusta Lampung",
        "harga" => "Rp 60.000",
        "deskripsi" => "Rasa kuat dengan aftertaste cokelat khas.",
        "gambar" => "images/kopi3.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Kopi Kita</title>
    <link rel="stylesheet" href="style.css">
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

    <a href="logout.php" class="btn">Logout</a>
</body>
</html>
