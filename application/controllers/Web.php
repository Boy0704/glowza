<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

     public function index()
     {
          $this->load->view('web/index');
     }

}

/* End of file Web.php */