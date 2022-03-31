<?php
    include("config.php");

    if(isset($_POST["submit"])){
        $username = $_POST['username'];
        $password = $_POST['password1'];
        $nama_depan = $_POST['nama-depan'];
        $nama_tengah = $_POST['nama-tengah'];
        $nama_belakang = $_POST['nama-belakang'];
        $tempat_lahir = $_POST['tempat-lahir'];

        $tgl_lahir = $_POST['tgl-lahir'];
        $timestamp = strtotime($tgl_lahir);
        $new_date = date("d-m-Y", $timestamp);

        $nik = $_POST['nik'];
        $warga_negara = $_POST['warga-negara'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $alamat = $_POST['alamat'];
        $kode_pos = $_POST['kode-pos'];

        $file = $_FILES['foto-profil']['tmp_name'];
        $photo = addslashes(file_get_contents($file));
        
        $str_query = "INSERT INTO user_profile VALUES('$username',
                                                    '$password',
                                                    '$nama_depan',
                                                    '$nama_tengah',
                                                    '$nama_belakang', 
                                                    '$tempat_lahir',
                                                    '$tgl_lahir',
                                                    '$nik',
                                                    '$warga_negara',
                                                    '$email',
                                                    '$phone',
                                                    '$alamat',
                                                    '$kode_pos',
                                                    '$photo')";
        
        $query = mysqli_query($connection, $str_query);

        if($query){
            echo "<script type='text/javascript'>
                alert('Register berhasil, silahkan login');
                location.href='welcome.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            alert('Data gagal disimpan');
            </script>".mysqli_error($connection);

            echo "<br><button onclick='history.back()'>Go Back</button>";
        }
    }
?>