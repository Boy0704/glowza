<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

     public function index()
     {
          $this->load->view('login');
          
     }

     public function auth()
     {
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          if ($username == 'joko' and $password == '12345678') {
               $sess_data['username'] = "joko";
               $sess_data['level'] = "superadmin";
               $this->session->set_userdata($sess_data);
               redirect('app','refresh');
               
          } else {
               $this->session->set_flashdata('pesan', alert_biasa('Username dan passwor salah !','warning'));
               redirect("login");
          }
          
     }

     public function logout()
     {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login','refresh');
     }

}

/* End of file Login.php */
