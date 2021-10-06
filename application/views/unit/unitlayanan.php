 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Unit Layanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">unit layanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Unit Layanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Unit Layanan</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Unit Induk</th>
                    <th>Nama Unit Pelaksana</th>
                    <th>Nama Unit Pelayanan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($layanan as $dat) : ?>

	                  <tr>
                      <td><?= $dat['nama_unit_induk']; ?></td>
                      <td><?= $dat['nama_unit']; ?></td>
	                    <td><?= $dat['unit_layanan']; ?></td>
	                    <td>
	                    	<a href="<?= base_url('unit/layanan/hapus_unitlayanan/') . $dat['id_unit_layanan']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('unit/layanan/edit_unitlayanan/') . $dat['id_unit_layanan']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Unit</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('unit/layanan/tambahlayanan') ?>" method="POST">
                 <div class="form-group">
                    <label>Unit Induk</label>
                     <select class="form-control" name="unit_induk" id="unit_induk">
                        <option>-Select Unit Induk-</option>
                      <?php foreach ($unitinduk as $row) { ?>
                        <option value="<?php echo $row->id_unit_induk;?>"><?php echo $row->nama_unit_induk; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  
                 <div class="form-group">
                    <label>Unit Pelaksana</label>
                     <select class="form-control" name="unit" id="unit">
                         <option>-Select Unit Pelaksana-</option>
                     </select>
                  </div>
                  
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Unit layanan" name="unit_layanan" id="unit_layanan" required>
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

<script type="text/javascript" src="<?= base_url('assets/js/jquery3.js'); ?>"></script>
  <script type="text/javascript">
        $(document).ready(function(){
           $('#unit_induk').change(function(){
            var id_unit_induk = $('#unit_induk').val();
            if(id_unit_induk != '')
            {
             $.ajax({
              url:"<?php echo base_url(); ?>unit/layanan/fetch_unit",
              method:"POST",
              data:{id_unit_induk:id_unit_induk},
              success:function(data)
              {
               $('#unit').html(data);
               // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
              }
             });
            }
            else
            {
             $('#unit').html('<option value="">Select Unit</option>');
             // $('#unit_layanan').html('<option value="">Select Unit Layanan</option>');
            }
           });
           
          });
    </script>