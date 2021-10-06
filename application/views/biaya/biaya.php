 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Biaya SPPD Dalam Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Biaya SPPD Dalam Daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Biaya SPPD Dalam Daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Jarak</th>
                    <th>Lokasi</th>
                    <th>Gol 1</th>
                    <th>Gol 2</th>
                    <th>Gol 3s</th>
                    <th>Gol 3k</th>
                    <th>Gol 4</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($biaya as $dat) : ?>

	                  <tr>
	                    <td><?= $dat['jarak']; ?></td>
                      <td><?= $dat['lokasi']; ?></td>
                      <td>Rp. <?= number_format($dat['uang_gol1'], 0, '', '.'); ?></td>
                      <td>Rp. <?= number_format($dat['uang_gol2'], 0, '', '.'); ?></td>
                      <td>Rp. <?= number_format($dat['uang_gol3s'], 0, '', '.'); ?></td>
                      <td>Rp. <?= number_format($dat['uang_gol3k'], 0, '', '.'); ?></td>
                      <td>Rp. <?= number_format($dat['uang_gol4'], 0, '', '.'); ?></td>
	                    <td>
	                    	<a href="<?= base_url('biaya/biaya/hapus_biaya/') . $dat['id_biaya']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('biaya/biaya/edit_biaya/') . $dat['id_biaya']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Biaya</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('biaya/biaya/tambahbiaya') ?>" method="POST">

                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Jarak" name="jarak" id="jarak" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Lokasi" name="lokasi" id="lokasi" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Anggaran Golongan 1" name="gol1" id="gol1" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Anggaran Golongan 2" name="gol2" id="gol2" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Anggaran Golongan 3s" name="gol3s" id="gol3s" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Anggaran Golongan 3k" name="gol3k" id="gol3k" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Anggaran Golongan 4" name="gol4" id="gol4" required>
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