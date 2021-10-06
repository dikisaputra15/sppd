 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">LIST SPPD Luar Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">list luar daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">list luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table>
                <tr>
                  <td><?= $listluar['nama_kegiatan']; ?></td>
                  <td></td>
                  <td>Rp. <?= $listluar['pagu_anggaran']; ?></td>
                </tr>
                <tr>
                  <td>Kode Kegiatan</td>
                  <td>:</td>
                  <td><?= $listluar['no_kegiatan']; ?></td>
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
                  <?php foreach ($tabelluar as $dat) { ?>
                  <tr>
                    <td><?= $dat['nama_kegiatan'] ?></td>
                    <td><?= $dat['nama_pekerjaan_luar'] ?></td>
                    <td><?= $dat['lokasi'] ?></td>
                    <td><?= $dat['nama_program'] ?></td>
                    <td>
                      <a href="<?= base_url('laporan/lap_sppd_luar/ro/') . $dat['id_buat_sppd_luar']; ?>" class="btn btn-primary" target="__blank">RO</a><br><br>
                      <a href="<?= base_url('laporan/lap_sppd_luar/spt/') . $dat['id_buat_sppd_luar']; ?>" class="btn btn-primary" target="__blank">SPT</a><br><br>
                      <a href="<?= base_url('laporan/lap_sppd_luar/kwitansi/') . $dat['id_buat_sppd_luar']; ?>" class="btn btn-primary" target="__blank">kwitansi</a><br><br>
                      <?php if($this->session->userdata('role_user')=="pegawai"){ ?>
                       <a href="<?= base_url('laporan/lap_sppd_luar/form_lhpd_luar/') . $dat['id_buat_sppd_luar']; ?>" class="btn btn-primary btn-sm">input LHPD</a>
                       <?php } ?>
                       <?php if($this->session->userdata('role_user')=="admin"){ ?>
                        <a href="<?= base_url('laporan/lap_sppd_luar/c_lhpd/') . $dat['id_buat_sppd_luar']; ?>" class="btn btn-primary btn-sm" target="__blank">LHPD</a><br><br>
                       <?php } ?>
                       <a href="<?= base_url('laporan/lap_sppd_luar/form_dok/') . $dat['id_buat_sppd_luar']; ?>" class="btn btn-primary btn-sm">Dokumen</a>
                    </td>
                  </tr>
                  <?php } ?>
                 </tbody>
                </table><br>
                <a href="<?= base_url('sppd_luar/sppd_luar/buat_sppd_luar/') . $listluar['no_kegiatan']; ?>" class="btn btn-primary">Buat SPPD</a>
              </div>
              <!-- /.card-body -->
      </div>
</div>

