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
		<h2>KAS KELUAR</h2>
	</center>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Keterangan</th>
				<th>Jumlah</th>
				<th>Tanggal</th>
				<th>Oleh</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$sql = "SELECT * from kas_keluar where tanggal between '$tgl1' and '$tgl2' ";
			foreach ($this->db->query($sql)->result() as $rw): ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $rw->keterangan ?></td>
				<td><?php echo $rw->jumlah ?></td>
				<td><?php echo $rw->tanggal ?></td>
				<td><?php echo get_data('app_user','id_user',$rw->user_by,'nama_lengkap') ?></td>
			</tr>
			<?php $no++; endforeach ?>
		</tbody>
	</table>

</body>
</html>