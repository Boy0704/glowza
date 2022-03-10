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

	public function aksi_cetak($jenis)
	{
		$data['tgl1'] = $this->input->get('tgl1');
		$data['tgl2'] = $this->input->get('tgl2');
		if ($jenis == 'pengeluaran') {
			$this->load->view('cetak/kas_keluar', $data);
		} elseif($jenis == 'pendaftaran') {
			$this->load->view('cetak/pendaftaran', $data);
		}
	}

	public function stok()
	{
		$this->load->view('cetak/stok');
	}

}

/* End of file Cetak.php */
/* Location: ./application/controllers/Cetak.php */