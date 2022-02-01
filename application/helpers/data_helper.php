<?php 

function message($type, $pesan)
{
	$text = 'Kosong';
	if ($type == 'success') {
		$text = '
			<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">Success Alerts</h6>
                        <div class="text-white">'.$pesan.'</div>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
		';	
	} elseif($type == 'danger') {
		$text = '
			<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
				<div class="d-flex align-items-center">
					<div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
					</div>
					<div class="ms-3">
						<h6 class="mb-0 text-white">Danger Alerts</h6>
						<div class="text-white">'.$pesan.'</div>
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		';	
	} elseif($type == 'info'){
		$text = '
			<div class="alert alert-info border-0 bg-info alert-dismissible fade show py-2">
				<div class="d-flex align-items-center">
					<div class="font-35 text-dark"><i class="bx bx-info-square"></i>
					</div>
					<div class="ms-3">
						<h6 class="mb-0 text-dark">Info Alerts</h6>
						<div class="text-dark">'.$pesan.'</div>
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		';
	}
	return $text;
}

function alert_biasa($pesan,$type)
{
	return 'swal("'.$pesan.'", "You clicked the button!", "'.$type.'");';
}