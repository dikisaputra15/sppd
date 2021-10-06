<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div class="content-wrapper">

<?php
$id = $this->uri->segment(4);

?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">upload dokumen sppd dalam</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">file dokumen sppd dalam daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
                 <form action="<?= base_url('laporan/lap_sppd_dalam/upload_dok/') . $id; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="id_barang">file</label>
                        <div class="col-md-6">
                            <input type="file" name="file" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>

<div class="card-header">
                <h3 class="card-title">dokumen perjalanan dinas dalam daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>File</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach ($tampildok as $b) {
                    ?>
                         
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><a href="<?= base_url('upload/') . $b['file']; ?>" target="__blank">view dokumen</a></td>
                    </tr>

                <?php } ?>
                 </tbody>
                </table>
              </div>
</div>


              
              
      