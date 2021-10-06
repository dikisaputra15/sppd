 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Pegawai</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Pangkat/Golongan</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($pegawai as $dat) : ?>

	                  <tr>
	                    <td><?= $dat['nip']; ?></td>
                      <td><?= $dat['nama']; ?></td>
                      <td><?= $dat['jabatan']; ?></td>
                      <td><?= $dat['pangkat']; ?></td>
	                    <td><img src="<?= base_url('assets/img/') . $dat['gambar']; ?>" style="width: 50px; height: 50px;"></td>
	                    <td>
	                    	<a href="<?= base_url('pegawai/pegawai/hapus_pegawai/') . $dat['nip']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('pegawai/pegawai/edit_pegawai/') . $dat['nip']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('pegawai/pegawai/tambahpegawai') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NIP" name="nip" id="nip" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama" name="nama" id="nama" required>
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                     <select class="form-control" name="jabatan">
                      
                        <option value="pegawai">pegawai</option>
                        <option value="kasi">kasi</option>
                        <option value="kabid">kabid</option>
                        <option value="kadis">kadis</option>
                      
                     </select>
                  </div>
                   <div class="form-group">
                    <label>Pangkat/Golongan</label>
                     <select class="form-control" name="pangkat">
                      
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      
                     </select>
                  </div>  
                  <div class="form-group">
                    <label>Photo</label>
                     <input class="form-control form-control-sm mb-3" type="File" name="gambar">
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