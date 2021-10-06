 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Pegawai</li>
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
                <h3 class="card-title">Edit Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                 <?= form_open_multipart(); ?>
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">Nip</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nip" value="<?= $pegawai['nip']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama" value="<?= $pegawai['nama']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <select name="jabatan" class="form-control">
                      <option value="pegawai" <?php if($pegawai['jabatan']=="pegawai"){echo "selected";} ?> class="form-control">pegawai</option>
                      <option value="kasi" <?php if($pegawai['jabatan']=="kasi"){echo "selected";} ?> class="form-control">kasi</option>
                       <option value="kabid" <?php if($pegawai['jabatan']=="kabid"){echo "selected";} ?> class="form-control">kabid</option>
                       <option value="kadis" <?php if($pegawai['jabatan']=="kadis"){echo "selected";} ?> class="form-control">kadis</option>
                    </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Pangkat/Golongan</label>
                    <select name="pangkat" class="form-control">
                      <option value="1" <?php if($pegawai['pangkat']=="1"){echo "selected";} ?> class="form-control">1</option>
                      <option value="2" <?php if($pegawai['pangkat']=="2"){echo "selected";} ?> class="form-control">2</option>
                       <option value="3" <?php if($pegawai['pangkat']=="3"){echo "selected";} ?> class="form-control">3</option>
                       <option value="4" <?php if($pegawai['pangkat']=="4"){echo "selected";} ?> class="form-control">4</option>
                    </select>
                  </div>

                  <div class="form-group">
                  <label>Gambar</label>
                  <input type="file" class="form-control" name="gambar" id="gambar" value="<?= $pegawai['gambar']; ?>">
                  </div>
                <!-- /.card-body -->

                <div class="form-group">
                  <input type="submit" name="update" class="btn btn-primary" value="Update">
                </div>
              </form>

</div>
</div>
</div>
</section>
</div>