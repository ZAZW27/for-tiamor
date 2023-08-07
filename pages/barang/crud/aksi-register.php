<?php 
include '../../../config.php';

$nama=$_POST['nama_menu'];
$harga=$_POST['harga_menu'];
$jenis_pangan=$_POST['jenis_pangan'];
$deskripsi=$_POST['deskripsi'];
$gambar_menu = $_FILES['gambar_menu']['name'];

if (isset($_FILES['gambar_menu'])) {
    $x = explode('.', $gambar_menu);//memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_menu']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_menu;/* menggabungkan angka acak dengan */

    move_uploaded_file($file_tmp, '../../../assets/gambar-menu/'.$nama_gambar_baru);/* memindah file */

    $query = mysqli_query($cons, "INSERT INTO tbl_menu (nama_menu, harga_menu, jenis_pangan, deskripsi, gambar) 
    VALUES ('$nama', '$harga', '$jenis_pangan','$deskripsi','$nama_gambar_baru')");
    //periksa query apakah ada error
    if (!$query) {
        die("Query gagal dijalankan: ".mysqli_errno($cons).
        " - ".mysqli_error($cons));
    } else {
    //tampil alert danakan redirect ke halaman index.php
    echo "<script>alert('Data berhasil ditambah.');window.location='../tambah.php';</script>";
    }
    // echo "gambar is added";
}else {
    $query = mysqli_query($cons, $query, "INSERT INTO tbl_menu (nama_menu, harga_menu, jenis_pangan, deskripsi, gambar) 
    VALUES ('$nama', '$harga', '$jenis_pangan','$deskripsi', NULL)");
    //periksa query apakah ada error
    if (!$query) {
        die("Query gagal dijalankan: ".mysqli_errno($cons)." - ".mysqli_error($cons));
    } else {
    //tampil alert danakan redirect ke halaman index.php
    echo "<script>alert('Data berhasil ditambah.');window.location='../tambah.php';</script>";
    }
    // echo "gambar i not added";
}

?>