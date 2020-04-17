<?php 

class m_crud extends CI_Model{	
	
	//to Take All data
	public function get_all_data($table)
    {
        return $this->db->get($table);
    }

    //take some data with condition
	public function getByCondition($table,$where){		
		return $this->db->get_where($table,$where);
	}

	//Insert New Data
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}

	//Update Data 
	function data_update($table,$No,$data){
		    $this->db->where('No', $No);
            $this->db->update($table, $data);
	}
    public function delete($No,$table)
    {
        return $this->db->delete($table, array("No" => $No));
    }

}