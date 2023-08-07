<?php 
include '../../../config.php';

$id=$_POST['id_user'];
$username=$_POST['nama_user'];
$password=$_POST['password'];
$tipe=$_POST['tipe'];



$update = mysqli_query($cons, "UPDATE user SET nama_user='$username', 
password='$password', level='$tipe' WHERE id_user='$id'");
if ($update) {
    echo"<script>alert('BERHASIL: mengupdate!');window.location='../karyawan.php';</script>";
}
else {
    echo"<script>alert('GAGAL: mengupdate');window.location='../karyawan.php';</script>";
}


?>