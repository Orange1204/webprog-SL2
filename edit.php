<?php
    include("config.php");

    if (isset($_GET['id'])) {
        $str_query = "SELECT * FROM user_profile WHERE `username` = '".$_GET['id']."'";
        $query = mysqli_query($connection, $str_query);
        $row = mysqli_fetch_array($query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    
    <script type="text/javascript">
        function confirm_alert(node) {
            if (confirm("Are you sure to update?")){  
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

    a {
        text-decoration: none;
        color: #000;
        font-size: 18px;
    }

    nav {
        display: flex;
        gap: 20px;
    }

    .main-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .table-container {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    tr {
        height: 75px;
        font-size: 18px;
    }

    table {
        width: 100%;
    }
    
    input, 
    textarea {
        border: none;
        width: 100%;
    }

    .main-button {
        display: flex;
        gap: 20px;
        justify-content: right;
    }

    button {
        margin-top: 25px;
        padding: 2px 20px;
        cursor: pointer;
        box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(0, 0, 0, 0.75);
        border-radius: 3px;
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

    <div class="main-container">
        <b style="font-size: 28px;"><?php echo $row['username']; ?></b><br>   
        <?php echo "<form action='prosesEdit.php?id=".$_GET['id']."' method='post' enctype='multipart/form-data' onsubmit='return confirm_alert(this);'>"; ?>
            <div class="table-container">
                <table class="left-table" cellpadding="5">
                    <tr>
                        <td>Nama Depan</td>
                        <td><input type="text" name="nama-depan" pattern="[A-Za-z ]{3,15}" title="Must contain at least 3-15 letters" value="<?php echo $row['nama-depan']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="tempat-lahir" value="<?php echo $row['tempat-lahir']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td><input type="text" name="warga-negara" value="<?php echo $row['warga-negara']; ?>"required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" rows="4" required><?php echo $row['alamat']; ?></textarea></td>
                    </tr>    
            
                <table class="middle-table" cellpadding="5">
                    <tr>
                        <td>Nama Tengah</td>
                        <td><input type="text" name="nama-tengah" pattern="[A-Za-z ]{3,15}" title="Must contain at least 3-15 letters" value="<?php echo $row['nama-tengah']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <td><input type="date" name="tgl-lahir" min="1940-01-01" max="2015-12-31" value="<?php echo $row['tgl-lahir']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?php echo $row['email']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td><input type="text" name="kode-pos" pattern="[0-9]{5}" title="Must contain 5 digit number" value="<?php echo $row['kode-pos']; ?>" required></td>
                    </tr>   
                </table>
        
                <table class="right-table" cellpadding="5">
                    <tr>
                        <td>Nama Belakang</td>
                        <td><input type="text" name="nama-belakang" pattern="[A-Za-z ]{3,15}" title="Must contain at least 3-15 letters" value="<?php echo $row['nama-belakang']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><input type="text" name="nik" pattern="[0-9]{16}" title="Must contain 16 digit number" value="<?php echo $row['nik']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td><input type="tel" name="phone" pattern="^628[1-9][0-9]{6,9}$" title="Must be start with 628" value="<?php echo $row['phone']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td><input type="file" name="foto-profil" accept=".jpg, .jpeg, .png" title="Only JPG, JPEG, and PNG files are allowed." required></td>
                    </tr>   
                </table>
            </div>
            <div class="main-button">
                <?php
                    echo "<a href='profile.php?id=".$_GET['id']."'><button type='button' style='background-color: #fdd7ac;'>Kembali</button></a>";
                    echo "<button type='submit' name='submit' style='background-color: #adf59f;'>Edit</button>";
                ?>
            </div>         
        </form>
    </div>
</body>

</html>