<?php
class Admin_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
      }
	  
	public function insert_data($tablo,$data)
		{
			if ($this->db->insert($tablo,$data)) //  dataları ekle
			{
			return true;
			}
		}	
    public function update_data($tablo,$data,$id)  // İd si ve datası gönderilen verileri günceller
		{
		$this->db->where('id', $id);
		$this->db->update($tablo ,$data);
		return true;
		}  		
	public function login($kullanici,$sifre)
		{
		$this->db->select('*');
        $this->db->from('admin');
        $this->db->where('kullanici', $kullanici);
        $this->db->where('sifre', $sifre);
        $this->db->limit(1);
         
        
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
		}
}
?>	  