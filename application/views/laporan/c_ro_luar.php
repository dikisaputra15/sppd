<h3 style="text-align: center;">KABUPATEN SERANG</h3>
<h3 style="text-align: center;">BUKU REKAPITULASI PENGELUARAN</h3>
<h3 style="text-align: center;">RINCIAN PER OBYEK</h3>							

<table>
	<tr>
		<td>SKPD</td>
		<td>:</td>
		<td>DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN TATA BANGUNAN KABUPATEN SERANG</td>
	</tr>
	<tr>
		<td>Program</td>
		<td>:</td>
		<td><?= $pdflhpd['nama_program']; ?></td>
	</tr>
	<tr>
		<td>Kegiatan</td>
		<td>:</td>
		<td><?= $pdflhpd['nama_kegiatan']; ?></td>
	</tr>
	<tr>
		<td>Lokasi</td>
		<td>:</td>
		<td><?= $pdflhpd['lokasi']; ?></td>
	</tr>
	<tr>
		<td>Koring</td>
		<td>:</td>
		<td><?= $pdflhpd['koring_k']; ?></td>
	</tr>
	<tr>
		<td>Nama Rekening</td>
		<td>:</td>
		<td>Belanja Perjalanan Dinas Luar Daerah</td>
	</tr>
	<tr>
		<td>Pagu Anggaran</td>
		<td>:</td>
		<td>Rp. <?= number_format($pdflhpd['pagu_anggaran'], 0, '', '.'); ?></td>
	</tr>
	<tr>
		<td>PPTK</td>
		<td>:</td>
		<td><?= $pdflhpd['pptk']; ?></td>
	</tr>
</table>

<table border="1" width="100%">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Biaya</td>
		<td>Lama</td>
		<td>Sub total</td>
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
</table>
<p style="text-align: right;">Serang,.....................</p><br><br><br>
<table width="100%">
	<tr>
		<td width="70%">
			Mengetahui, <br>
			pengguna anggaran <br><br><br><br>



			<u>..............................</u>
		</td>

		<td>
			<br>
			Bendara Pengeluaran <br><br><br><br>



			<u>...............................</u>
		</td>
	</tr>
</table>