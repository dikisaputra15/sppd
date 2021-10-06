 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_user" value="<?= $user['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nip" value="<?= $user['nip']; ?>">
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= $user['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_lengkap" value="<?= $user['nama_lengkap']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <select name="role_user" class="form-control">
                      <option value="admin" <?php if($user['role_user']=="admin"){echo "selected";} ?> class="form-control">admin</option>
                      <option value="pegawai" <?php if($user['role_user']=="pegawai"){echo "selected";} ?> class="form-control">pegawai</option>
                      <option value="kasi" <?php if($user['role_user']=="kasi"){echo "selected";} ?> class="form-control">kasi</option>
                       <option value="kabid" <?php if($user['role_user']=="kabid"){echo "selected";} ?> class="form-control">kabid</option>
                       <option value="kadis" <?php if($user['role_user']=="kadis"){echo "selected";} ?> class="form-control">kadis</option>
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

