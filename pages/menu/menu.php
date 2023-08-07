<?php 
include '../../partials/_header.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
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
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <style>
    
  </style>
  <body>
    <div hidden id="level-user"><?php echo $level ?></div>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include '../../partials/_navbar.php' ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include '../../partials/_sidebar.php' ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper table-content " >
            <div class="form-wrapping" >
              <div class="row row--top-20">
                <div class="col-md-12">
                  <div class="form-menu">
                    <!-- items -->
                    <div class="boxing-menu">
                      <h2 class="section-header">Makanan</h2>
                      <div class="shop-items">
                        <?php 
                        $query = mysqli_query($cons, "SELECT * FROM tbl_menu ORDER BY nama_menu");

                        while ($g = mysqli_fetch_array($query)) {
                        ?>
                        <div class="shop-item">
                          <span class="shop-item-id" id="menu-id" hidden><?=$g['id_menu'] ?></span>
                          <span class="shop-item-title" id="menu-name"><?=$g['nama_menu'] ?></span>
                          <?php if (strpos($g['gambar'], 'https') !== FALSE) { // jika gambarnya berasalh dari link website ======?>
                          <img class="shop-item-image" id="menu-pic" src="<?=$g['gambar'] ?>" />
                          <?php }elseif ($g['gambar'] == "") { // jika gambar tidak memiliki isi =================================?>
                          <img class="shop-item-image" id="menu-pic" src="../../assets/gambar-menu/no_food.png" />
                          <?php }elseif (strpos($g['gambar'], 'https') === FALSE) { // jika gambar berada di dalam folder ========?>
                          <img class="shop-item-image" id="menu-pic" src="../../assets/gambar-menu/<?=$g['gambar'] ?>" />
                          <?php } ?>
                          <div class="shop-item-details">
                            <span class="shop-item-price" id="menu-price">Rp <?= number_format($g['harga_menu'], 0, ',', '.')?></span>
                            <button class="btn btn-primary shop-item-button" id="add-menu" type="button">ADD DISH</button>
                          </div>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="modul-btn show-orders">
              <button id="myBtn" ><i class="mdi mdi-call-missed"></i></button>
            </div>
            <div class="modal" id="myModal">
            <div class="modul-btn cancel-orders">
              <button id="cancel-order" class="close"><i class="mdi mdi-close"></i></button>
            </div>
              <div class="container modal-content " >
                <div class="row row--top-20 " >
                  <div class="col-md-12">
                    <div class="table-container">
                      <form action="crud/aksi-register.php" method="POST" id="transaksiTable">
                        <div class="submit-btn-container">
                          <button class="submit-btn" type="submit">submit</button>
                        </div>
                        <div class="select-meja">
                          <select name="meja" id="">
                            <?php 
                            $quant_table = 1;

                            while ($quant_table != 21) {?>
                            <option value="<?=$quant_table ?>"><?=$quant_table ?></option>
                            <?php $quant_table = $quant_table + 1;} ?>
                          </select>
                          <input type="text" name="pemesan" placeholder="Nama Pemesan">
                        </div>
                        <input type="text" name='id' value="<?=$id?>" hidden>
                        
                        <table class="table">
                          <thead class="table__thead">
                            <tr class="cart-row">
                              <th class="table__th">Nama</th>
                              <th class="table__th cart-price">harga</th>
                              <th class="table__th">Quantitas</th>
                              <th class="table__th">Action</th>
                            </tr>
                          </thead>
                          <tbody class="table__tbody cart-items" id="table-body">
                            <!-- masuknya data menu disini -->
                            
                          </tbody>
                          <div class="total-harga">
                            <span class="total cart-total-price">Rp 0</span>
                          </div>
                        </table>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include '../../partials/_footer.php' ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script src="crud/store.js"></script>
  </body>
</html>
