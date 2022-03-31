<?php
    include("config.php");
       
    if(isset($_POST["submit"])){

        $username = $_GET['id'];

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
        
        $str_query = "UPDATE user_profile SET 
                                            `nama-depan` = '$nama_depan',
                                            `nama-tengah` = '$nama_tengah',
                                            `nama-belakang` = '$nama_belakang', 
                                            `tempat-lahir` = '$tempat_lahir',
                                            `tgl-lahir` = '$tgl_lahir',
                                            `nik` = '$nik',
                                            `warga-negara` = '$warga_negara',
                                            `email` = '$email',
                                            `phone` = '$phone',
                                            `alamat` = '$alamat',
                                            `kode-pos` = '$kode_pos',
                                            `foto-profil` = '$photo'
                    WHERE `username` = '$username'";
        
        $query = mysqli_query($connection, $str_query);

        if($query){
            echo "<script type='text/javascript'>
                alert('Data profil berhasil di update');
                location.href='profile.php?id=".$username."';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            alert('Data gagal diupdate');
            </script>".mysqli_error($connection);
        }
    }
?>