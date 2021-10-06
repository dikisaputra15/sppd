<h5 style="text-align: center;">PEMERINTAH KABUPATEN SERANG</h5>
<h3 style="text-align: center;">DINAS PERUMAHAN, KAWASAN PEMUKIMAN DAN TATA BANGUNAN</h3>
<p style="text-align: center;">Jl. Brigjen KH. Syam’un Telp. (0254) 200177 Serang</p>
<hr> 

<h3 style="text-align: center;">LAPORAN SPPD LUAR DAERAH</h3>
              <!-- /.card-header -->
             <table border="1">
                  <tr>
                    <th>Tgl Berangkat</th>
                    <th>Lama</th>
                    <th>Tgl Kembali</th>
                    <th>Lokasi</th>
                    <th>Kegiatan</th>
                    <th>Pekerjaan</th>
                    <th>Pegawai yg ditugaskan</th>
                    <th>uang harian</th>
                    <th>total</th>
                  </tr>
                  <tbody>
                    <?php foreach ($lapsppdluar as $dat) : ?>
                        <tr>
                          <td><?= $dat['tgl_berangkat']; ?></td>
                          <td><?= $dat['lama_perjalanan']; ?></td>
                          <td><?= $dat['tgl_kembali']; ?></td>
                          <td><?= $dat['lokasi']; ?></td>
                          <td><?= $dat['nama_kegiatan']; ?></td>
                          <td><?= $dat['nama_pekerjaan_luar']; ?></td>
                          <td><?= $dat['nama']; ?></td>
                          <td>Rp. <?= number_format($dat['biaya_perjalanan'], 0, '', '.'); ?></td>
                          <td>Rp. <?= number_format($dat['total'], 0, '', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?> 
                
                </table>
              

