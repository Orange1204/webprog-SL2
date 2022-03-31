<?php
    include("config.php");

    if(isset($_GET['id'])){
        $str_query = "DELETE FROM user_profile WHERE `username` = '".$_GET['id']."'";
        $query = mysqli_query($connection, $str_query);

        if($query){
            echo "<script type='text/javascript'>
                alert('Data profil berhasil dihapus');
                location.href='welcome.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            alert('Data gagal dihapus');
            </script>".mysqli_error($connection);
        }
    }

?>