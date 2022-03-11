<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
	<style type="text/css">
		body {
		    font-family: 'Poppins';
		}
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
<body>
	<?php 
	$id_member = $this->session->userdata('id_user');
	$this->db->where('id_member', $id_member);
	$member = $this->db->get('member')->row();

	 ?>
	<div id="content">
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
	</div>

	<a href="<?php echo base_url() ?>app/download_card_png/<?php echo $member->kode_member ?>">
		<h4>DOWNLOAD</h4>
	</a>
	<br><br><br><br><br>
    <div id="img" style="display:none;">
        <img id="hasilGambar"/>
    </div>


    <script>

    	$(document).ready(function() {
    		html2canvas($("#content"), {
                onrendered: function(canvas) {
                    var imgsrc = canvas.toDataURL("image/png");
                    // console.log(imgsrc);
                    // $("#hasilGambar").attr('src', imgsrc);
                    // $("#img").show();
                    var dataURL = canvas.toDataURL();
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() ?>app/card_png",
                        data: {
                            imgBase64: dataURL,
                            kodeMember: '<?php echo $member->kode_member ?>'
                        }
                    }).done(function(o) {
                        console.log('Sukses');
                    });
                }
            });
    	});
    </script>

</body>
</html>