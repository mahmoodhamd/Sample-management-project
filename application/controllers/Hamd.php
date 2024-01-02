<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hamd extends CI_Controller {
public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     
     $this->load->model("staff");
        
    }
    else
    {
    redirect('login', 'refresh');
    }
    }
function index() {

         
             
              ;
                $this->load->view('hamd');

}


}
