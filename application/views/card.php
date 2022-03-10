<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
		.bg {
			width: 700px;
		}
		.alamat {
			position: absolute;
			left: 90px;
			top: 165px;
			color: white;
		}
		.no_telp {
			position: absolute;
			left: 90px;
			top: 200px;
			color: white;
		}
		.ig {
			position: absolute;
			left: 90px;
			top: 235px;
			color: white;
		}
		.fb {
			position: absolute;
			left: 90px;
			top: 270px;
			color: white;
		}
		.kode_member {
			position: absolute;
			left: 90px;
			top: 350px;
			color: white;
			font-size: 24px;
		}
		.foto {
			position: absolute;
			left: 280px;
			top: 140px;
			width: 100px;
			border-radius: 50%;
		}
		.nama {
			position: absolute;
			left: 280px;
			top: 250px;
			font-size: 18px;
			color: white;
		}

		.level {
			position: absolute;
			left: 540px;
			top: 73px;
			font-size: 18px;
			color: black;
		}
		.qrcode {
			position: absolute;
			left: 540px;
			top: 250px;
			width: 100px;
		}

	</style>
</head>
<body <?php echo $retVal = ($download=='y') ? "onload='print()'" : '' ; ?>>
	<?php 
	$id_member = $this->session->userdata('id_user');
	$this->db->where('id_member', $id_member);
	$member = $this->db->get('member')->row();

	 ?>
	<img class="bg" src="<?php echo base_url() ?>image/bg_card.png">
	<span class="alamat"><?php echo get_data('regencies','id',$member->id_kabupaten,'name') ?></span>
	<span class="no_telp"><?php echo $member->no_telp ?></span>
	<span class="ig"><?php echo $member->instagram ?></span>
	<span class="fb"><?php echo $member->facebook ?></span>
	<span class="kode_member"><?php echo $member->kode_member ?></span>
	<?php if ($member->foto !=''): ?>
		<img class="foto" src="<?php echo base_url() ?>image/user/<?php echo $member->foto ?>">
	<?php else: ?>
		<img class="foto" src="<?php echo base_url() ?>image/user/default.png">
	<?php endif ?>
	
	<span class="nama"><?php echo $member->nama_lengkap ?></span>
	<span class="level"><?php echo $member->level ?></span>
	<img class="qrcode" src="<?php echo base_url() ?>image/qrcode/<?php echo $member->kode_member ?>.png">

</body>
</html>