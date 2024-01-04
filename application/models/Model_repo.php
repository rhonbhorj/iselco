<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_repo extends CI_Model
{
	
	public function select_all_data()
	{
		
        // $result  =$this->db->select('*')->from('tb_data')->get()->array_recult();

		// return $result;


        $qry="select * from tb_data";
        $Q= $this->db->query($qry);
        return $Q->row_array()?$Q->result_array():false;
        
	}

    public function insert_data($data){
        $this->db->insert('tb_data',$data);
        
    }
}
