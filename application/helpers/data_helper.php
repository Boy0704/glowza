<?php 

function point_saya($id_member)
{
	$CI =& get_instance();
	$sql = $CI->db->query("SELECT ( sum(point_in) - sum(point_out) ) as total FROM log_point WHERE id_member='$id_member' ");
	$total = $sql->row()->total;
	if ($total == '') {
		return 0;
	} else {
		return $total;
	}
}

function upload_gambar_biasa1($nama_gambar, $lokasi_gambar, $tipe_gambar, $ukuran_gambar, $name_file_form)
{
    $CI =& get_instance();
    $nmfile = $nama_gambar."_".time();
    $config['upload_path'] = './'.$lokasi_gambar;
    $config['allowed_types'] = $tipe_gambar;
    $config['max_size'] = $ukuran_gambar;
    $config['file_name'] = $nmfile;
    // load library upload
    $CI->load->library('upload', $config);
    $CI->upload->initialize($config);
    // upload gambar 1
    if ( ! $CI->upload->do_upload($name_file_form)) {
    	return $CI->upload->display_errors();
    } else {
	    $result1 = $CI->upload->data();
	    $result = array('gambar'=>$result1);
	    $dfile = $result['gambar']['file_name'];
	    
	    return $dfile;
	}	
}

function upload_gambar_biasa($nama_gambar, $lokasi_gambar, $tipe_gambar, $ukuran_gambar, $name_file_form)
{
    $CI =& get_instance();
    $nmfile = $nama_gambar."_".time();
    $config['upload_path'] = './'.$lokasi_gambar;
    $config['allowed_types'] = $tipe_gambar;
    $config['max_size'] = $ukuran_gambar;
    $config['file_name'] = $nmfile;
    // load library upload
    $CI->load->library('upload', $config);
    $CI->upload->initialize($config);
    // upload gambar 1
    if ( ! $CI->upload->do_upload($name_file_form)) {
    	return $CI->upload->display_errors();
    } else {
	    $result1 = $CI->upload->data();
	    $result = array('gambar'=>$result1);
	    $dfile = $result['gambar']['file_name'];
	    
	    return $dfile;
	}	
}

function upload_gambar_biasa_setname($nama_gambar, $lokasi_gambar, $tipe_gambar, $ukuran_gambar, $name_file_form)
{
    $CI =& get_instance();
    $nmfile = $nama_gambar;
    $config['upload_path'] = './'.$lokasi_gambar;
    $config['allowed_types'] = $tipe_gambar;
    $config['max_size'] = $ukuran_gambar;
    $config['file_name'] = $nmfile;
    $config['overwrite'] = TRUE;
    // load library upload
    $CI->load->library('upload', $config);
    // upload gambar 1
    if ( ! $CI->upload->do_upload($name_file_form)) {
    	return $CI->upload->display_errors();
    } else {
	    $result1 = $CI->upload->data();
	    $result = array('gambar'=>$result1);
	    $dfile = $result['gambar']['file_name'];
	    
	    return $dfile;
	}	
}

function get_waktu()
{
	date_default_timezone_set('Asia/Jakarta');
	return date('Y-m-d H:i:s');
}

function get_data($tabel,$primary_key,$id,$select)
{
	$CI =& get_instance();
	$data = $CI->db->query("SELECT $select FROM $tabel where $primary_key='$id' ");
	if ($data->num_rows() > 0) {
		$data = $data->row_array();
		return $data[$select];
	} else {
		return '';
	}
	
}

function kode_member()
{
	$CI =& get_instance();
	$a = "GLOWZA";
	$b = date("y");
	$c = date("m");
	$d = date("d");
	
	$cek = $CI->db->get('member');
	if ($cek->num_rows() > 0) {
		$CI->db->order_by('id_member', 'desc');
		$kode_member = $CI->db->get('member')->row()->kode_member;
		$urutan = (int) substr($kode_member, 12,6);
		$urutan++;

		$huruf = "$a$b$c$d";
		$kode = $huruf. sprintf("%06s", $urutan);
	} else {
		$urutan = 0;
		$urutan++;

		$huruf = "$a$b$c$d";
		$kode = $huruf. sprintf("%06s", $urutan);

	}
	
	return $kode;
}

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

function log_r($string = null, $var_dump = false)
{
	if ($var_dump) {
		var_dump($string);
	} else {
		echo "<pre>";
		print_r($string);
	}
	exit;
}

function log_data($string = null, $var_dump = false)
{
	if ($var_dump) {
		var_dump($string);
	} else {
		echo "<pre>";
		print_r($string);
	}
	// exit;
}