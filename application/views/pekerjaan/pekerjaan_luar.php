 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pekerjaan Luar Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">pekerjaan luar daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Pekerjaan luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Pekerjaan</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Pekerjaan</th>
                    <th>Lokasi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($pekerjaan as $dat) : ?>

	                  <tr>
                      <td><?= $dat['nama_pekerjaan_luar']; ?></td>
                      <td><?= $dat['lokasi']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('pekerjaan/pekerjaan_luar/hapus_pekerjaan/') . $dat['id_pekerjaan_luar']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('pekerjaan/pekerjaan_luar/edit_pekerjaan/') . $dat['id_pekerjaan_luar']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Pekerjaan Luar Daerah</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('pekerjaan/pekerjaan_luar/tambahpekerjaan') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Pekerjaan Luar Daerah" name="nama_pekerjaan_luar" id="nama_pekerjaan_luar" required>
                  </div>
            </div>
            <div class="form-group">
                    <label>Lokasi</label>
                     <select class="form-control" name="lokasi">
                        <option>-Pilih Lokasi-</option>
                      <?php foreach ($biaya as $dat) { ?>
                        <option value="<?= $dat['id_biaya_luar']; ?>"><?= $dat['lokasi']; ?></option>
                      <?php } ?>
                     </select>
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