<?php
class Konutlar_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
		 $this->load->library('form_validation');
		 $this->load->helper('form');
      }
	  
	public function insert_data($tablo,$data)
		{
			if ($this->db->insert($tablo,$data))
			{
			return true;
			}
		}	
    public function update_data($tablo,$data,$id) 
	{
		$this->db->where('id', $id);
		$this->db->update($tablo ,$data);
		return true;
	}  		
}
?>	  