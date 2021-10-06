<script src="<?php echo base_url() ?>assets/js/demo/Chart.js"></script>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center>
            <h3 class="m-0 text-dark">SELAMAT DATANG DISISTEM INFORMASI PERJALANAN DINAS DPKPTB</h3>
            <H3>KABUPATEN SERANG</H3>
            </center>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        <?php if($this->session->userdata('role_user')=='admin'){?>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <p>MASTER PEGAWAI</p>
              </div>
              
              <a href="<?= base_url('pegawai/pegawai'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php } ?>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                <p>SPPD DALAM DAERAH</p>
              </div>
              
              <a href="<?= base_url('sppd_dalam/card_dalam'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p>SPPD LUAR DAERAH</p>
              </div>
              <a href="<?= base_url('sppd_luar/card_luar') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

<?php if($this->session->userdata('role_user')=='admin'){?>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>JUMLAH SPPD DALAM DAERAH MASUK</p>
                 <h3 style="color: red; text-align: center;"><b><?php echo $jmlmasukdalam; ?></b></h3>
              </div>
              
              <a href="<?= base_url('laporan/lap_sppd_dalam/jml_masuk'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p>JUMLAH SPPD LUAR DAERAH MASUK</p>
                 <h3 style="color: red; text-align: center;"><b><?php echo $jmlmasukluar; ?></b></h3>
              </div>
              <a href="<?= base_url('laporan/lap_sppd_luar/jml_keluar') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
<?php } ?>

        </div>

         <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Grafik Realisasi Anggaran Perjalanan Dinas Dalam Daerah</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>

                  <div style="width: 800px;height: 700px">
                    <canvas id="myChart"></canvas>
                   
                  </div>
              </div>
              </div>

               <div class="card">
              <div class="card-header">
                <h5 class="card-title">Grafik Realisasi Anggaran Perjalanan Dinas Luar Daerah</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>

                  <div style="width: 800px;height: 700px">
                    <canvas id="myChart2"></canvas>
                  </div>
              </div>
              </div>
              </div>
      </div>

       
</section>
</div>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [<?php foreach ($grafikdalam as $data) {
          echo "'" .$data->no_kegiatan ."',";
        } ?>],
        datasets: [{
          label: 'sppd dalam daerah',
          backgroundColor: '#ADD8E6',
          borderColor: '##93C3D2',
          data: [<?php foreach ($grafikdalam as $data) {
            echo $data->total_biaya . ", ";
          } ?>]
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
     
      type: 'bar',
      data: {
        labels: [<?php foreach ($grafikluar as $data) {
          echo "'" .$data->no_kegiatan ."',";
        } ?>],
        datasets: [{
          label: '# sppd luar daerah',
          backgroundColor: '#ADD8E6',
          borderColor: '##93C3D2',
          data: [<?php foreach ($grafikluar as $data) {
            echo $data->total_biaya . ", ";
          } ?>],
        }]
      },
      
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>