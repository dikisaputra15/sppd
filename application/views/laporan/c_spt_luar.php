
<h5 style="text-align: center;">PEMERINTAH KABUPATEN SERANG</h5>
<h3 style="text-align: center;">DINAS PERUMAHAN, KAWASAN PEMUKIMAN DAN TATA BANGUNAN</h3>
<p style="text-align: center;">Jl. Brigjen KH. Syam’un Telp. (0254) 200177 Serang</p>
<hr>

<h3 style="text-align: center;"><b><u>SURAT PERINTAH TUGAS</u></b></h3>
<p style="text-align: center;">Nomor : 800/            /BPGP/DPKPTB/2020</p>

<p>Dengan ini Kepala Bidang Perumahan dan Gedung Pemerintahan Dinas Perumahan, Kawasan Permukiman dan Tata Bangunan Kabupaten Serang :										
</p>
<h3 style="text-align: center;"><b><u>MENUGASKAN</u></b></h3>

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
		<td>untuk menugaskan </td>
		<td><?= $pdfpermohonan['tujuan_p_dinas']; ?></td>
	</tr>
	<tr>
		<td>Tanggal </td>
		<td><?= $pdfpermohonan['tgl_berangkat']; ?></td>
	</tr>
	<tr>
		<td>Tempat </td>
		<td><?= $pdflhpd['lokasi']; ?></td>
	</tr>
</table>
<p>Demikian Surat Tugas ini dibuat untuk dapat dilaksanakan dengan penuh rasa tanggung jawab.
</p>


<p align="right">Serang, ...........................  <br>
Kepala Bidang Perumahan dan Gedung<br>
Pemerintahan<br><br><br><br>
TONY KRISTIAWAN, ST.,M.Si<br>
NIP. 197801022000121001</p>  
	