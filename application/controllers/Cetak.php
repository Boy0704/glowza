<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function jenis($jenis)
	{
		if ($this->session->userdata('level') == '') {
		   redirect('login');
		}
	    $data = array(
		   'judul_page' => "Cetak Laporan ".ucfirst($jenis),
		   'konten' => 'cetak/view',
		);
		$data['jenis'] = $jenis;
		$this->load->view('v_index', $data);
		

	}

}

/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */