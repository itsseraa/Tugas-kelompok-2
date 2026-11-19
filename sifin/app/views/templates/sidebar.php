<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?= base_url; ?>/home" class="brand-link">
    <span class="brand-text font-weight-light">SIFIN</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">
          <?= isset($_SESSION['nama_lengkap']) ? $_SESSION['nama_lengkap'] : 'Guest'; ?>
        </a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url; ?>/home" class="nav-link"> 
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-header">MASTER DATA</li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/kategori" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>Kategori</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/supplier" class="nav-link">
            <i class="nav-icon fas fa-truck"></i>
            <p>Supplier</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/lokasi" class="nav-link">
            <i class="nav-icon fas fa-map-marker-alt"></i>
            <p>Lokasi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/barang" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>Barang</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/user" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>User</p>
          </a>
        </li>
        <li class="nav-header">TRANSAKSI</li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/barangmasuk" class="nav-link">
            <i class="nav-icon fas fa-arrow-down"></i>
            <p>Barang Masuk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/barangkeluar" class="nav-link">
            <i class="nav-icon fas fa-arrow-up"></i>
            <p>Barang Keluar</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url; ?>/peminjaman" class="nav-link">
            <i class="nav-icon fas fa-exchange-alt"></i>
            <p>Peminjaman</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>