<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reward extends CI_Controller
{
    var $judul_page = 'Setting Reward';
    function __construct()
    {
        parent::__construct();
        $this->load->model('Reward_model');
        $this->load->library('form_validation');
    }

    public function klaim_reward()
    {
        $data = array(
            'judul_page' => "Klaim Reward",
            'konten' => 'reward/klaim_reward',
        );
        $this->load->view('v_index', $data);
    }

    public function approved($n, $id_klaim)
    {
        if ($n == 'y') {
            $this->db->where('id_klaim', $id_klaim);
            $this->db->update('klaim_reward', ['status'=>'approved', 'updated_at'=>get_waktu(), 'user_by'=>$this->session->userdata('id_user')]);

            $klaim = $this->db->get_where('klaim_reward', ['id_klaim'=>$id_klaim])->row();
            $reward = $this->db->get_where('reward', ['id_reward'=>$klaim->id_reward])->row();
            $this->db->insert('log_point', array(
                'id_member' => $klaim->id_member,
                'point_out' => $reward->poin_target,
                'ket' => 'Klaim '.$reward->judul,
                'created_at' => get_waktu()
            ));

            //kirim notifikasi
              $notif = array(
                   'judul' => 'Klaim Reward disetujui',
                   'keterangan' => 'Pengajuan klaim reward di setujui admin',
                   'level_from' => 'admin',
                   'user_from' => $this->session->userdata('id_user'),
                   'level_to' => 'user',
                   'user_to' => $klaim->id_member,
                   'link' => base_url().'app/klaim_reward',
                   'created_at' => get_waktu()
              );
              $this->db->insert('notifikasi', $notif);
            
            $this->session->set_flashdata('message', message('success','Klaim Reward berhasil diapproved'));
            redirect(site_url('reward/klaim_reward'));
            
        }
    }

    public function index()
    {
        $reward = $this->Reward_model->get_all();

        $data = array(
            'reward_data' => $reward,
            'judul_page' => $this->judul_page,
            'konten' => 'reward/reward_list',
        );
        $this->load->view('v_index', $data);
    }

    

    public function create() 
    {
        $data = array(
            'judul_page' => $this->judul_page,
            'konten' => 'reward/reward_form',
            'judul_form' => 'Tambah '.$this->judul_page,
            'button' => 'Simpan',
            'action' => site_url('reward/create_action'),
	    'id_reward' => set_value('id_reward'),
	    'judul' => set_value('judul'),
	    'deskripsi' => set_value('deskripsi'),
	    'poin_target' => set_value('poin_target'),
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
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'poin_target' => $this->input->post('poin_target',TRUE),
	    );

            $this->Reward_model->insert($data);
            $this->session->set_flashdata('message', message('success','Data berhasil disimpan'));
            redirect(site_url('reward'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Reward_model->get_by_id($id);

        if ($row) {
            $data = array(
                'judul_page' => $this->judul_page,
                'konten' => 'reward/reward_form',
                'judul_form' => 'Ubah '.$this->judul_page,
                'button' => 'Update',
                'action' => site_url('reward/update_action'),
		'id_reward' => set_value('id_reward', $row->id_reward),
		'judul' => set_value('judul', $row->judul),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'poin_target' => set_value('poin_target', $row->poin_target),
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('reward'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_reward', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'poin_target' => $this->input->post('poin_target',TRUE),
	    );

            $this->Reward_model->update($this->input->post('id_reward', TRUE), $data);
            $this->session->set_flashdata('message', message('success','Data berhasil diupdate'));
            redirect(site_url('reward'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Reward_model->get_by_id($id);

        if ($row) {
            $this->Reward_model->delete($id);
            $this->session->set_flashdata('message', message('success','Data berhasil dihapus'));
            redirect(site_url('reward'));
        } else {
            $this->session->set_flashdata('message', message('danger','Data tidak ditemukan'));
            redirect(site_url('reward'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('poin_target', 'poin target', 'trim|required');

	$this->form_validation->set_rules('id_reward', 'id_reward', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Reward.php */
/* Location: ./application/controllers/Reward.php */
/* Please DO NOT modify this information : */
/* Generated by Boy Kurniawan 2022-02-04 08:15:56 */
/* https://jualkoding.com */