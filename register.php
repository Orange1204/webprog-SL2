<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    
    <script>
        function validateForm(form) {
            password1 = form.password1.value;
            password2 = form.password2.value;

            if (password1 != password2) {
                alert("Password must match");
                return false;       
            } else {
                if (confirm("Are you sure to register?")){  
                    return true;
                } else {
                    alert("Canceled");
                    return false;
                }
            }
        }
    </script>
</head>

<style>
    body {
        background-color: #c2f0f7;
        margin: 0;
        padding: 25px 0;
        box-sizing: border-box;
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
    <div class="main-container">
        <h1>Register</h1>
        <form action="prosesReg.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm(this)">
            <div class="table-container">
                <table class="left-table" cellpadding="5">
                    <tr>
                        <td>Nama Depan</td>
                        <td><input type="text" name="nama-depan" pattern="[A-Za-z ]{3,20}" title="Must contain at least 3-20 letters" required></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><input type="text" name="tempat-lahir" required></td>
                    </tr>
                    <tr>
                        <td>Warga Negara</td>
                        <td><input type="text" name="warga-negara" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" rows="4" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase, one lowercase letter, and at least 8 or more characters" required></td>
                    </tr>     
            
                <table class="middle-table" cellpadding="5">
                    <tr>
                        <td>Nama Tengah</td>
                        <td><input type="text" name="nama-tengah" pattern="[A-Za-z ]{3,20}" title="Must contain at least 3-20 letters" required></td>
                    </tr>
                    <tr>
                        <td>Tgl Lahir</td>
                        <!-- <td><input type="text" name="tgl-lahir" placeholder="dd/mm/yyyy" pattern='(?:((?:0[1-9]|1[0-9]|2[0-9])\/(?:0[1-9]|1[0-2])|(?:30)\/(?!02)(?:0[1-9]|1[0-2])|31\/(?:0[13578]|1[02]))\/(?:19|20)[0-9]{2})' required></td> -->
                        <td><input type="date" name="tgl-lahir" min="1940-01-01" max="2015-12-31" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td>Kode Pos</td>
                        <td><input type="text" name="kode-pos" pattern="[0-9]{5}" title="Must contain 5 digit number" required></td>
                    </tr>
                    <tr>
                        <td>Password 1</td>
                        <td><input type="password" name="password1" title="4 or more characters" pattern=".{4,}" required></td>
                    </tr>     
                </table>
     
                <table class="right-table" cellpadding="5">
                    <tr>
                        <td>Nama Belakang</td>
                        <td><input type="text" name="nama-belakang" pattern="[A-Za-z ]{3,20}" title="Must contain at least 3-20 letters" required></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><input type="text" name="nik" pattern="[0-9]{16}" title="Must contain 16 digit number" required></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td><input type="tel" name="phone" pattern="^(\+62|62|0)8[1-9][0-9]{6,9}$" title="Must have a valid Indonesian phone number" required></td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td><input type="file" name="foto-profil" accept=".jpg, .jpeg, .png" title="Only JPG, JPEG, and PNG files are allowed." required></td>
                    </tr>
                    <tr>
                        <td>Password 2</td>
                        <td><input type="password" name="password2" title="Password must match" pattern=".{4,}" required></td>
                    </tr>     
                </table>
            </div>
            <div class="main-button">
                <a href="welcome.php"><button type="button" style="background-color: #fdd7ac;">Kembali</button></a> 
                <button type="submit" name="submit" style="background-color: #adf59f;">Register</button>
            </div>         
        </form>
    </div>
</body>

</html>