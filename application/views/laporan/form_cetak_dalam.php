 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">laporan berdasarkan tanggal SPPD Dalam</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">laporan berdasarkan tangggal SPPD Dalam</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url('laporan/lap_sppd_dalam/cetakall'); ?>" method="POST" target="__blank">
                <div class="card-body">
                <div class="row">
                	<div class="col-md-12">
 					<div class="col-md-3">
	                  <div class="form-group">
	                    <label for="exampleInputPassword1">Tanggal</label>
	                    <input type="date" class="form-control" id="exampleInputPassword1" name="tgl1">
	                  </div>
	                 </div>
	                 <div class="col-md-3">
	                  <div class="form-group">
	                    <label for="exampleInputPassword1">sd</label>
	                  </div>
	                 </div>
	                 <div class="col-md-3">
	                  <div class="form-group">
	                    <label for="exampleInputPassword1">Tanggal</label>
	                    <input type="date" class="form-control" id="exampleInputPassword1" name="tgl2">
	                  </div>
	                 </div>
	                 <div class="col-md-3">
	                  <div class="form-group">
	                    <input type="submit" class="btn btn-primary" id="exampleInputPassword1" name="lihat" value="Lihat">
	                  </div>
	                 </div>
	                 </div>
                </div>
                </div>
                <!-- /.card-body -->

              </form>
</div>
</div>
</div>
</div>
</div>
</section>
