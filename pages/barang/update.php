<?php 
include '../../partials/_header.php';

?>

  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include '../../partials/_navbar.php' ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include '../../partials/_sidebar.php' ?>
        <!-- partial -->
        <div class="main-panel">
          <?php if ($level == 'admin') {?>
          <div class="form-wrapping" >
          <?php } else {?>
          <div class="form-wrapping" hidden>
          <?php } ?>
            <div class="row row--top-20">
              <div class="col-md-12">
                <div class="form-container">
                  <form method="POST" action="crud/aksi-update.php">
                    <?php 
                    $id = $_GET['id'];

                    $query = mysqli_query($cons, "SELECT * FROM tbl_menu WHERE id_menu='$id'");

                    $u = mysqli_fetch_array($query);
                    ?>
                    <div class="wrapping">
                      <div class="boxing">
                      <input value="<?=$id_user?>" type="text" class="form-control" id="nama" placeholder="" name="id_user" hidden/>
                        <div class="inputbox">
                            <input value="<?=$u['id_barang']?>" type="text" class="form-control" id="nama" placeholder="" name="id" hidden />
                            <input value="<?=$u['nama_barang']?>" type="text" class="form-control" id="nama" placeholder="" name="nama" required />
                            <label class="hover-input" for="nama" class="form-label">Nama barang</label>
                        </div>
                        <div class="inputbox">
                            <input value="<?=$u['jumlah_barang']?>" type="text" class="form-control" id="kelas" placeholder="" name="jumlah" required />
                            <label class="hover-input" for="nama" class="form-label">Jumlah barang</label>
                        </div>
                        <div class="inputbox">
                          <input value="<?=$u['satuan']?>" type="text" class="form-control" id="kelas" placeholder="" name="satuan" required />
                            <label class="hover-input" for="nama" class="form-label">Satuan / kemasan</label>
                        </div>
                      </div>
                      <div class="boxing">
                        <div class="inputbox">
                            <input value="<?=$u['kode_barang']?>" type="text" class="form-control" id="nama" placeholder="" name="kode" required />
                            <label class="hover-input" for="nama" class="form-label">Kode barang</label>
                        </div>
                        <div class="inputbox">
                            <input value="<?=$u['expired_date']?>" type="date" class="form-control" id="kelas" placeholder="" name="expire" required />
                            <label class="hover-input" for="nama" class="form-label">Expired date</label>
                        </div>
                        <div class="inputbox">
                            <input value="<?=$u['harga_satuan']?>" type="text" class="form-control" id="kelas" placeholder="" name="harga" required />
                            <label class="hover-input" for="nama" class="form-label">Harga Barang</label>
                        </div>
                      </div>
                    </div>
                    <div class="button">
                      <div class="button-container">
                        <div class="button"> <!-- Updated class name -->
                          <a href="barang.php" class="cancel">Cancel</a>
                        </div>
                        <div class="button"> <!-- Updated class name -->
                          <button class="confirm" type="submit">Confirm!</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
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
  </body>
</html>
