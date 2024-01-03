<?php

class EmployeeModel extends CI_Model
{

    public function creategetEmployee($data){
        $query= $this->db->get($data)->result();
        return $query;
    }
    public function createinsertEmployee($data){

        return $this->db->insert('employee',$data);
    
    }
    

    public function getEmployee($data){
        $query= $this->db->get($data)->result();
        return $query;
    }


public function insert_Employee($data){

    return $this->db->insert('employee',$data);

}

public function editemployee($id){
    $result = $this->db->get_where('employee', ['id' => $id])->row();
    return $result;
} 

public function update( $data, $id)
{
return $this->db->update('employee' , $data,['id'=>$id]);
    
}

public function delete($id)
{
    return $this->db->delete('employee', ['id' => $id]);
    
}



}




?>