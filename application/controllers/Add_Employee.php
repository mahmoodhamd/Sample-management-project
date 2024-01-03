<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Employee extends CI_Controller 
{

    public function index()
	{
	
	  $this->load->view('template/header');
	 
	 $this->load->model('EmployeeModel');
	 $data['employee']= $this->EmployeeModel->getEmployee('employee');
      
	 $this->load->view('Frontend/employee',$data);
	  $this->load->view('template/footer');
	}

    public function create(){
		
		$this->load->view('Frontend/create');
		$this->load->view('template/header');
		$this->load->view('template/footer');
		 
		
	}


    public function edit($id)
    {
     $this->load->model('EmployeeModel');
     $data['employee']=$this->EmployeeModel->editemployee($id);
     $this->load->view('template/header');
     
     
     $this->load->view('Frontend/edit',$data);
     $this->load->view('template/footer');

    }
     
    public function delete($id)
 {
     $this->load->model('EmployeeModel');
     $this->EmployeeModel->delete($id);
     redirect(base_url('employee'));
 }


 public function update($id){
      
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    
    if($this->form_validation->run()) :
        $data=[
        'first_name'=>$this->input->post('first_name'),
        'last_name'=>$this->input->post('last_name'),
         'phone'=>$this->input->post('phone'),
        'email'=>$this->input->post('email')
        ];
         $this->load->model("EmployeeModel");
         $this->EmployeeModel->update($data,$id);
         redirect(base_url('employee'));
    else :
        $this->edit($id);
    endif;
    
    
    
        
   }

public function store(){

    $this->form_validation->set_rules('first_name', 'First Name' ,'required');
    $this->form_validation->set_rules('last_name', 'Last Name' ,'required');
    $this->form_validation->set_rules('phone', 'Phone Number' ,'required');
    $this->form_validation->set_rules('email', 'Email' ,'required');
    
   if($this->form_validation->run()==true){
      
    $data=
    [
        'first_name'=>$this->input->post('first_name'),
        'last_name'=>$this->input->post('last_name'),
        'phone'=>$this->input->post('phone'),
        'email'=>$this->input->post('email'),
        
    ];
    $this->load->model('EmployeeModel','emp');
    $this->emp->insert_Employee($data);
    redirect(base_url('employee'));

   }
   else{
    $this->create();
   }



}







}


?>