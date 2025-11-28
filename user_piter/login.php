<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - Kopi Kita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login Admin</h2>

    <form action="login_process.php" method="POST" class="login-form">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" class="btn">Login</button>
    </form>

    <br>
    <a href="index.php" class="btn" style="background-color:#8d6e67;">Kembali ke Beranda</a>
</body>
</html>
