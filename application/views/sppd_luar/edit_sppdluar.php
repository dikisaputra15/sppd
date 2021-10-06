 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit SPPD luar daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit SPPd luar daerah</li>
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
                <h3 class="card-title">Edit SPPD luar daerah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">

                   <div class="form-group" hidden>
                    <label for="exampleInputPassword1">id sppd luar</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_sppd_luar" value="<?= $sppdluar['id_sppd_luar']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Program</label>
                     <select class="form-control" name="program" id="program">
                     
                      <?php foreach ($program as $dat) : 

                          if ($sppdluar['kode_program']==$dat['kode_program']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['kode_program']; ?>"><?= $dat['nama_program']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kegiatan</label>
                     <select class="form-control" name="kegiatan" id="kegiatan">
                     
                      <?php foreach ($kegiatan as $dat) : 

                          if ($sppdluar['no_kegiatan']==$dat['no_kegiatan']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['no_kegiatan']; ?>"><?= $dat['nama_kegiatan']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Pekerjaan</label>
                     <select class="form-control" name="pekerjaan" id="pekerjaan">
                     
                      <?php foreach ($pekerjaan as $dat) : 

                          if ($sppdluar['id_pekerjaan_luar']==$dat['id_pekerjaan_luar']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_pekerjaan_luar']; ?>"><?= $dat['nama_pekerjaan_luar']; ?></option>

                      <?php endforeach; ?>
                      
                     </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">lokasi</label>
                     <select class="form-control" name="lokasi" id="lokasi">
                     
                      <?php foreach ($biaya as $dat) : 

                          if ($sppdluar['id_biaya']==$dat['id_biaya_luar']) {
                            $selec="selected";
                          }else{
                            $selec="";
                          }

                      ?>

                        <option <?= $selec; ?> value="<?= $dat['id_biaya_luar']; ?>"><?= $dat['lokasi']; ?></option>

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
