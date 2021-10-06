 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">LIST SPPD Dalam Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">list dalam daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">list dalam daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table>
                <tr>
                  <td><?= $listdalam['nama_kegiatan']; ?></td>
                  <td></td>
                  <td>Rp. <?= $listdalam['pagu_anggaran']; ?></td>
                </tr>
                <tr>
                  <td>Kode Kegiatan</td>
                  <td>:</td>
                  <td><?= $listdalam['no_kegiatan']; ?></td>
                </tr>
              </table><br>
            
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kegiatan</th>
                    <th>Pekerjaan</th>
                    <th>lokasi</th>
                    <th>program</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($tabeldalam as $dat) { ?>
                  <tr>
                    <td><?= $dat['nama_kegiatan'] ?></td>
                    <td><?= $dat['nama_pekerjaan'] ?></td>
                    <td><?= $dat['lokasi'] ?></td>
                    <td><?= $dat['nama_program'] ?></td>
                    <td>
                      <a href="<?= base_url('laporan/lap_sppd_dalam/ro/') . $dat['id_buat_sppd_dalam']; ?>" class="btn btn-primary btn-sm" target="__blank">RO</a><br><br>
                      <a href="<?= base_url('laporan/lap_sppd_dalam/spt/') . $dat['id_buat_sppd_dalam']; ?>" class="btn btn-primary btn-sm" target="__blank">SPT</a><br><br>
                      <a href="<?= base_url('laporan/lap_sppd_dalam/kwitansi/') . $dat['id_buat_sppd_dalam']; ?>" class="btn btn-primary btn-sm" target="__blank">kwitansi</a><br><br>
                      <?php if($this->session->userdata('role_user')=="pegawai"){ ?>
                      <a href="<?= base_url('laporan/lap_sppd_dalam/form_lhpd_dalam/') . $dat['id_buat_sppd_dalam']; ?>" class="btn btn-primary btn-sm">input LHPD</a>
                      <?php } ?>
                      <?php if($this->session->userdata('role_user')=="admin"){ ?>
                      <a href="<?= base_url('laporan/lap_sppd_dalam/c_lhpd/') . $dat['id_buat_sppd_dalam']; ?>" class="btn btn-primary btn-sm" target="__blank">LHPD</a><br><br>
                      <?php } ?>
                      <a href="<?= base_url('laporan/lap_sppd_dalam/form_dok/') . $dat['id_buat_sppd_dalam']; ?>" class="btn btn-primary btn-sm">Dokumen</a>
                    </td>
                  </tr>
                  <?php } ?>
                 </tbody>
                </table><br>
                <a href="<?= base_url('sppd_dalam/sppd_dalam/buat_sppd_dalam/') . $listdalam['no_kegiatan']; ?>" class="btn btn-primary">Buat SPPD</a>
              </div>
              <!-- /.card-body -->
      </div>
</div>

