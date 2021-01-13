<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<a href="tambahsiswa.php">Tambah Data</a>

	<h5>Data Siswa</h5>
	<table width="100%" border=2px;>
		<tr>
			<th>ID Calon</th>
			<th>No Formulir</th>
			<th>Tgl Daftar</th>
			<th>Jam</th>
			<th>Nama Calon</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Alamat Rumah</th>
			<th>Desa</th>
			<th>Nama Sekolah</th>
			<th>ID Referal</th>
			<th>ID Jurusan</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
		<?php
			include 'koneksi.php';
			$tampilsiswa=$con->query("SELECT * FROM tbcalon");

			while($row=$tampilsiswa->fetch_array()){
				echo "<tr>
						<td>".$row['idcalon']."</td>
						<td>".$row['no_formulir']."</td>
						<td>".$row['tgl_daftar']."</td>
						<td>".$row['jam']."</td>
						<td>".$row['nama_calon']."</td>
						<td>".$row['tempat_lahir']."</td>
						<td>".$row['tanggal_lahir']."</td>
						<td>".$row['jenis_kelamin']."</td>
						<td>".$row['alamat_rumah']."</td>
						<td>".$row['desa']."</td>
						<td>".$row['nama_sekolah']."</td>
						<td>".$row['id_referal']."</td>
						<td>".$row['id_jurusan']."</td>
						<td><img src='".$row['folder'].$row['gambar']."' width='70'></td>
						<td> <a href='ubahdata.php?id=".$row['idcalon']."'>Edit</a> | 
							<a href='hapusdata.php?id=".$row['idcalon']."'>Hapus</a></td>
				</tr>";
			}
		?>
	</table>
</body>
</html>