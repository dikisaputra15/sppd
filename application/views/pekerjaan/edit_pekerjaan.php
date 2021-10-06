 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Pekerjaan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Pekerjaan</li>
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
                <h3 class="card-title">Edit Pekerjaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id pekerjaan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_pekerjaan" value="<?= $pekerjaan['id_pekerjaan']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pekerjaan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_pekerjaan" value="<?= $pekerjaan['nama_pekerjaan']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">lokasi</label>
                     <select class="form-control" name="lokasi" id="lokasi">
                     
                      <?php foreach ($biaya as $dat) : 

                          if ($pekerjaan['id_biaya']==$dat['id_biaya']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_biaya']; ?>"><?= $dat['lokasi']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
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
