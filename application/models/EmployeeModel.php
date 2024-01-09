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

    $result= $this->db->insert('employee',$data);
      // Update the JSON file after inserting into the database
      $this->updateJsonFile();

      return $result;
  
}

public function editemployee($id){
    $result = $this->db->get_where('employee', ['id' => $id])->row();
    return $result;
} 

public function update( $data, $id)
{
$result=$this->db->update('employee' , $data,['id'=>$id]);
$this->updateJsonFile();
  return $result;
}

public function delete($id)
{
    $result=$this->db->delete('employee', ['id' => $id]);
 $this->updateJsonFile();
    return $result;
}

public function updateJsonFile() {
    $data['employee'] = $this->getEmployee('employee');

    // Convert data to JSON
    $json_data = json_encode($data['employee'], JSON_PRETTY_PRINT);

    // Save JSON data to a file
    file_put_contents('employee_data.json', $json_data);
}


}




?>