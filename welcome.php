<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<style>
    body {
        background-color: #e5edeb;
        margin: 0;
        padding: 25px 0;
        box-sizing: border-box;
    }

    .main-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .main-button {
        display: flex;
        gap: 20px;
    }

    button {
        border: none;
        padding: 5px 20px;
        margin-top: 10px;
        width: 150px;
        cursor: pointer;
    }
</style>

<body>
    <div class="main-container">
        <h2>Aplikasi Pengolahan Keuangan</h2><br>
        <h1>Selamat Datang di Aplikasi Pengolahan Keuangan</h1>
        <div class="main-button">
            <a href="login.php"><button style="background-color: #99d6ed;"><h2>Login</h2></button></a> 
            <a href="register.php"><button style="background-color: #c6ed99;"><h2>Register</h2></button></a> 
        </div>
    </div>
</body>
</html>