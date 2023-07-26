<?php 

$cons = mysqli_connect('localhost', 'root', '', 'skada_resto');
if (!$cons) {
    die("mysqli tidak dapat mengkoneksi".mysqli_connect_error());
}


?>