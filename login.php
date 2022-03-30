<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<style>
    body {
        background-color: #fbfdac;
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
        background-color: #ace6fd;
        display: flex;
        flex-direction: column;
        padding: 20px 50px;
    }

    .main-button {
        display: flex;
        gap: 20px;
        justify-content: center;
    }

    tr {
        font-size: 18px;
    }

    button {
        margin-top: 25px;
        padding: 5px 20px;
        cursor: pointer;
        border: none;
    }
</style>

<body>
    <div class="main-container">
        <h1>Login</h1>
        <form action="prosesLog.php" method="post">
            <div class="table-container">
                <table cellpadding="5">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="usernameLog"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="passwordLog"></td>
                    </tr>
                </table>
                <div class="main-button">
                <button type="submit" name="submit" style="background-color: #adf59f;">Login</button>
                    <a href="welcome.php"><button style="background-color: #fdd7ac;">Kembali</button></a>     
                </div> 
            </div>        
        </form>
    </div>
</body>
</html>