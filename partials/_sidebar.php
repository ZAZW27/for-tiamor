<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../karyawan/karyawan.php">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Karyawan</span>
              </a>
            </li>
            <li class="nav-item">
              <?php if ($level == "admin" || $level == "gudang") {?>
              <a class="nav-link" href="../barang/barang.php">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Barang</span>
              </a>
              <?php } ?>
            </li>
            <li class="nav-item">
              <?php if ($level == "admin" || $level == "pelayan") { ?>
              <a class="nav-link" href="../menu/menu.php">
                <span class="icon-bg"><i class="mdi mdi-currency-usd menu-icon"></i></span>
                <span class="menu-title">menus</span>
              </a>
              <?php } ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../penjualan/penjualan.php">
                <span class="icon-bg"><i class="mdi mdi-tag-multiple menu-icon"></i></span>
                <span class="menu-title">Penjualan</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?=$level ?></p>
                        <p class="mb-1"><?=substr($username , 0, 24); ?></p>
                      </div>
                    </div>
                  </div>
                  <?php 
                  if ($level == "admin") {
                    echo "<div class='badge badge-success'>1</div>";
                  }elseif ($level == "pelayan") {
                    echo "<div class='badge badge-warning'>2</div>";
                  }
                  elseif ($level == "chef") {
                    echo "<div class='badge badge-danger'>3</div>";
                  }
                  ?>
                  
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"
                  ><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i> <span class="menu-title">Take Tour</span></a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="../log/crud/aksi-logout.php?id=<?=$id?>" class="nav-link"><i class="mdi mdi-logout menu-icon"></i> <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>