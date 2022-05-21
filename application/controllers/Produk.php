<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produk extends CI_Controller
{
    var $judul_page = 'Data Produk';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $produk = $this->Produk_model->get_all();

        $data = array(
            'produk_data' => $produk,
            'judul_page' => $this->judul_page,
            'konten' => 'produk/produk_list',
        );
        $this->load->view('v_index', $data);
    }

    

    public function create() 
    {
        $data = array(
            'judul_page' => $this->judul_page,
            'konten' => 'produk/produk_form',
            'judul_form' => 'Tambah '.$this->judul_page,
            'button' => 'Simpan',
            'action' => site_url('produk/create_action'),
        'id_produk' => set_value('id_produk'),
        'foto' => set_value('foto'),
	    'kode_produk' => set_value('kode_produk'),
	    'nama_produk' => set_value('nama_produk'),
        'deskripsi' => set_value('deskripsi'),
        'id_paket' => set_value('id_paket'),
        'cara_pakai' => set_value('cara_pakai'),
	    'komposisi' => set_value('komposisi'),
	    'harga_beli' => set_value('harga_beli'),
	    'harga_jual' => set_value('harga_jual'),
	    'qty' => set_value('qty'),
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

            $img = upload_gambar_biasa('produk', 'image/produk/', 'jpg|png|jpeg', 10000, 'foto');

            $data = array(
        'kode_produk' => $this->input->post('kode_produk',TRUE),
		'nama_produk' => $this->input->post('nama_produk',TRUE),
        'deskripsi' => $this->input->post('deskripsi',TRUE),
        'id_paket' => $this->input->post('id_paket',TRUE),
        'cara_pakai' => $this->input->post('cara_pakai',TRUE),
		'komposisi' => $this->input->post('komposisi',TRUE),
		'harga_beli' => $this->input->post('harga_beli',TRUE),
		'harga_jual' => $this->input->post('harga_jual',TRUE),
		'qty' => $this->input->post('qty',TRUE),
        'foto' => $img
	    );

            $this->Produk_model->insert($data);
            $this->session->set_flashdata('message', message('success','Data berhasil disimpan'));
            redirect(site_url('produk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Produk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => $this->judul_page,
                'konten' => 'produk/produk_form',
                'judul_form' => 'Ubah '.$this->judul_page,
                'button' => 'Update',
                'action' => site_url('produk/update_action'),
        'id_produk' => set_value('id_produk', $row->id_produk),
        'foto' => set_value('foto', $row->foto),
		'kode_produk' => set_value('kode_produk', $row->kode_produk),
		'nama_produk' => set_value('nama_produk', $row->nama_produk),
        'deskripsi' => set_value('deskripsi', $row->deskripsi),
        'id_paket' => set_value('id_paket', $row->id_paket),
        'cara_pakai' => set_value('cara_pakai', $row->cara_pakai),
		'komposisi' => set_value('komposisi', $row->komposisi),
		'harga_beli' => set_value('harga_beli', $row->harga_beli),
		'harga_jual' => set_value('harga_jual', $row->harga_jual),
		'qty' => set_value('qty', $row->qty),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('produk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_produk', TRUE));
        } else {
            $data = array(
        'kode_produk' => $this->input->post('kode_produk',TRUE),
		'nama_produk' => $this->input->post('nama_produk',TRUE),
        'deskripsi' => $this->input->post('deskripsi',TRUE),
		'id_paket' => $this->input->post('id_paket',TRUE),
        'cara_pakai' => $this->input->post('cara_pakai',TRUE),
        'komposisi' => $this->input->post('komposisi',TRUE),
		'harga_beli' => $this->input->post('harga_beli',TRUE),
		'harga_jual' => $this->input->post('harga_jual',TRUE),
		'qty' => $this->input->post('qty',TRUE),
        'foto' => $retVal = ($_FILES['foto']['name'] == '') ? $_POST['foto_old'] : upload_gambar_biasa('produk', 'image/produk/', 'jpeg|png|jpg|gif', 10000, 'foto'),
	    );

            $this->Produk_model->update($this->input->post('id_produk', TRUE), $data);
            $this->session->set_flashdata('message', message('success','Data berhasil diupdate'));
            redirect(site_url('produk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Produk_model->get_by_id($id);

        if ($row) {
            $this->Produk_model->delete($id);
            $this->session->set_flashdata('message', message('success','Data berhasil dihapus'));
            redirect(site_url('produk'));
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('produk'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('kode_produk', 'kode produk', 'trim|required');
	$this->form_validation->set_rules('nama_produk', 'nama produk', 'trim|required');
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
    $this->form_validation->set_rules('id_paket', 'Paket', 'trim|required');
    $this->form_validation->set_rules('cara_pakai', 'Cara Penggunaan', 'trim|required');
	$this->form_validation->set_rules('komposisi', 'Kandungan Bahan', 'trim|required');
	$this->form_validation->set_rules('harga_beli', 'harga beli', 'trim|required');
	$this->form_validation->set_rules('harga_jual', 'harga jual', 'trim|required');
	$this->form_validation->set_rules('qty', 'qty', 'trim|required');

	$this->form_validation->set_rules('id_produk', 'id_produk', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2022-02-01 17:30:54 */
/* https://jualkoding.com */