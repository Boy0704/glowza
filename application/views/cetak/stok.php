<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title></title>
</head>
<body onload="print()">

	<center>
		<h2>Laporan STOK</h2>
	</center>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Produk</th>
				<th>Nama</th>
				<th>QTY</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$sql = "SELECT * from produk";
			foreach ($this->db->query($sql)->result() as $rw): ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $rw->kode_produk ?></td>
				<td><?php echo $rw->nama_produk ?></td>
				<td><?php echo $rw->qty ?></td>
			</tr>
			<?php $no++; endforeach ?>
		</tbody>
	</table>

</body>
</html>