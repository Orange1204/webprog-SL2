<?php
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_SESSION)){
            if($_POST['usernameLog'] == $_SESSION['username'] && $_POST['passwordLog'] == $_SESSION['password1']){
                echo "<script type='text/javascript'>
                    alert('Login berhasil');
                    location.href='home.php';
                </script>";
            } 
            else {
                echo "<script type='text/javascript'>
                    alert('Maaf login gagal');
                    location.href='welcome.php';
                </script>";
            }
        }
    }
?>