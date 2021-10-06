  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js">
</script>

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
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Buat Permohonan</button>
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
                  <?php foreach ($permohonan as $dat) : ?>

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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Form Perjalanan Dinas Luar Daerah</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('sppd_luar/permohonan_luar/tambahformluar') ?>" method="POST">
                  <div class="form-group">
                    <label>Pegawai yang diperintahkan</label><br>
                     <?php foreach ($pegawai as $dat) { ?>
                     <input type="checkbox" name="pegawai[]" value="<?= $dat['nip']; ?>"><?= $dat['nama']; ?>
                     <br>
                      <?php } ?>
                  </div>
    
                  <div class="form-group">
                    <label>Pekerjaan</label>
                     <select class="form-control" name="kegiatan">
                        <option>-Pilih pekerjaan-</option>
                      <?php foreach ($kegiatan as $dat) { ?>
                        <option value="<?= $dat['id_sppd_luar']; ?>"><?= $dat['nama_pekerjaan_luar']; ?></option>
                      <?php } ?>
                     </select>
                  </div>

                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tujuan Perjalanan Dinas" name="tujuan" id="tujuan" required>
                  </div>

                  <div class="form-group">
                    <label>Tanggal Berangkat</label><br>
                     <input type="text" class="datepicker" name="tgl_berangkat">
                  </div>

                 <div class="form-group">
                    <label>Tanggal Kembali</label><br>
                     <input type="text" class="datepicker2" name="tgl_kembali">
                  </div>

                  <div class="form-group">
                    <label>Tertanda</label><br>
                     <input type="radio" name="tertanda" value="kasi">kasi
                     <input type="radio" name="tertanda" value="kabid">kabid
                     <input type="radio" name="tertanda" value="kadis">kadis
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

<script type="text/javascript">
  $('.datepicker').datepicker({
  autoclose: true,
    todayHighlight: true,
    startDate: "dateToday",
    format:'yyyy-mm-dd'
  });
 
 </script>

 <script type="text/javascript">
  $('.datepicker2').datepicker({
  autoclose: true,
    todayHighlight: true,
    startDate: "dateToday",
    format:'yyyy-mm-dd'
  });
 
 </script>