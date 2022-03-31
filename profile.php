<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <script type="text/javascript">
        function confirm_alert(node) {
            if (confirm("Are you sure to delete?")){  
                    return true;
            } else {
                alert("Canceled");
                return false;
            }
        }
    </script>
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
        margin-bottom: 4%;     
    }

    .navText {
        text-decoration: none;
        color: #000;
    }

    a {
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

    img {
        width: 75px;
        height: 75px;
    }
</style>

<body>
    <header>
        <b>Aplikasi Pengolahan Keuangan</b>
        <nav>
            <?php 
                echo "<a class='navText' href='home.php?id=".$_GET['id']."'>Home</a>";
                echo "<a class='navText' href='profile.php?id=".$_GET['id']."' style='border-bottom: 2px solid #000;'>Profile</a>";
            ?> 
        </nav>
        <a href="logout.php">Logout</a>
    </header>
    <b style="font-size: 28px;">Profil Pribadi</b><br>
    <?php
        echo "<a href='edit.php?id=".$_GET['id']."'>Edit</a>&nbsp&nbsp"; 
        echo "<a href='delete.php?id=".$_GET['id']."' onclick='return confirm_alert(this);'>Delete</a>";
    ?>
    
    <?php
        include("config.php");

        $str_query = "SELECT * FROM user_profile WHERE username = '$_GET[id]'";
        $query = mysqli_query($connection, $str_query);
        $row = mysqli_fetch_array($query); 

        echo "
            <div class='table-container'>
            <table class='left-table' cellpadding='10'>
                <tr>
                    <td>Nama Depan</td>
                    <td><b>".$row["nama-depan"]."</b></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><b>".$row["tempat-lahir"]."</b></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><b>".$row["warga-negara"]."</b></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><b>".$row["alamat"]."</b></td>
                </tr>  
        
            <table class='middle-table' cellpadding='10'>
                <tr>
                    <td>Nama Tengah</td>
                    <td><b>".$row["nama-tengah"]."</b></td>
                </tr>
                <tr>
                    <td>Tgl Lahir</td>
                    <td><b>".$row["tgl-lahir"]."</b></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><b>".$row["email"]."</b></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td><b>".$row["kode-pos"]."</b></td>
                </tr>   
            </table>

            <table class='right-table' cellpadding='10'>
                <tr>
                    <td>Nama Belakang</td>
                    <td><b>".$row["nama-belakang"]."</b></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><b>".$row["nik"]."</b></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><b>".$row["phone"]."</b></td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td><img src='data:image/png;base64,".base64_encode($row['foto-profil'])."'/></td>
                </tr>   
            </table>
        </div> ";
    ?>
</body>
</html>

