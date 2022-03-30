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

    
    .table-container {
        display: flex;
        justify-content: center;
        gap: 100px;
    }

    tr {
        height: 75px;
        font-size: 18px;
        text-align: left;
    }
    
    input, 
    textarea {
        border: none;
    }

</style>

<body>
    <header>
        <b>Aplikasi Pengolahan Keuangan</b>
        <nav>
            <a href="home.php">Home</a>
            <a href="profile.php" style="border-bottom: 2px solid #000;">Profile</a>
        </nav>
        <a href="logout.php">Logout</a>
    </header>
    <h4>Profil Pribadi</h4>
    <?php
        session_start();        
            echo "
                <div class='table-container'>
                <table class='left-table' cellpadding='10'>
                    <tr>
                        <td>Nama Depan</td>
                        <td><b>".$_SESSION["nama-depan"]."</b></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><b>".$_SESSION["tempat-lahir"]."</b></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td><b>".$_SESSION["warga-negara"]."</b></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><b>".$_SESSION["alamat"]."</b></td>
                    </tr>  
            
                <table class='middle-table' cellpadding='10'>
                    <tr>
                        <td>Nama Tengah</td>
                        <td><b>".$_SESSION["nama-tengah"]."</b></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td><b>".$_SESSION["tgl-lahir"]."</b></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><b>".$_SESSION["email"]."</b></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td><b>".$_SESSION["kode-pos"]."</b></td>
                    </tr>   
                </table>

                <table class='right-table' cellpadding='10'>
                    <tr>
                        <td>Nama Belakang</td>
                        <td><b>".$_SESSION["nama-belakang"]."</b></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><b>".$_SESSION["nik"]."</b></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td><b>".$_SESSION["phone"]."</b></td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td><img src='".$_SESSION["foto-profil"]."' alt='picture'/ width='75px' height='75px'></td>
                    </tr>   
                </table>
            </div> ";
    ?>
</body>
</html>