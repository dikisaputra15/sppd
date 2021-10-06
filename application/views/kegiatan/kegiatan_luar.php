 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kegiatan Luar Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">kegiatan luar daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Kegiatan luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Kegiatan</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>koring</th>
                    <th>Nama Kegiatan</th>
                    <th>PPTK</th>
                    <th>Pagu Anggaran</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($kegiatan as $dat) : ?>

	                  <tr>
                      <td><?= $dat['koring_k']; ?></td>
	                    <td><?= $dat['nama_kegiatan']; ?></td>
                      <td><?= $dat['pptk']; ?></td>
                      <td>Rp. <?= number_format($dat['pagu_anggaran'], 0, '', '.'); ?></td>
	                    <td>
	                    	<a href="<?= base_url('kegiatan/kegiatan_luar/hapus_kegiatan/') . $dat['no_kegiatan']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('kegiatan/kegiatan_luar/edit_kegiatan/') . $dat['no_kegiatan']; ?>" class="btn btn-primary">Edit</a>
	                    </td>
	                  </tr>

	              <?php endforeach; ?> 
                 </tbody>
                </table>
              </div>
              <!-- /.card-body -->
      </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan Luar Daerah</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('kegiatan/kegiatan_luar/tambahkegiatan') ?>" method="POST">

                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nomor Kegiatan" name="no_kegiatan" id="no_kegiatan" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Koring Kegiatan" name="koring_kegiatan" id="koring_kegiatan" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Kegiatan" name="nama_kegiatan" id="nama_kegiatan" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="PPTK" name="pptk" id="pptk" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Pagu Anggaran" name="pagu_anggaran" id="pagu_anggaran" required>
                  </div>
                   
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>