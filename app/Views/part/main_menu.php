<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Elektrifikasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('kabupaten') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Data Kabupaten</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('kecamatan') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Data Kecamatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('desa') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Data Desa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('tahun') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Data Tahun</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('status') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Data Status</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('catat') ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Catat Status</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
