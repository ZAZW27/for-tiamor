<?php 
include '../../../config.php';

$nama=$_POST['nama_user'];
$password=$_POST['password'];
$level=$_POST['level'];

$input = mysqli_query($cons, "INSERT INTO tbl_user (nama_user, password, aktif, level)
VALUES ('$nama', '$password', '1', '$level')");

if ($input) {
    echo"<script>alert('BERHASIL: $nama sudah mengikuti perusahaan kita!');window.location='../karyawan.php';</script>";
}else {
    echo"<script>alert('Gagal memasuki $nama');window.location='../karyawan.php';</script>";
}

?>