<?php 
include '../../../config.php';

$id_user=$_POST['id'];

// $count_id_barang = count($id_barang);

if (isset($_POST['id_barang'], $_POST['quantity_barang'])) {
    $id_barang=$_POST['id_barang'];
    $quantitas=$_POST['quantity_barang'];
    $meja=$_POST['meja'];

    $getIdPesanan = mysqli_query($cons, "SELECT kode_pesanan FROM tbl_pesanan ORDER BY kode_pesanan DESC LIMIT 1");
    $getIP = mysqli_fetch_array($getIdPesanan);

    $new_id_pesanan = $getIP['kode_pesanan'] + 1;

    echo $new_id_pesanan;
    while (true) {
        $query = mysqli_query($cons, "SELECT COUNT(kode_pesanan) AS 'dupe' FROM tbl_pesanan WHERE kode_pesanan='$new_id_pesanan'");
        $data = mysqli_fetch_array($query);
    
        if ($data['dupe'] > 0) {
            $new_id_pesanan = $getIP['kode_pesanan'] + 1;
        }else{
            break;
        }
    }
    
    $j = 0;

    foreach ($id_barang as $i => $v) {
        $query = mysqli_query($cons, "SELECT * FROM tbl_menu WHERE id_menu='$v'");
        $data = mysqli_fetch_array($query);
    
        // mengambil barang barang yang tidak ada di sql 
        $total_harga = $data['harga_menu'] * $quantitas[$j];
        $jumlah_barang = $quantitas[$j];
        
        if (isset($_POST['id_barang'])) {
            $pemesan=$_POST['pemesan'];

            $input = mysqli_query($cons, "INSERT INTO tbl_pesanan 
            (kode_pesanan, nama_pelanggan, deskripsi_meja, id_user, id_menu, total_bayar, status, kuantitas)
            VALUES ('$new_id_pesanan', '$pemesan', '$meja', '$id_user', '$v', '$total_harga', '0', '$jumlah_barang')");
        }else {
            $input = mysqli_query($cons, "INSERT INTO tbl_pesanan 
            (kode_pesanan, nama_pelanggan, deskripsi_meja, id_user, id_menu, total_bayar, status, kuantitas)
            VALUES ('$new_id_pesanan', 'Anonymous', '$meja', '$id_user', '$v', '$total_harga', '0', '$jumlah_barang')");

        }
    
        $j += 1;
    
        if ($input) {
            echo"<script>alert('BERHASIL: Meregister barang!');window.location='../menu.php';</script>";
        }
        else {
            echo"<script>alert('GAGAL: Tidak dapat menjual barang!');window.location='../menu.php';</script>";
        }
    
    }    
}
else {
    // echo"<script>alert('GAGAL: Tidak ada barang yang dimasuki!');window.location='../menu.php';</script>";
}


// $query = mysqli_query($cons, "SELECT * FROM tbl_barang WHERE nama_barang='$barang'");
// $g = mysqli_fetch_array($query);
// // getting all of the sufficient information from barang table
// $id_barang = $g['id_barang'];
// // mengambil tanggal dan hari
// date_default_timezone_set('Asia/Jakarta');
// $time = time();
// $date = date('Y-m-d H:i:s', $time);

// // getting random number for no_transaksi
// $no_trans = rand(1000, 10000);

// //multiply between barang price and the quantity
// $harga_satuan = $g['harga_satuan'];
// $total_harga = $harga_satuan * $kuantitas;
// //Substract the remaining amount of items and update it
// $hasil_pengurangan_barang = $g['jumlah_barang'] - $kuantitas;
// $update_quantity = mysqli_query($cons, "UPDATE tbl_barang SET jumlah_barang='$hasil_pengurangan_barang' WHERE id_barang='$id_barang'");

// $input = mysqli_query($cons, "INSERT INTO tbl_transaksi (no_transaksi, tgl_transaksi, total_bayar, id_user, id_barang, kuantitas)
// VALUES ('$no_trans', '$date', '$total_harga', '$id_user', '$id_barang', '$kuantitas')");

// if ($input) {
//     echo"<script>alert('BERHASIL: sudah mengikuti perusahaan kita!');window.location='../transaksi.php';</script>";
// }else {
//     echo"<script>alert('Gagal memasuki');window.location='../transaksi.php';</script>";
// }

?>