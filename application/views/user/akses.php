 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Akses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">user akses</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">User Akses</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Akses</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Role</th>
                    <th>Menu</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($akses as $dat) : ?>

	                  <tr>
	                    <td><?= $dat['role']; ?></td>
	                    <td><?= $dat['tittle']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('user/akses/hapus_akses/') . $dat['id_akses']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Akses</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('user/akses/tambahakses') ?>" method="POST">
                  <div class="form-group">
                  	<label>Role</label>
                     <select class="form-control" name="id_role">
                     	<?php foreach ($role as $dat) { ?>
                     		<option value="<?= $dat['id_role']; ?>"><?= $dat['role']; ?></option>
                     	<?php } ?>
                     </select>
                  </div>

                  <div class="form-group">
                  	<label>Akses</label><br>
                  		<?php foreach ($menu as $data) { ?>
                     		<input type="checkbox" name="menu[]" value="<?= $data['id_menu'] ?>"><?= $data['tittle']; ?><br>
                     	<?php } ?>
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