<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Driver extends CI_Controller {
    
     public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->library('form_validation');
      $this->load->model("staff");
        
    }
    else
    {
    redirect('login', 'refresh');
    }
    }

	public function index()
	{
    
     
		$this->load->view('insert_driver');
	}
        
    public function show_driver()
	{
               
    $this->data['driver'] = $this->staff->show_driver();
		$this->load->view('show_driver', $this->data);
	}
        
        
    function show_driver_id_for_documents ($id) {

$data['single_driver'] = $this->staff->show_driver_id($id);
$this->data['driver_documents'] = $this->staff->show_driver_documents($id);
$this->data['user'] = $this->staff->show_user();
$this->load->view('insert_driver_documents', array_merge($data, $this->data));
}

   function show_driver_id_for_advance ($id) {

$data['single_driver'] = $this->staff->show_driver_id($id);
$this->data['driver_advance'] = $this->staff->show_driver_advance($id);
$this->data['user'] = $this->staff->show_user();
$this->load->view('insert_driver_advance', array_merge($data, $this->data));
}



    function savedata_advance() {
             
        
        $drivers_id = $this->input->post('drivers_id');
        
           $data = array(
                
            'drivers_id' => $this->input->post('drivers_id'),
            'advance_amount' => $this->input->post('advance_amount'),
            'month' => $this->input->post('month'),
            'date' => $this->input->post('date'),
            'by' => $this->input->post('by'),
                
                 );
             $this->db->insert('driver_advance_data', $data);
             $this->session->set_flashdata('category_success', 'Advance Added Successfully');
             redirect("Add_Driver/show_driver_id_for_advance/$drivers_id");
}
 
	
        
         function savedata() {
             
             

$this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div
$this->form_validation->set_rules('driver_name','Driver Name','unique[drivers.driver_name]');

if($this->form_validation->run()== FALSE){
    $this->load->view('insert_driver');
}else {
    

    
             $data = array(
                
            'driver_name' => $this->input->post('driver_name'),
            'driver_nic_no' => $this->input->post('driver_nic_no'),
            'driver_contact_no' => $this->input->post('driver_contact_no'),
            'driver_contact_no2' => $this->input->post('driver_contact_no2'),
            'driver_address' => $this->input->post('driver_address'),
            'driver_salary_per_month' => $this->input->post('driver_salary_per_month'),
            'by' => $this->input->post('by'),
                
                 );
             $this->db->insert('drivers', $data);
             $this->session->set_flashdata('category_success', 'Driver Added Successfully');
             redirect("Add_Driver/show_driver");
}
 }       
      
                
function show_driver_id($id) {

$data['single_driver'] = $this->staff->show_driver_id($id);
$this->load->view('edit_driver', $data);
}

function update_driver_id() {
    $id= $this->input->post('id');
    $last_work = $this->input->post('last_work');
    $last_work_data['last_work'] = $last_work;
   
 
  $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div
    
    $drivers = $this->db->get_where('drivers', array('drivers_id' => $id))->row();
    $original_value = $drivers->driver_name;
    
    if($this->input->post('driver_name') != $original_value) {
   $is_unique =  '|is_unique[drivers.driver_name]';
} else {
   $is_unique =  '';
}

$this->form_validation->set_rules('driver_name', 'Driver Name', 'required|trim|xss_clean'.$is_unique);

if($this->form_validation->run()== FALSE){
   $this->show_driver_id($id);
}else {
    


$data = array(
         
          
            'driver_name' => $this->input->post('driver_name'),
            'driver_nic_no' => $this->input->post('driver_nic_no'),
            'driver_contact_no' => $this->input->post('driver_contact_no'),
            'driver_contact_no2' => $this->input->post('driver_contact_no2'),
            'driver_address' => $this->input->post('driver_address'),
            'driver_salary_per_month' => $this->input->post('driver_salary_per_month'),
            'by' => $this->input->post('by'),
);
$this->staff->update_driver_id($id,$data);
$this->session->set_flashdata('category_success', 'Driver Updated Successfully');
$last_work_data['driver'] = $this->staff->show_driver();
$this->load->view("show_driver", $last_work_data);

}
}   

 function savedata_documents() {
$id = $this->input->post('drivers_id');
 $this->load->library('upload');
     $number_of_files_uploaded = count($_FILES['userfile']['name']);
     $images = array();
     for ($i = 0; $i < $number_of_files_uploaded; $i++){ 
      $_FILES['images']['name']     = $_FILES['userfile']['name'];
      $_FILES['images']['type']     = $_FILES['userfile']['type'];
      $_FILES['images']['tmp_name'] = $_FILES['userfile']['tmp_name'];
      $_FILES['images']['error']    = $_FILES['userfile']['error'];
      $_FILES['images']['size']     = $_FILES['userfile']['size'];
        $config = array(
                    'upload_path'   => './uploads/drivers/',
                    'allowed_types' => "*",
                    'size'          => 102400,
                    'encrypt_name'  => true,
                    'overwrite'     => FALSE,
                );
        
               
        
    $this->upload->initialize($config);

        if ($this->upload->do_upload('images')) {
            
            $upload_data = $this->upload->data();
           
            
             $source_path = './uploads/drivers/'.$upload_data['file_name'];
            $target_path = './uploads/drivers/';
              
            $config_manip = array(
                  'image_library' => 'gd2',
                  'source_image' => $source_path,
                  'new_image' => $target_path,
                  'maintain_ratio' => TRUE,
                  'create_thumb' => false,
                  'width' => 1280,   
                  'height' => 1280
            );
           
            $this->load->library('image_lib');
            $this->image_lib->initialize($config_manip);
            if (!$this->image_lib->resize()) {
              echo $this->image_lib->display_errors();
            }
            // clear //
            $this->image_lib->clear();






            /////resize code GD library 

            
            
            $data_ary = array(
            'sample_split_file_name' => $upload_data['client_name'],
            'sample_split_file_code' => $upload_data['file_name'],
            'drivers_id' => $this->input->post('drivers_id'),  
            'document_title' => $this->input->post('document_title'),
            'date' => $this->input->post('date'),
            'by' => $this->input->post('by'),
     
             );
          
            $this->db->insert('driver_documents', $data_ary);
            $this->session->set_flashdata('category_success', 'Document Added Successfully');
            redirect("Add_Driver/show_driver_id_for_documents" . "/" . $id);


 }}}


function delete_driver_document($driver_documents_id,$sample_split_file_code) {

$this->db->where('driver_documents_id',$driver_documents_id);
$this->db->delete('driver_documents'); 
$file = "uploads/drivers/$sample_split_file_code";
unlink($file);
 redirect($_SERVER['HTTP_REFERER']);
} 

function delete_driver_advance($driver_advance_data_id) {

$this->db->where('driver_advance_data_id',$driver_advance_data_id);
$this->db->delete('driver_advance_data'); 
 redirect($_SERVER['HTTP_REFERER']);
} 


function delete_driver($drivers_id) {
    
  if($drivers_id == 1){
      $this->session->set_flashdata('category_success', 'You Can Not Delete The SELF Driver!');
      redirect("Add_Driver/show_driver");
  }else{
    
$this->db->where('drivers_id',$drivers_id);
if($this->db->delete('drivers') == TRUE){
$this->session->set_flashdata('category_success', 'Driver Deleted Successfully');
}  else {
  $this->session->set_flashdata('category_success', 'You Can Not Delete The Driver, Data Exists In Projects!');  
}
redirect("Add_Driver/show_driver");
}}     




}
