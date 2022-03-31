<?php
    include("config.php");

    $usernameLog = $_POST['usernameLog'];
    $passwordLog = $_POST['passwordLog'];

    $str_query = "SELECT * FROM user_profile WHERE `username` = '$usernameLog' AND `password` = '$passwordLog'";
    $query = mysqli_query($connection, $str_query) or die( mysqli_error($connection));
    $row  = mysqli_fetch_array($query);
    // $count = mysqli_num_rows($query);

    if(is_array($row)){      
        echo "<script type='text/javascript'>
            alert('Login berhasil');
            location.href='home.php?id=".$usernameLog."';
        </script>";

        // session_start();

        // $username = $_POST['usernameLog'];
        // $_SESSION["usernameLog"] = $username ;
    
    } else {
        echo "<script type='text/javascript'>
            alert('Maaf login gagal');
            location.href='welcome.php';
        </script>";
    }
    
?>