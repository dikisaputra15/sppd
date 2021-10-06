 

 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Permohonan SPPD Dalam Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">permohonan sppd dalam daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">permohonan sppd dalam daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tujuan Perjalanan Dinas</th>
                    <th>Nama pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Tanggal Berangkat</th>
                    <th>Tanggal Kembali</th>
                    <th>Tertanda</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($jmlmasukdalam as $dat) : ?>

	                  <tr>
                      <td><?= $dat['tujuan_p_dinas']; ?></td>
                      <td><?= $dat['nama_pekerjaan']; ?></td>
                      <td><?= $dat['lokasi']; ?></td>
                      <td><?= $dat['tgl_berangkat']; ?></td>
                      <td><?= $dat['tgl_kembali']; ?></td>
                      <td><?= $dat['tertanda']; ?></td>
                      <td><?= $dat['status']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('sppd_dalam/permohonan_dalam/hapus_permohonandalam/') . $dat['id_permohonan_dalam']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                        <a href="<?= base_url('sppd_dalam/permohonan_dalam/view_permohonandalam/') . $dat['id_permohonan_dalam']; ?>" class="btn btn-primary">view</a>
	                    </td>
	                  </tr>

	              <?php endforeach; ?> 
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
</div>

