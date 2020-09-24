  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php print base_url('adminlte/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Online MIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?php print base_url('index.php/admin/dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt text-green"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php print base_url('index.php/mahasiswa/'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Mahasiswa</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php print base_url('index.php/dosen/'); ?>" class="nav-link">
              <i class="nav-icon fas fa-user-circle text-red"></i>
              <p>Dosen</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php print base_url('index.php/jurusan/'); ?>" class="nav-link">
              <i class="nav-icon fas fa-university text-orange"></i>
              <p>Jurusan</p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database text-yellow"></i>
              <p>
                Akun
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php print base_url('index.php/superadmin/gantipass'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ganti Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php print base_url('index.php/superadmin/user'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>