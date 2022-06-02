<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setting extends CI_Controller
{
    var $judul_page = 'setting_list';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $setting = $this->Setting_model->get_all();

        $data = array(
            'setting_data' => $setting,
            'judul_page' => $this->judul_page,
            'konten' => 'setting/setting_list',
        );
        $this->load->view('v_index', $data);
    }

    

    public function create() 
    {
        $data = array(
            'judul_page' => $this->judul_page,
            'konten' => 'setting/setting_form',
            'judul_form' => 'Tambah '.$this->judul_page,
            'button' => 'Simpan',
            'action' => site_url('setting/create_action'),
	    'id_setting' => set_value('id_setting'),
	    'brand' => set_value('brand'),
	    'foto' => set_value('foto'),
	    'deskripsi' => set_value('deskripsi'),
	    'alamat' => set_value('alamat'),
	    'email' => set_value('email'),
        'no_telp' => set_value('no_telp'),
	    'jam_kerja' => set_value('jam_kerja'),
	    'fb' => set_value('fb'),
	    'ig' => set_value('ig'),
	    'youtube' => set_value('youtube'),
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
		'brand' => $this->input->post('brand',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'email' => $this->input->post('email',TRUE),
        'no_telp' => $this->input->post('no_telp',TRUE),
		'jam_kerja' => $this->input->post('jam_kerja',TRUE),
		'fb' => $this->input->post('fb',TRUE),
		'ig' => $this->input->post('ig',TRUE),
		'youtube' => $this->input->post('youtube',TRUE),
	    );

            $this->Setting_model->insert($data);
            $this->session->set_flashdata('message', message('success','Data berhasil disimpan'));
            redirect(site_url('setting'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Setting_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => $this->judul_page,
                'konten' => 'setting/setting_form',
                'judul_form' => 'Ubah '.$this->judul_page,
                'button' => 'Update',
                'action' => site_url('setting/update_action'),
		'id_setting' => set_value('id_setting', $row->id_setting),
		'brand' => set_value('brand', $row->brand),
		'foto' => set_value('foto', $row->foto),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'alamat' => set_value('alamat', $row->alamat),
		'email' => set_value('email', $row->email),
        'no_telp' => set_value('no_telp', $row->no_telp),
		'jam_kerja' => set_value('jam_kerja', $row->jam_kerja),
		'fb' => set_value('fb', $row->fb),
		'ig' => set_value('ig', $row->ig),
		'youtube' => set_value('youtube', $row->youtube),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('setting'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_setting', TRUE));
        } else {
            $data = array(
		'brand' => $this->input->post('brand',TRUE),
		'foto' => $retVal = ($_FILES['foto']['name'] == '') ? $_POST['foto_old'] : upload_gambar_biasa_setname('about', 'image/', 'jpeg|png|jpg|gif', 10000, 'foto'),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'email' => $this->input->post('email',TRUE),
        'no_telp' => $this->input->post('no_telp',TRUE),
		'jam_kerja' => $this->input->post('jam_kerja',TRUE),
		'fb' => $this->input->post('fb',TRUE),
		'ig' => $this->input->post('ig',TRUE),
		'youtube' => $this->input->post('youtube',TRUE),
	    );

            $this->Setting_model->update($this->input->post('id_setting', TRUE), $data);
            $this->session->set_flashdata('message', message('success','Data berhasil diupdate'));
            redirect(site_url('setting'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Setting_model->get_by_id($id);

        if ($row) {
            $this->Setting_model->delete($id);
            $this->session->set_flashdata('message', message('success','Data berhasil dihapus'));
            redirect(site_url('setting'));
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('setting'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('brand', 'brand', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('no_telp', 'No Telp', 'trim|required');
	$this->form_validation->set_rules('jam_kerja', 'jam kerja', 'trim|required');
	$this->form_validation->set_rules('fb', 'fb', 'trim|required');
	$this->form_validation->set_rules('ig', 'ig', 'trim|required');
	$this->form_validation->set_rules('youtube', 'youtube', 'trim|required');

	$this->form_validation->set_rules('id_setting', 'id_setting', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2022-05-20 09:14:14 */
/* https://jualkoding.com */