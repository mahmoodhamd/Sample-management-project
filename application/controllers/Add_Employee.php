<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Employee extends CI_Controller 
{

    public function index()
	{
	
	  $this->load->view('template/header');
	 
	 $this->load->model('EmployeeModel');
	$data= $this->updateJsonFile();

	 $this->load->view('Frontend/employee',$data);
	  $this->load->view('template/footer');
	}

    public function create(){
		
		$this->load->view('Frontend/create');
		$this->load->view('template/header');
		$this->load->view('template/footer');
		 
		
	}
    // driver's function
    public function createadvance()
    {
        $this->load->view('Frontend/createadvance');
		$this->load->view('template/header');
		$this->load->view('template/footer');
    }

     
    public function createindex()
	{
	
	  $this->load->view('template/header');
	 
	 $this->load->model('EmployeeModel');
	 $data['employee']= $this->EmployeeModel->creategetEmployee('employee');
      
	 $this->load->view('Frontend/employee',$data);
	  $this->load->view('template/footer');
	}


    public function createstore(){

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
        $this->emp->createinsertEmployee($data);
        redirect(base_url('driver'));
    
       }
       else{
        $this->createadvance();
       }
    
    
    
    }



//  --------------------




    public function edit($id)
    {
     $this->load->model('EmployeeModel');
     $data['employee']=$this->EmployeeModel->editemployee($id);
     $this->load->view('template/header');
     $this->updateJsonFile();

     
     $this->load->view('Frontend/edit',$data);
     $this->load->view('template/footer');

    }
     
    public function delete($id)
 {
     $this->load->model('EmployeeModel');
     $this->EmployeeModel->delete($id);
// Update the JSON file after deleting from the database
     $this->updateJsonFile();
     redirect(base_url('employee'));
 }


 public function update($id){
      
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    
    if($this->form_validation->run()){
        $data=[
        'first_name'=>$this->input->post('first_name'),
        'last_name'=>$this->input->post('last_name'),
         'phone'=>$this->input->post('phone'),
        'email'=>$this->input->post('email')
        ];
         $this->load->model("EmployeeModel");
         $this->EmployeeModel->update($data,$id);

         $this->updateJsonFile();

         redirect(base_url('employee'));
    }
    else {
        $this->edit($id);
    }
    
    
    // Update the JSON file after updating the database
    
    
        
   }


   private function updateJsonFile(){
    $this->load->model('EmployeeModel');
    $data['employee'] = $this->EmployeeModel->getEmployee('employee');

    // Convert data to JSON
    $json_data = json_encode($data['employee'], JSON_PRETTY_PRINT);

    // Save JSON data to a file
    file_put_contents('employee_data.json', $json_data);
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

     // Encode data as JSON
     $json_data = json_encode($data, JSON_PRETTY_PRINT);

     // Save JSON data to a file (you may adjust the file path)
     file_put_contents('employee_data.json', $json_data);

    $this->load->model('EmployeeModel','emp');
    $this->emp->insert_Employee($data);
    $this->session->set_flashdata('category_success', 'Driver Added Successfully');
    redirect(base_url('employee'));

   }
   else{
    $this->create();
   }



}







}


?>