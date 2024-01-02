<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_User extends CI_Controller {
    
     public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->library('form_validation');
      $this->load->model("user");
        
    }
    else
    {
    redirect('login', 'refresh');
    }
    }

	public function index()
	{
               
                $this->data['user'] = $this->user->show_user();
                $this->load->view('insert_user.php', $this->data);
	}
         public function show_user()
	{
               
                $this->data['user'] = $this->user->show_user();
		$this->load->view('show_user.php', $this->data);
	}



  function show_user_id($id) {

$data['single_user'] = $this->user->show_user_id($id);
$this->load->view('edit_user', $data);
}
function update_user_id() {
   $user_id = $this->input->post('user_id');
  
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');


if($this->form_validation->run()== FALSE){
  
    $this->show_user_id($user_id);
}else {
    
$data = array(
         
         
            'password' => $this->input->post('password'),
           
);
$this->user->update_user_id($user_id,$data);
$this->session->set_flashdata('category_success', 'Password Updated Successfully');
redirect("Hamd");
}   
}
function delete_user($user_id) {

$this->db->where(user_id,$user_id);
$this->db->delete('user'); 
$this->session->set_flashdata('category_success', 'User Deleted Successfully');
redirect("Add_User/show_user");
}            
}
