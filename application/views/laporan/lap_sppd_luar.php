 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan SPPD Luar Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan sppd luar daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan SPPD luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tgl Berangkat</th>
                    <th>Lama</th>
                    <th>Tgl Kembali</th>
                    <th>Lokasi</th>
                    <th>Kegiatan</th>
                    <th>Pekerjaan</th>
                    <th>Pegawai yg ditugaskan</th>
                    <th>uang harian</th>
                    <th>total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($lapsppdluar as $dat) : ?>

	                  <tr>
                          <td><?= $dat['tgl_berangkat']; ?></td>
                          <td><?= $dat['lama_perjalanan']; ?></td>
                          <td><?= $dat['tgl_kembali']; ?></td>
                          <td><?= $dat['lokasi']; ?></td>
                          <td><?= $dat['nama_kegiatan']; ?></td>
                          <td><?= $dat['nama_pekerjaan_luar']; ?></td>
                          <td><?= $dat['nama']; ?></td>
                          <td>Rp. <?= number_format($dat['biaya_perjalanan'], 0, '', '.'); ?></td>
                          <td>Rp. <?= number_format($dat['total'], 0, '', '.'); ?></td>
                    </tr>

	              <?php endforeach; ?> 
                 </tbody>
                </table>

                <a href="<?= base_url('laporan/lap_sppd_luar/form_cetak'); ?>" class="btn btn-primary" target="__blank">Cetak Rekapitulasi SPPD Dalam</a>
              </div>
              <!-- /.card-body -->
      </div>
</div>

