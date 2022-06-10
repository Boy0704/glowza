
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<base href="<?php echo base_url() ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/logo.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Glowza - Verified Member</title>
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="assets/logo.png" class="logo-icon" alt="logo icon"><span class="logo-text" style="color: #CC9C27">Glowza</span>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"> <a class="nav-link active" aria-current="page" href=""><i class='bx bx-home-alt me-1'></i>Home</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>Verified Akun</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="error-404 d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="card py-5">
					<div class="row g-0">
						<div class="col col-sm-12">
							<div class="card-body">
								<?php 
								$kode_member = $this->uri->segment(3);
								  $data = $this->db->get_where('member', ['kode_member' => $kode_member])->row();
								 ?>
								<div class="row">
									<div class="col-sm-10">
										<img src="assets/verified/header.png" style="height: 80px;" class="img-fluid" alt="logo icon">
									</div>
									<div class="col-sm-2">
										<img src="assets/verified/logo.png" style="height: 100px; width: 80px; text-align: right;" class="logo-icon" alt="logo icon">
									</div>
								</div>
								<div class="row" style="margin-top: 20px; margin-left: 10px;">
									<div class="col-sm-8">
										<div class="col-sm-12">
											<h2><?php echo $data->nama_lengkap ?></h2>
											<h5>Telah terdaftar resmi sebagai <span style="color: blue;"><?php echo strtoupper($data->level) ?></span> resmi Glowza.</h5>
										</div>
										<div class="col-sm-12" style="margin-top: 10px;">
											<table>
												<tr>
													<td><img src="assets/verified/place.png" class="logo-icon" alt="logo icon"></td>
													<td class="lead">
														<?php echo ($data->alamat == '') ?'-' : $data->alamat ?>
													</td>
												</tr>
												<tr>
													<td><img src="assets/verified/fb.png" class="logo-icon" alt="logo icon"></td>
													<td class="lead">
														<?php echo ($data->facebook == '') ?'-' : $data->facebook ?>
													</td>
												</tr>
												<tr>
													<td><img src="assets/verified/ig.png" class="logo-icon" alt="logo icon"></td>
													<td class="lead">
														<?php echo ($data->instagram == '') ?'-' : $data->instagram ?>
													</td>
												</tr>
												<tr>
													<td><img src="assets/verified/wa.png" class="logo-icon" alt="logo icon"></td>
													<td class="lead">
														<?php echo ($data->no_telp == '') ?'-' : $data->no_telp ?>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="col-sm-2">
										<center>
											<img src="image/user/<?php echo ($data->foto == '') ?'default.png' : $data->foto ?>" class="rounded-circle img-thumbnail mb-2" alt="Profil">
											<h5><?php echo $data->nama_lengkap ?></h5>
										</center>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>
		<div class="bg-white p-3 fixed-bottom border-top shadow">
			<div class="d-flex align-items-center justify-content-between flex-wrap">
				
				<p class="mb-0">Copyright PT. Glowza Cahaya Mulia © <?php echo date('Y') ?>. All right reserved.</p>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>