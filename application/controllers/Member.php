<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller
{
    var $judul_page = 'Data Member';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->library('form_validation');
    }

    public function get_kabupaten()
    {
	    $id  = $this->input->post('id');
	    $this->db->where('province_id', $id);
	    foreach ($this->db->get('regencies')->result() as $rw) {
		    echo "<option value='$rw->id'>$rw->name<option/>";
	    }
	    
    }

    public function detail_member($id_member)
    {
	    	$nama = get_data("member",'id_member',$id_member,'nama_lengkap');
		$data = array(
			'judul_page' => $nama,
			'konten' => 'member/detail_member',
		);
		$this->load->view('v_index', $data);
    }

    public function index()
    {
        $member = $this->Member_model->get_all();

        $data = array(
            'member_data' => $member,
            'judul_page' => $this->judul_page,
            'konten' => 'member/member_list',
        );
        $this->load->view('v_index', $data);
    }

    

    public function create() 
    {
        $data = array(
            'judul_page' => $this->judul_page,
            'konten' => 'member/member_form',
            'judul_form' => 'Tambah '.$this->judul_page,
            'button' => 'Simpan',
            'action' => site_url('member/create_action'),
	    'id_member' => set_value('id_member'),
	    'kode_member' => kode_member(),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'email' => set_value('email'),
	    'no_telp' => set_value('no_telp'),
	    'instagram' => set_value('instagram'),
	    'facebook' => set_value('facebook'),
	    'shopee' => set_value('shopee'),
	    'tokopedia' => set_value('tokopedia'),
	    'bukalapak' => set_value('bukalapak'),
	    'lazada' => set_value('lazada'),
	    'jenis_identitas' => set_value('jenis_identitas'),
	    'no_identitas' => set_value('no_identitas'),
	    'nama_bank' => set_value('nama_bank'),
	    'no_rekening' => set_value('no_rekening'),
	    'atas_nama' => set_value('atas_nama'),
	    'alamat' => set_value('alamat'),
	    'id_kabupaten' => set_value('id_kabupaten'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'level' => set_value('level'),
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_member' => $this->input->post('kode_member',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'instagram' => $this->input->post('instagram',TRUE),
		'facebook' => $this->input->post('facebook',TRUE),
		'shopee' => $this->input->post('shopee',TRUE),
		'tokopedia' => $this->input->post('tokopedia',TRUE),
		'bukalapak' => $this->input->post('bukalapak',TRUE),
		'lazada' => $this->input->post('lazada',TRUE),
		'jenis_identitas' => $this->input->post('jenis_identitas',TRUE),
		'no_identitas' => $this->input->post('no_identitas',TRUE),
		'nama_bank' => $this->input->post('nama_bank',TRUE),
		'no_rekening' => $this->input->post('no_rekening',TRUE),
		'atas_nama' => $this->input->post('atas_nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'id_kabupaten' => $this->input->post('id_kabupaten',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
		'created_at' => get_waktu(),
	    );

            $this->Member_model->insert($data);
            $this->session->set_flashdata('message', message('success','Data berhasil disimpan'));
            redirect(site_url('member'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Member_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => $this->judul_page,
                'konten' => 'member/member_form',
                'judul_form' => 'Ubah '.$this->judul_page,
                'button' => 'Update',
                'action' => site_url('member/update_action'),
		'id_member' => set_value('id_member', $row->id_member),
		'kode_member' => set_value('kode_member', $row->kode_member),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'email' => set_value('email', $row->email),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'instagram' => set_value('instagram', $row->instagram),
		'facebook' => set_value('facebook', $row->facebook),
		'shopee' => set_value('shopee', $row->shopee),
		'tokopedia' => set_value('tokopedia', $row->tokopedia),
		'bukalapak' => set_value('bukalapak', $row->bukalapak),
		'lazada' => set_value('lazada', $row->lazada),
		'jenis_identitas' => set_value('jenis_identitas', $row->jenis_identitas),
		'no_identitas' => set_value('no_identitas', $row->no_identitas),
		'nama_bank' => set_value('nama_bank', $row->nama_bank),
		'no_rekening' => set_value('no_rekening', $row->no_rekening),
		'atas_nama' => set_value('atas_nama', $row->atas_nama),
		'alamat' => set_value('alamat', $row->alamat),
		'id_kabupaten' => set_value('id_kabupaten', $row->id_kabupaten),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'level' => set_value('level', $row->level),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('member'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_member', TRUE));
        } else {
            $data = array(
		'kode_member' => $this->input->post('kode_member',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'instagram' => $this->input->post('instagram',TRUE),
		'facebook' => $this->input->post('facebook',TRUE),
		'shopee' => $this->input->post('shopee',TRUE),
		'tokopedia' => $this->input->post('tokopedia',TRUE),
		'bukalapak' => $this->input->post('bukalapak',TRUE),
		'lazada' => $this->input->post('lazada',TRUE),
		'jenis_identitas' => $this->input->post('jenis_identitas',TRUE),
		'no_identitas' => $this->input->post('no_identitas',TRUE),
		'nama_bank' => $this->input->post('nama_bank',TRUE),
		'no_rekening' => $this->input->post('no_rekening',TRUE),
		'atas_nama' => $this->input->post('atas_nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'id_kabupaten' => $this->input->post('id_kabupaten',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'level' => $this->input->post('level',TRUE),
		'updated_at' => get_waktu(),
	    );

            $this->Member_model->update($this->input->post('id_member', TRUE), $data);
            $this->session->set_flashdata('message', message('success','Data berhasil diupdate'));
            redirect(site_url('member'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Member_model->get_by_id($id);

        if ($row) {
            $this->Member_model->delete($id);
            $this->session->set_flashdata('message', message('success','Data berhasil dihapus'));
            redirect(site_url('member'));
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('member'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_member', 'kode member', 'trim|required');
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	// $this->form_validation->set_rules('instagram', 'instagram', 'trim|required');
	// $this->form_validation->set_rules('facebook', 'facebook', 'trim|required');
	// $this->form_validation->set_rules('shopee', 'shopee', 'trim|required');
	// $this->form_validation->set_rules('tokopedia', 'tokopedia', 'trim|required');
	// $this->form_validation->set_rules('bukalapak', 'bukalapak', 'trim|required');
	// $this->form_validation->set_rules('lazada', 'lazada', 'trim|required');
	$this->form_validation->set_rules('jenis_identitas', 'jenis identitas', 'trim|required');
	$this->form_validation->set_rules('no_identitas', 'no identitas', 'trim|required');
	$this->form_validation->set_rules('nama_bank', 'nama bank', 'trim|required');
	$this->form_validation->set_rules('no_rekening', 'no rekening', 'trim|required');
	$this->form_validation->set_rules('atas_nama', 'atas nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('id_kabupaten', 'id kabupaten', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');

	$this->form_validation->set_rules('id_member', 'id_member', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2022-02-04 08:39:21 */
/* https://jualkoding.com */