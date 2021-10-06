<p style="text-align: right;">Serang,.............</p>
<table>
	<tr>
		<td>Nomor</td>
		<td>:</td>
		<td></td>
	</tr>
	<tr>
		<td>Hal</td>
		<td>:</td>
		<td>Laporan Hasil Perjalanan Dinas</td>
	</tr>
</table>
<p>
Bapak Kepala Bidang Perumahan dan Gedung Pemerintahan Dinas Perumahan, Kawasan Permukiman dan Tata Bangunan Kabupaten Serang									
</p>
<p>Di.-</p>
<p style="margin-left: 70px;">serang</p>
<p>
Dengan ini kami sampaikan Laporan Hasil Perjalanan Dinas Dalam Daerah Pada Kegiatan Pembangunan Gedung Perkantoran, Rumah Jabatan dan Rumah Dinas									
</p>
<table>
	<tr>
		<td>1. Dasar Pelaksanaan</td>
	</tr>
	<tr>
		<td>Surat Perintah Tugas Nomor: 800/        /BPGP/DPKPTB/2020 dari Bapak Kepala Bidang Perumahan dan Gedung Pemerintahan Dinas Perumahan, Kawasan Permukiman dan Tata Bangunan Kabupaten Serang								
		</td>
	</tr>
	<tr>
		<td>2. Tujuan</td>
	</tr>
	<tr>
		<td>
			<?= $pdfpermohonan['tujuan_p_dinas']; ?>								
		</td>
	</tr>
	<tr>
		<td>3. Waktu dan Tempat</td>
	</tr>
	<tr>
		<td>
			Dilaksanakan Tanggal : <?= $pdfpermohonan['tgl_berangkat']; ?>								
		</td>
	</tr>
	<tr>
		<td>
			Tempat : <?= $pdflhpd['lokasi']; ?>								
		</td>
	</tr>
	<tr>
		<td>4. Personil</td>
	</tr>
	<tr>
		<td>
			Personil yang melakukan perjalanan dinas adalah sebagai berikut :			
		</td>
	</tr>
</table>
<table border="1" width="100%">
	<tr>
		<td>Nama</td>
		<td>Nip</td>
		<td>Jabatan</td>
	</tr>
	<?php foreach ($biayapetugas as $dat) : ?>
	<tr>
		<td><?php echo $dat['nama']; ?></td>
		<td><?php echo $dat['nip']; ?></td>
		<td><?php echo $dat['jabatan']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<table>
	<tr>
		<td>5. Hasil Perjalanan Dinas</td>
	</tr>
	<tr>
		<?php 
			if($hasillhpd['hasil']==""){
		?>
		<td>
			<h5>LHPD Belum diinput</h5>
		</td>
		<?php }else{ ?>
		<td>
			<?= $hasillhpd['hasil']; ?>								
		</td>
		<?php } ?>
	</tr>
	<tr>
		<td>5. LAIN - LAIN</td>
	</tr>
	<tr>
		<td>
			Biaya sehubungan dengan penugasan ini menjadi beban Dana Alokasi Umum ( DAU ).
		</td>
	</tr>
</table>
<p>Demikian kami sampaikan, atas perhatian yang diberikan, kami sampaikan terima kasih.
</p>
<p>
	Yang melaksanakan perjalanan dinas :
</p>

<table>
	<?php foreach ($biayapetugas as $data) : ?>
	<tr>
		<td><?php echo $data['nama']; ?></td>
		<td>...............</td>
	</tr>
	<?php endforeach; ?>
</table>