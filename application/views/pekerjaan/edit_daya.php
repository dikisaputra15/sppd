 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Daya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Daya</li>
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
                <h3 class="card-title">Edit Daya</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id daya</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_daya" value="<?= $daya['id_daya']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tarif</label>
                    <select class="form-control" name="id_tarif">
                      <?php foreach ($tarif as $dat) : 

                          if ($daya['id_tarif']==$dat['id_tarif']) {
                            $select="selected";
                          }else{
                            $select="";
                          }

                      ?>

                        <option <?= $select; ?> value="<?= $dat['id_tarif']; ?>"><?= $dat['nama_tarif']; ?></option>

                      <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Daya</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="daya" value="<?= $daya['daya']; ?>">
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
