 <?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">SPPD Luar Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">sppd luar daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">sppd luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah data</button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kegiatan</th>
                    <th>Pekerjaan</th>
                    <th>lokasi</th>
                    <th>program</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($sppdluar as $dat) : ?>

                    <tr>
                      <td><?= $dat['nama_kegiatan']; ?></td>
                      <td><?= $dat['nama_pekerjaan_luar']; ?></td>
                      <td><?= $dat['lokasi']; ?></td>
                      <td><?= $dat['nama_program']; ?></td>
                      <td>
                        <a href="<?= base_url('sppd_luar/sppd_luar/hapus_sppdluar/') . $dat['id_sppd_luar']; ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url('sppd_luar/sppd_luar/edit_sppdluar/') . $dat['id_sppd_luar']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah SPPD Luar</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('sppd_luar/sppd_luar/tambahsppdluar') ?>" method="POST">
                  <div class="form-group">
                    <label>Nama Program</label>
                     <select class="form-control" name="program">
                        <option>-Pilih Program-</option>
                      <?php foreach ($program as $dat) { ?>
                        <option value="<?= $dat['kode_program']; ?>"><?= $dat['nama_program']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Kegiatan</label>
                     <select class="form-control" name="kegiatan">
                        <option>-Pilih Kegiatan-</option>
                      <?php foreach ($kegiatan as $dat) { ?>
                        <option value="<?= $dat['no_kegiatan']; ?>"><?= $dat['nama_kegiatan']; ?></option>
                      <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                    <label>Pekerjaan</label>
                     <select class="form-control" name="pekerjaan">
                        <option>-Pilih Pekerjaan-</option>
                      <?php foreach ($pekerjaan as $dat) { ?>
                        <option value="<?= $dat['id_pekerjaan_luar']; ?>"><?= $dat['nama_pekerjaan_luar']; ?></option>
                      <?php } ?>
                     </select>
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