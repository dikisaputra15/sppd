 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Biaya SPPD Luar Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Biaya SPPD Luar Daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit SPPD Luar Daerah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id biaya</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_biaya_luar" value="<?= $biaya['id_biaya_luar']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">jarak</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="jarak" value="<?= $biaya['jarak']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Lokasi</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="lokasi" value="<?= $biaya['lokasi']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">uang golongan 1</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="uang_gol1" value="<?= $biaya['uang_gol1']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">uang golongan 2</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="uang_gol2" value="<?= $biaya['uang_gol2']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">uang golongan 3s</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="uang_gol3s" value="<?= $biaya['uang_gol3s']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">uang golongan 3k</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="uang_gol3k" value="<?= $biaya['uang_gol3k']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">uang golongan 4</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="uang_gol4" value="<?= $biaya['uang_gol4']; ?>">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="update" class="btn btn-primary" value="Update">
                </div>
              </form>
</div>
</div>
</div>
</div>
</div>
</section>
