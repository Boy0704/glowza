<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

     public function index()
     {
          $this->load->library('user_agent');
          $browser = $this->agent->browser().' '.$this->agent->version();
          $ip = $this->input->ip_address();
          $this->db->where('ip_address', $ip);
          $this->db->where('browser', $browser);
          $cek_log = $this->db->get('pengunjung');
          if ($cek_log->num_rows() == 0) {
               $this->db->insert('pengunjung', array(
                    'ip_address' => $ip,
                    'browser' => $browser,
                    'tanggal_kunjung' => get_waktu()
               ));
          }

          $this->load->view('web/home');
     }

     public function subs()
     {
          if ($_POST) {
               $this->db->insert('subscribe', array(
                    'email' => $_POST['email'],
                    'created_at' => get_waktu()
               ));
               $this->session->set_flashdata('pesan', alert_biasa('Terima kasih sudah mengikuti info dari kami !','success'));
               redirect("web");
          }
     }

     public function about()
     {
          $this->load->view('web/about_us');
     }

     public function detail_produk($id)
     {
          $this->load->view('web/detail_produk');
     }

     public function klinik()
     {
          $this->load->view('web/clinic');
     }

     public function seller()
     {
          $this->load->view('web/seller');
     }

}

/* End of file Web.php */
