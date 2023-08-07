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

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="../../assets/images/icon/small icon.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="stylesheet" href="../../assets/css/mycss.css?v=<?php echo time(); ?>" />
    <!-- End layout styles -->
    
  </head>