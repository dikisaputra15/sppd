 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form LHPD SPPD luar daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form LHPD SPPd luar daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form LHPD SPPD luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url('laporan/lap_sppd_luar/tambahlhpd'); ?>" method="POST">
                <div class="card-body">

                   <div class="form-group" hidden>
                    <label for="exampleInputPassword1">id buat sppd luar</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_buat_sppd_luar" value="<?= $getid['id_buat_sppd_luar']; ?>">
                  </div>
  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hasil Perjalanan Dinas</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="hasil">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="kirim" class="btn btn-primary" value="kirim">
                </div>
              </form>
</div>
</div>
</div>
</div>
</div>
</section>
