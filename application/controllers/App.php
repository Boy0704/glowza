<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {


     public function index()
     {
          if ($this->session->userdata('level') == '') {
               redirect('login');
           }
          $data = array(
               'judul_page' => "Dashboard",
               'konten' => 'home/view',
           );
           $this->load->view('v_index', $data);
     }

     public function dev()
     {
          $this->session->set_flashdata('pesan', alert_biasa('Sedang dalam pengembangan','info'));
          redirect("app");
     }

}

/* End of file App.php */
