 
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Buat SPPD dalam daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">buat SPPd dalam daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">permohonan sppd dalam daerah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <form action="" method="POST">
                <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id permohonan</th>
                    <th>Lokasi</th>
                    <th>Tujuan Perjalanan Dinas</th>
                    <th>Tanggal Berangkat</th>
                    <th>Tanggal Kembali</th>
                    <th>Tertanda</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($permohonan as $dat) : ?>

                    <tr>
                      <td><?= $dat['id_permohonan_dalam']; ?></td>
                      <td><?= $dat['lokasi']; ?></td>
                      <td><?= $dat['tujuan_p_dinas']; ?></td>
                      <td><?= $dat['tgl_berangkat']; ?></td>
                      <td><?= $dat['tgl_kembali']; ?></td>
                      <td><?= $dat['tertanda']; ?></td>
                      <td><?= $dat['status']; ?></td>
                      <td>
                        <input type="submit" name="pilih" value="pilih" class="btn btn-primary">
                      </td>
                    </tr>

                <?php endforeach; ?> 
                 </tbody>
                </table>
                </form>
              </div>
              <!-- /.card-body -->
      </div>

<?php 
if (isset($_POST['pilih'])) { ?>
 
 <div class="col-md-10">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">buat SPPD dalam daerah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" action="<?= base_url('sppd_dalam/sppd_dalam/proses_sppd_dalam') ?>" method="POST">
                <div class="card-body">

                   <div class="form-group" hidden>
                    <label for="exampleInputPassword1">id Permohonan dalam</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_permohonan_dalam" value="<?= $dat['id_permohonan_dalam']; ?>">
                  </div>

                  <div class="form-group" hidden>
                    <label for="exampleInputPassword1">Tanggal Berangkat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="tgl_berangkat" value="<?= $dat['tgl_berangkat']; ?>">
                  </div>

                  <div class="form-group" hidden>
                    <label for="exampleInputPassword1">Tanggal Kembali</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="tgl_kembali" value="<?= $dat['tgl_kembali']; ?>">
                  </div>

                  <div class="form-group" hidden>
                    <label for="exampleInputPassword1">id biaya</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_biaya" value="<?= $dat['id_biaya']; ?>">
                  </div>

                  <div class="form-group" hidden>
                    <label for="exampleInputPassword1">id sppd dalam</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_sppd_dalamm" value="<?= $dat['id_sppd_dalam']; ?>">
                  </div>

                   <div class="form-group">
                    <label>Pegawai yang diperintahkan</label><br>
                    <?php 

                    $iddalam = $dat['id_permohonan_dalam'];
                    $query = $this->db->query("SELECT tb_detail_permohonan_dalam.*, tb_pegawai.nip,tb_pegawai.nama FROM tb_detail_permohonan_dalam JOIN tb_pegawai on tb_detail_permohonan_dalam.nip=tb_pegawai.nip where tb_detail_permohonan_dalam.id_permohonan_dalam='$iddalam'");

                      foreach ($query->result() as $row)
                      { ?>
                      
                         <input type="checkbox" name="pegawai[]" value="<?= $row->nip; ?>" required><?= $row->nama; ?>
                         <!-- <select name="goluang[]">
                           <option value="0">-Pilih Golongan-</option>
                           <option value="<?php echo $gol['uang_gol1'] ?>">gol1</option>
                           <option value="<?php echo $gol['uang_gol2'] ?>">gol2</option>
                           <option value="<?php echo $gol['uang_gol3s'] ?>">gol3s</option>
                           <option value="<?php echo $gol['uang_gol3k'] ?>">gol3k</option>
                           <option value="<?php echo $gol['uang_gol4'] ?>">gol4</option>
                         </select> -->
                         <br>
                    <?php } ?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="no_kegiatan" value="<?= $dat['no_kegiatan']; ?>" hidden>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $dat['nama_kegiatan']; ?>" readonly>
                  </div>
                  
                   <div class="form-group"
                    <label for="exampleInputPassword1">Nama Pekerjaan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="id_pekerjaan" value="<?= $dat['id_pekerjaan']; ?>" hidden>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $dat['nama_pekerjaan']; ?>" readonly>
                  </div>

                  <div class="form-group"
                    <label for="exampleInputPassword1">Nama Program</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="kode_program" value="<?= $dat['kode_program']; ?>" hidden>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $dat['nama_program']; ?>" readonly>
                  </div>
  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pagu Anggaran</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="pagu_anggaran" value="<?= $dat['pagu_anggaran']; ?>" readonly>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="buat" class="btn btn-primary" value="Buat SPPD">
                </div>
              </form>


</div>
</div>
</div>
</div>
</div>
</section>

<?php
}
?>

          