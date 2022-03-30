<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<style>
    body {
        background-color: #cad1ff;
        margin: 0;
        box-sizing: border-box;
        font-size: 24px;
        text-align: center;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f9ffca;
        padding: 10px 2%; 
        margin-bottom: 5%;     
    }

    a {
        text-decoration: none;
        color: #000;
        font-size: 18px;
    }

    nav {
        display: flex;
        gap: 20px;
    }
</style>

<body>
    <header>
        <b>Aplikasi Pengolahan Keuangan</b>
        <nav>
            <a href="home.php" style="border-bottom: 2px solid #000;">Home</a>
            <a href="profile.php">Profile</a>
        </nav>
        <a href="logout.php">Logout</a>
    </header>

    <?php
        session_start();     
        echo "<p>Halo <b>".$_SESSION['nama-depan']." ".$_SESSION['nama-tengah']." ".$_SESSION['nama-belakang']."</b>, Selamat datang di Aplikasi Pengolahan Keuangan</p>";
    ?>
</body>
</html>