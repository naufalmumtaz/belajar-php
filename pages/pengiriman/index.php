<?php 
require "../../functions.php";
$queryPengiriman = mysqli_query($koneksi, "SELECT * FROM pengiriman");
// mysqli_fetch_assoc
// mysqli_fetch_object

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengiriman - Aplikasi Pengawasan</title>
</head>
<body>

<h1>Daftar Pengiriman</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Jenis</th>
		<th>No Pengiriman</th>
		<th>Tanggal Pengiriman</th>
		<th>No Tanda Terima</th>
		<th>Tanggal Tanda Terima</th>
		<th>Kelengkapan</th>
		<th>Kekurangan</th>
		<th>Keterangan</th>
	</tr>
	<?php $nomor = 1; ?>
	<?php while($baris = mysqli_fetch_assoc($queryPengiriman)) : ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?= $baris["jenis"]; ?></td>
		<td><?= $baris["tgl_pengiriman"] ?></td>
		<td><?= $baris["no_pengiriman"]; ?></td>
		<td><?= $baris["no_tanda_terima"]; ?></td>
		<td><?= $baris["tgl_tanda_terima"]; ?></td>
		<td><?= $baris["kelengkapan"]; ?></td>
		<td><?= $baris["kekurangan"]; ?></td>
		<td><?= $baris["keterangan"]; ?></td>
	</tr>
	<?php $nomor++; ?>
	<?php endwhile; ?>
</table>

</body>
</html>