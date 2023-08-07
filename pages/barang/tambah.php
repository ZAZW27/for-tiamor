<?php 
include '../../partials/_header.php';

?>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include '../../partials/_navbar.php' ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include '../../partials/_sidebar.php' ?>
        <!-- partial -->
        <div class="main-panel">
          <?php if ($level == 'admin' || $level == "gudang") {?>
          <div class="form-wrapping" >
          <?php } else {?>
          <div class="form-wrapping" hidden>
          <?php } ?>
            <div class="row row--top-20">
              <div class="col-md-12">
                <div class="form-container">
                  <form method="POST" action="crud/aksi-register.php" enctype="multipart/form-data">
                    <div class="wrapping">
                      <div class="boxing">
                        <div class="inputbox">
                            <input type="text" class="form-control" id="nama" placeholder="" name="nama_menu" required />
                            <label class="hover-input" for="nama" class="form-label">Nama Menu</label>
                        </div>   
                        <div class="inputbox">
                            <input type="text" class="form-control" id="nama" placeholder="" name="harga_menu" required />
                            <label class="hover-input" for="nama" class="form-label">Harga Menu</label>
                        </div>
                        <div class="inputbox">
                          <select id="level" name="jenis_pangan" required  style=""  >
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                          </select>
                        </div>
                      </div>
                      <div class="boxing">
                        <div class="inputbox">
                          <textarea class="deskripsi-menu" name="deskripsi" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="inputbox">
                          <input type="file" class="form-control" id="gambar-menu" placeholder="" name="gambar_menu" />
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
  </body>
</html>
