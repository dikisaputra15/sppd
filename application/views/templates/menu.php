<!-- Main Sidebar Container -->
 <?php 

  $rol = $this->session->userdata('role');

 ?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/img/kabserang.png'); ?>" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SPPD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <!-- <a href="#" class="d-block">Hi, <?php echo $this->session->userdata('nama'); ?></a> -->
        </div>
      </div>

     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url(); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         <?php if($this->session->userdata('role_user')=="admin"){ ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user/user'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pegawai/pegawai'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('program/program'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Program</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('kegiatan/kegiatan'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kegiatan Dalam</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?= base_url('kegiatan/kegiatan_luar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kegiatan Luar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pekerjaan/pekerjaan'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pekerjaan Dalam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pekerjaan/pekerjaan_luar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pekerjaan Luar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('biaya/biaya'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Biaya SPPD Dalam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('biaya/biayaluar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Biaya SPPD Luar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('sppd_dalam/sppd_dalam'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SPPD Dalam Daerah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('sppd_luar/sppd_luar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SPPD Luar Daerah</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Proses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php if($this->session->userdata('role_user')!="pegawai"){ ?>
              <li class="nav-item">
                <a href="<?= base_url('sppd_dalam/permohonan_dalam'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan SPPD Dalam</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?= base_url('sppd_luar/permohonan_luar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permohonan SPPD Luar</p>
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="<?= base_url('sppd_dalam/card_dalam'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD Dalam Daerah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('sppd_luar/card_luar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD Luar Daerah</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('laporan/lap_sppd_dalam'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD Dalam Daerah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan/lap_sppd_luar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SPPD Luar Daerah</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>
    <!-- /.sidebar -->
  </aside>