 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Kegiatan Dalam Daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kegiatan Dalam Daerah</li>
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
                <h3 class="card-title">Edit Kegiatan Dalam Daerah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">no kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="no_kegiatan" value="<?= $kegiatan['no_kegiatan']; ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_kegiatan" value="<?= $kegiatan['nama_kegiatan']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">PPTK</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="pptk" value="<?= $kegiatan['pptk']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Koring Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="koring_kegiatan" value="<?= $kegiatan['koring_k']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Pagu Anggaran</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="pagu_anggaran" value="<?= $kegiatan['pagu_anggaran']; ?>">
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
