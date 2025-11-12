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
.logo {
            width: 120px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 3px solid #c49a6c;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }
 .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #f2d7b6;
        }
 .hero p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #f8f4f1;
        }
 .btn {
            background-color: #c49a6c;
            color: #2e2b29;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }



