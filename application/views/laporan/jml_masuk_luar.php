

 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Permohonan SPPD Luar Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">permohonan sppd luar daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">permohonan sppd luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tujuan Perjalanan Dinas</th>
                    <th>Tanggal Berangkat</th>
                    <th>Tanggal Kembali</th>
                    <th>Tertanda</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($jmlmasukluar as $dat) : ?>

	                  <tr>
                      <td><?= $dat['tujuan_p_dinas']; ?></td>
                      <td><?= $dat['tgl_berangkat']; ?></td>
                      <td><?= $dat['tgl_kembali']; ?></td>
                      <td><?= $dat['tertanda']; ?></td>
                      <td><?= $dat['status']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('sppd_luar/permohonan_luar/hapus_permohonanluar/') . $dat['id_permohonan_luar']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                        <a href="<?= base_url('sppd_luar/permohonan_luar/view_permohonanluar/') . $dat['id_permohonan_luar']; ?>" class="btn btn-primary">view</a>
	                    </td>
	                  </tr>

	              <?php endforeach; ?> 
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
</div>
