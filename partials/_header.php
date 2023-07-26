<?php 
include '../../config.php';
SESSION_START();
if ($_SESSION['level']=="") {
 header("location:pages/log/login.php");
}

// store the sessions
$id=$_SESSION['id_user'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];
$username = $_SESSION['nama_user'];
?>
