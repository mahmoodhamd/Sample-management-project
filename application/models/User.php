<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }

	function login($username, $password)
	{
		$this -> db -> select('*');
		$this -> db -> from('user');
		$this -> db -> where('username = ' . "'" . $username . "'"); 
		$this -> db -> where('password = ' . "'" . $password . "'"); 
                
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
        
         function getpassword($id){
        
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        return $query->row();
    }
    function get_password() {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $result = $query->result();
    }
    function show_user(){
$this->db->select('*');
$this->db->order_by('u_name', 'asc');
$query = $this->db->get('user');
return $query->result_array();
}
function show_user_id($data){
$this->db->select('*');
$this->db->from('user');
$this->db->where('user_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
function update_user_id($user_id,$data){
$this->db->where('user_id', $user_id);
$this->db->update('user', $data);
}

}
?>