<h5 style="text-align: center;">PEMERINTAH KABUPATEN SERANG</h5>
<h3 style="text-align: center;">DINAS PERUMAHAN, KAWASAN PEMUKIMAN DAN TATA BANGUNAN</h3>
<p style="text-align: center;">Jl. Brigjen KH. Syam’un Telp. (0254) 200177 Serang</p>
<hr>
<p align="right">Tanggal ....................
<p align="right">Nomor ......................
<p align="right">Koring <?= $pdflhpd['koring_k']; ?>
<h3 align="center">Kwitansi (Tanda Pembayaran)</h3>
<table>
	<tr>
		<td>Serah Terima Dari</td>
		<td>Bendahara Pengeluaran</td>
	</tr>
	<tr>
		<td>Rp. </td>
		<td><b><i><u>Rp. <?= number_format($pdflhpd['total_biaya'], 0, '', '.'); ?></u></i></b></td>
	</tr>
	<tr>
		<td>Yaitu untuk</td>
		<td>Biaya Perjalanan Dinas Dalam daerah</td>
	</tr>
	<tr>
		<td>Program</td>
		<td><?= $pdflhpd['nama_program']; ?></td>
	</tr>
	<tr>
		<td>kegiatan</td>
		<td><?= $pdflhpd['nama_kegiatan']; ?></td>
	</tr>
	<tr>
		<td>Lokasi</td>
		<td><?= $pdflhpd['lokasi']; ?></td>
	</tr>
	<tr>
		<td>kode rekening</td>
		<td><?= $pdflhpd['koring_k']; ?></td>
	</tr>
</table>

<p>Dengan rincian sebagai berikut</p>
<table border="1" width="100%">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Biaya</td>
		<td>Lama</td>
		<td>Sub Total</td>
	</tr>
	<?php $no=1; $total = 0; ?>
	<?php foreach ($biayapetugas as $dat) : ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $dat['nama']; ?></td>
		<td>Rp. <?= number_format($dat['biaya_perjalanan'], 0, '', '.'); ?></td>
		<td><?= $dat['lama_perjalanan']; ?> Hari</td>
		<td>Rp. <?= number_format($dat['total'], 0, '', '.'); ?></td>
	</tr>
	<?php 
		$a = $dat['total'];

		$total += $a; 
	?>
	<?php endforeach; ?>
	<tr>
		<td colspan="4">Total</td>
		<td>Rp. <?= number_format($total, 0, '', '.'); ?></td>
	</tr>
</table><br><br>

<table>
	<tr>
		<td>
			Mengetahui/Menyetujui <br>	
			 Pengguna Anggaran 	<br><br><br><br><br><br><br><br>
			 ........................
		</td>
		<td>
			Telah dibayar : <br>	
			 Bendahara Pengeluaran	 <br><br><br><br><br><br><br><br>
			 ........................	
		</td>
		<td>
			Pejabat Pelaksana Teknis <br>	
			 Kegiatan (PPTK)<br><br><br><br><br><br><br><br>
			 ........................			 	
		</td>
		<td>
			Serang,  <br>	
			 Yang Menerima <br>				
			 	Nama <br>
			 	jabatan <br>
			 	satuan kerja <br>
			 	TANDA TANGAN <br><br><br><br>
			 ........................

		</td>
	</tr>
</table>
