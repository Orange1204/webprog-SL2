<?php
    session_start();
    if(isset($_POST['submit'])){
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
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $filename = $_FILES['foto-profil']['name'];
        $tmp_name = $_FILES['foto-profil']['tmp_name'];
        $destination = "uploadTemp/".$filename;

        $uploadTemp = move_uploaded_file($tmp_name, $destination);

        $_SESSION["nama-depan"] = $nama_depan;
        $_SESSION["nama-tengah"] = $nama_tengah;
        $_SESSION["nama-belakang"] = $nama_belakang;
        $_SESSION["tempat-lahir"] = $tempat_lahir ;
        $_SESSION["tgl-lahir"] = $new_date;
        $_SESSION["nik"] = $nik;
        $_SESSION["warga-negara"] = $warga_negara ;
        $_SESSION["email"] = $email;
        $_SESSION["phone"] = $phone;
        $_SESSION["alamat"] = $alamat;
        $_SESSION["kode-pos"] = $kode_pos;
        $_SESSION["username"] = $username ;
        $_SESSION["password1"] = $password1;
        $_SESSION["password2"] = $password2;
        $_SESSION["foto-profil"] = $destination;
    }

    echo "<script type='text/javascript'>
        alert('Register berhasil, silahkan login');
        location.href='welcome.php';
    </script>";
?>

