<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

 <div class="content-wrapper">

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center>
            <h3 class="m-0 text-dark">PERJALANAN DINAS DALAM DAERAH</h3>
            </center>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <?php foreach ($sppddalam as $dat) { ?>

           <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p><?= $dat['nama_kegiatan']; ?></p>
                <p><?= $dat['no_kegiatan']; ?></p>    
              </div>
              <a href="<?= base_url('sppd_dalam/sppd_dalam/list/') . $dat['no_kegiatan']; ?>" class="small-box-footer"><p>Rp. <?= number_format($dat['pagu_anggaran'], 0, '', '.'); ?></p><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <?php } ?>

        </div>

       
</section>
</div>
