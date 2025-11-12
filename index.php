<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Katalog Kopi Kita</title>
    <link rel="stylesheet" href="style.css">
 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
 body {
            font-family: 'Poppins', sans-serif;
            color: #fff;
            background-color: #2e2b29;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
.hero {
            flex: 1;
            text-align: center;
            padding: 100px 20px;
            background: url('images/kopi.jpeg') no-repeat center center/cover;
            position: relative;
        }
.hero::after {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: 0;
        }
.hero h1, 
        .hero p, 
        .hero .btn, 
        .hero .logo {
            position: relative;
            z-index: 1;
        }

