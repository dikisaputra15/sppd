 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Unit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Unit</li>
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
                <h3 class="card-title">Edit Unit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id unit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_unit" value="<?= $unit['id_unit']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Penyulang</label>
                    <select class="form-control" name="unit_induk">
                      <?php foreach ($unitinduk as $dat) : 

                          if ($unit['unit_induk']==$dat['id_unit_induk']) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                        <option <?= $select; ?> value="<?= $dat['id_unit_induk']; ?>"><?= $dat['nama_unit_induk']; ?></option>

                      <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Unit</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_unit" value="<?= $unit['nama_unit']; ?>">
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
