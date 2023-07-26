<?php 
SESSION_START();
include '../../../config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$check_list = mysqli_query($cons, "SELECT * FROM tbl_user WHERE nama_user='$username' AND password='$password'");

$cek_exist = mysqli_num_rows($check_list);

$data = mysqli_fetch_array($check_list);

if ($cek_exist > 0) {
    if ($data['aktif'] == 1) {
        if ($data['level'] == 'admin') {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['nama_user'] = $username;
            $_SESSION['password'] = $data['password'];
            $_SESSION['level'] = 'admin';
            header("location:../../../index.php");
        }
        if ($data['level'] == 'pelayan') {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['nama_user'] = $username;
            $_SESSION['password'] = $data['password'];
            $_SESSION['level'] = 'pelayan';
            header("location:../../../index.php");
        }
        if ($data['level'] == 'chef') {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['nama_user'] = $username;
            $_SESSION['password'] = $data['password'];
            $_SESSION['level'] = 'chef';
            header("location:../../../index.php");
        }
    }
    else {
        header("location:../login.php?pesan=log_gagal");
    }
}else {
    header("location:../login.php?pesan=gagal");
}

?>