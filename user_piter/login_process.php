<?php
session_start();

// Simulasi akun admin tanpa database
$admin_user = "admin";
$admin_pass = "kopikita";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $admin_user && $password === $admin_pass) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Username atau password salah!'); window.location='login.php';</script>";
}
?>