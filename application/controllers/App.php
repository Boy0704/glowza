<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
          $this->load->library('form_validation');
     }

     public function index()
     {
          if ($this->session->userdata('level') == '') {
               redirect('login');
          }
          $level = $this->session->userdata('level');
          if ($level == 'admin' || $level == 'superadmin') {
               $konten = 'home/view';
          } else {
               $konten = 'home/home_user';
          }

          $data = array(
               'judul_page' => "Dashboard",
               'konten' => $konten,
          );
          $this->load->view('v_index', $data);
     }

     public function agen($kode_member_agen)
     {
          $this->load->view('agent');
     }

     public function agen_old($kode_member_agen)
     {
          if ($_POST) {
               $kode_member = kode_member();
                  $this->_rules();

                  if ($this->form_validation->run() == FALSE) {
                      $this->pendaftaran();
                  } else {

                         $foto = upload_gambar_biasa('user', 'image/user/', 'jpg|png|jpeg', 10000, 'foto');
                    $foto_identitas = upload_gambar_biasa('identitas', 'image/ktp/', 'jpg|png|jpeg', 10000, 'foto_indentitas');

                      $data = array(
                    'kode_member' => $kode_member,
                    'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
                    'foto' => $foto,
                    'foto_identitas' => $foto_identitas,
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
                    'upline' => get_data('member','kode_member',$this->uri->segment(3),'id_member'),
                    'level' => $this->input->post('level',TRUE),
                    'created_at' => get_waktu(),
                   );
                      $this->load->model('Member_model');
                      $this->Member_model->insert($data);
                      $this->qrcode($kode_member);
                      $this->session->set_flashdata('pesan', alert_biasa('Pendaftaran Berhasil','success'));
                         redirect("login");
                    }
          } else {
               $this->load->library('form_validation');
             $data = array(
                 'judul_page' => 'Pendaftaran',
                 'konten' => 'member/member_form',
                 'judul_form' => 'Tambah '.'Pendaftaran',
                 'button' => 'Simpan',
                 'action' => site_url('app/simpan_pendaftaran'),
              'id_member' => set_value('id_member'),
              'kode_member' => kode_member(),
              'nama_lengkap' => set_value('nama_lengkap'),
              'foto' => set_value('foto'),
              'foto_identitas' => set_value('foto_identitas'),
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
             $this->load->view('referal', $data);
          }
     }


     public function baca_notifikasi($id_notifikasi)
     {
          $link = $this->input->get('link');
          $this->db->where('id_notifikasi', $id_notifikasi);
          $this->db->update('notifikasi', ['dibaca'=>'y', 'user_by'=>$this->session->userdata('id_user'), 'updated_at' => get_waktu() ]);
          redirect($link,'refresh');
     }

     public function statistik_pengunjung()
     {
          if ($this->session->userdata('level') == '') {
               redirect('login');
          }
          $data = array(
               'judul_page' => "Statistik Pengunjung",
               'konten' => 'pengunjung/view',
          );
          $this->load->view('v_index', $data);
     }

     public function klaim_reward()
     {
          if ($this->session->userdata('level') == '') {
               redirect('login');
          }
          $data = array(
               'judul_page' => "Klaim Reward",
               'konten' => 'user_member/klaim_reward',
          );
          $this->load->view('v_index', $data);
     }

     public function ajukan_klaim($id_member,$id_reward)
     {
          $this->db->insert('klaim_reward', array(
               'id_member' => $id_member,
               'id_reward' => $id_reward,
               'created_at' => get_waktu()
          ));
          //kirim notifikasi
          $notif = array(
               'judul' => 'Klaim Reward',
               'keterangan' => 'Pengajuan klaim reward oleh ('.get_data('member','id_member',$id_member,'nama_lengkap').')',
               'level_from' => 'user',
               'user_from' => $id_member,
               'level_to' => 'admin',
               'user_to' => 0,
               'link' => base_url().'reward/klaim_reward',
               'created_at' => get_waktu()
          );
          $this->db->insert('notifikasi', $notif);

          $this->session->set_flashdata('pesan', alert_biasa('Berhasil di ajukan','success'));
          redirect("app");
     }

     public function log_point()
     {
          if ($this->session->userdata('level') == '') {
               redirect('login');
          }
          $data = array(
               'judul_page' => "History Point",
               'konten' => 'user_member/log_point',
          );
          $this->load->view('v_index', $data);
     }

     public function transfer_point()
     {
          if ($this->session->userdata('level') == '') {
               redirect('login');
          }
          if ($_POST) {

               //cek kode_member 
               $kode_member = $this->input->post('kode_member');
               $this->db->where('kode_member', $kode_member);
               $cek = $this->db->get('member');
               if ($cek->num_rows() > 0) {
                    $id_member = $this->session->userdata('id_user');
                    $this->db->insert('log_point', array(
                         'id_member' => $id_member,
                         'point_out' => $this->input->post('qty'),
                         'ket' => 'Tranfer Point ke '.$kode_member,
                         'created_at' => get_waktu()
                    ));
               } else {
                    $this->session->set_flashdata('pesan', alert_biasa('Kode Member tidak di temukan','error'));
                    redirect("app/transfer_point");
               }

               
          } else {
               $data = array(
                    'judul_page' => "Transfer Point",
                    'konten' => 'user_member/transfer_point',
               );
               $this->load->view('v_index', $data);
          }
     }

     public function pendaftaran() 
    {
          $level = $this->session->userdata('level');
          if ($level == 'Member') {
               // code...
          }

          $this->load->library('form_validation');
        $data = array(
            'judul_page' => 'Pendaftaran',
            'konten' => 'member/member_form',
            'judul_form' => 'Tambah '.'Pendaftaran',
            'button' => 'Simpan',
            'action' => site_url('app/simpan_pendaftaran'),
         'id_member' => set_value('id_member'),
         'kode_member' => kode_member(),
         'nama_lengkap' => set_value('nama_lengkap'),
         'foto' => set_value('foto'),
         'foto_identitas' => set_value('foto_identitas'),
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
    
    public function simpan_pendaftaran() 
    {
          $kode_member = kode_member();
               $foto = upload_gambar_biasa('user', 'image/user/', 'jpg|png|jpeg', 10000, 'foto');
          $foto_identitas = upload_gambar_biasa1('identitas', 'image/ktp/', 'jpg|png|jpeg', 10000, 'foto_identitas');

            $data = array(
          'kode_member' => $kode_member,
          'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
          'foto' => $foto,
          'foto_identitas' => $foto_identitas,
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
          'upline' => $this->session->userdata('id_user'),
          'level' => $this->input->post('level',TRUE),
          'created_at' => get_waktu(),
         );
            $this->load->model('Member_model');
            $this->Member_model->insert($data);
            $this->qrcode($kode_member);
            $this->session->set_flashdata('pesan', alert_biasa('Pendaftaran Berhasil','success'));
               redirect("app/pendaftaran");
        
    }

     public function profil()
     {    
          $this->load->library('form_validation');
          if ($this->session->userdata('level') == '') {
               redirect('login');
          }
          $data = array(
               'judul_page' => "Update Profil",
               'konten' => 'user_member/profil',
          );
          $this->load->view('v_index', $data);
     }

     public function update_foto($id_member)
     {
          $foto_identitas = "";
          $foto = upload_gambar_biasa('user', 'image/user/', 'jpg|png|jpeg', 10000, 'foto');
          //upload ktp
          $nmfile = "identitas_".time();
          $config['upload_path'] = './image/ktp/';
          $config['allowed_types'] = 'jpg|png|jpeg';
          $config['max_size'] = 10000;
          $config['file_name'] = $nmfile;
          // load library upload
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          // upload gambar 1
          if ( ! $this->upload->do_upload('foto_identitas')) {
               ?>
               <script type="text/javascript">
                    alert("<?php echo $this->upload->display_errors() ?>");
                    window.location="<?php echo base_url() ?>app/profil";
               </script>
               <?php
          } else {
              $result1 = $this->upload->data();
              $result = array('gambar'=>$result1);
              $dfile = $result['gambar']['file_name'];
              
              $foto_identitas = $dfile;
          }    
          

          $this->db->where('id_member', $id_member);
          $this->db->update('member', array(
               'foto' => $foto,
               'foto_identitas' => $foto_identitas
          ));
          $this->session->set_flashdata('pesan', alert_biasa('Foto berhasil diupdate','success'));
          redirect("app/profil");
     }

     public function profil_admin($id_user)
     {
          if ($this->session->userdata('level') == '') {
               redirect('login');
          }
          if ($_POST) {
               $this->db->where('id_user', $id_user);
               $this->db->update('app_user', array(
                    'password' => $retVal = ($this->input->post('password') == '') ? $_POST['password_old'] : md5($this->input->post('password',TRUE)),
                    'foto' => $retVal = ($_FILES['foto']['name'] == '') ? $_POST['foto_old'] : upload_gambar_biasa('user', 'image/user/', 'jpeg|png|jpg|gif', 10000, 'foto')
               ));
               $this->session->set_flashdata('pesan', alert_biasa('Profil Berhasil diubah, silahkan login kembali','success'));
               redirect("login");
          } else {
               $data = array(
                    'judul_page' => "Update Profil",
                    'konten' => 'profil',
               );
               $this->load->view('v_index', $data);
          }
     }

     public function update_profil($id_member) 
     {
        // $this->_rules();

        // if ($this->form_validation->run() == FALSE) {
        //     $this->profil($id_member);
        // } else {
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
          $this->load->model('Member_model');
            $this->Member_model->update($id_member, $data);
            $this->session->set_flashdata('pesan', alert_biasa('Profil Berhasil diubah','success'));
               redirect("app/profil");
        // }
     }

     public function dev()
     {
          $this->session->set_flashdata('pesan', alert_biasa('Sedang dalam pengembangan','info'));
          redirect("app");
     }

     public function verifikasi($kode_member=null)
     {
          if ($kode_member == null) {
               redirect("web");
          } else {
               $this->load->view('verified');
          }
     }

     public function qrcode($kode_member=null)
     {
          if ($kode_member == null) {
               log_r("ada kesalahan !");
          }
          $this->load->library('ciqrcode');
          $params['data'] = base_url().'app/verifikasi/'.$kode_member;
          $params['level'] = 'H';
          $params['size'] = 10;
          $params['savename'] = FCPATH.'image/qrcode/'.$kode_member.'.png';
          $this->ciqrcode->generate($params);
     }

     public function card($download=null)
     {
          $data['download'] = $download;
          $this->load->view('card',$data);
     }

     public function card_pdf()
     {
          
          ob_start();

          $data['download'] = null;
          $this->load->view('card',$data);
          $html = ob_get_contents();
          ob_end_clean();
          // include APPPATH . 'third_party/html2_pdf_lib/html2pdf.class.php';

          // $html2pdf = new HTML2PDF('P', 'A4', 'en');
          // //$html2pdf->setModeDebug();
          // $html2pdf->setDefaultFont('courier');
          // $html2pdf->writeHTML($html);
          // $html2pdf->Output('image/card/temp.pdf','F');

          // require APPPATH . 'third_party/html2pdf/autoload.php';
          // $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
          // $pdf->WriteHTML($html);
          // $pdf->Output('Data Siswa.pdf', 'D');

          //  $this->load->library('mpdf_l');
          // $mpdf                           = $this->mpdf_l->load();
          // $mpdf->allow_charset_conversion = true;  // Set by default to TRUE
          // $mpdf->charset_in               = 'UTF-8';
          // $mpdf->autoLangToFont           = true;
          // $mpdf->AddPage('L'); // P - L
          // // $data['kode_tindakan'] = $kode_tindakan;
          // // $html = $this->load->view('cetak/tindakan_lap',$data, TRUE);
          

          // $mpdf->WriteHTML($html);

          // $output = 'coba.pdf';
          // $mpdf->Output("$output", 'I');
          
     }

     public function card_png()
     {
          if ($_POST) {
               define('UPLOAD_DIR', 'image/card/');  
               $img = $_POST['imgBase64'];
               $kode_member = $this->input->post('kodeMember');  
               $img = str_replace('data:image/png;base64,', '', $img);  
               $img = str_replace(' ', '+', $img);  
               $data = base64_decode($img);  
               $file = UPLOAD_DIR . $kode_member . '.png';  
               $success = file_put_contents($file, $data);  
               print $success ? $file : 'Terjadi error, mohon cek kembali';
          } else {
               $this->load->view('card_png');
          }
          
     }

     public function download_card_png($kode_member)
     {
          $this->load->helper('download');
          force_download('image/card/'.$kode_member.'.png',NULL);
     }    

     public function _rules() 
     {

     }



}

/* End of file App.php */
