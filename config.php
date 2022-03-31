<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "webprog2";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        // echo "Connection established";
    } else {
        throw new Exception("Mysql Connection Error:" .mysqli_connect_error());
    }

?>