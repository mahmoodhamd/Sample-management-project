<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Model {
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
	
	function show_driver(){
$this->db->select('*');
$this->db->order_by('driver_name','asc');
$query = $this->db->get('drivers');
return $query->result_array();
}
function show_driver_id($data){
$this->db->select('*');
$this->db->from('drivers');
$this->db->where('drivers_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
function update_driver_id($id,$data){
$this->db->where('drivers_id', $id);
$this->db->update('drivers', $data);
} 
function show_driver_documents($id){
$this->db->select('*');
$this->db->where('drivers_id',$id);
$this->db->order_by('document_title','asc');
$query = $this->db->get('driver_documents');
return $query->result_array();
} 
	
function show_user(){
$this->db->select('*');
$this->db->order_by('username','asc');
$query = $this->db->get('user');
return $query->result_array();
}  	
function show_driver_advance($id){
$this->db->select('*');
$this->db->where('drivers_id',$id);
$this->db->order_by('month','desc');
$query = $this->db->get('driver_advance_data');
return $query->result_array();
}
	
	
}
	
	
	