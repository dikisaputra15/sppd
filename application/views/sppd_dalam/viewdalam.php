

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Perjalanan dinas dalam daerah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail perjalanan dinas dalam daerah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail perjalanan dinas dalam daerah</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
              <p>mohon untuk dibuatkan surat perjalanan dinas dengan identitas berikut :</p>
                <table>
                
                    <tr>
                      <td>Lokasi</td>
                      <td>:</td>
                      <td><?= $lokasi['lokasi']; ?></td>
                    </tr>

                    <tr>
                      <td>Tujuan Perjalanan Dinas</td>
                      <td>:</td>
                      <td><?= $viewdalam['tujuan_p_dinas']; ?></td>
                    </tr>

                    <tr>
                      <td>Tanggal berangkat</td>
                      <td>:</td>
                      <td><?= $viewdalam['tgl_berangkat']; ?></td>
                    </tr>

                    <tr>
                      <td>Tanggal kembali</td>
                      <td>:</td>
                      <td><?= $viewdalam['tgl_kembali']; ?></td>
                    </tr>
                 
                  <tr>
                      <td>Tertanda</td>
                      <td>:</td>
                      <td><?= $viewdalam['tertanda']; ?></td>
                    </tr>

                </table><br>

                <p>Adapun nama - nama yang ditugaskan adalah sebagai berikut :</p>

                <table border="1">

                  <tr>
                    <td>No</td>
                    <td>Nama</td>
                  </tr>
                  <?php $no=1; ?>
                  <?php foreach ($viewnama as $dat) { ?>
                  
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dat['nama']; ?></td>
                  </tr>

                  <?php } ?>
                </table><br>

                <a href="<?= base_url('sppd_dalam/permohonan_dalam/updatestatus/') . $viewdalam['id_permohonan_dalam']; ?>" class="btn btn-primary">Verifikasi</a>
              </div>
              <!-- /.card-body -->
      </div>
</div>

