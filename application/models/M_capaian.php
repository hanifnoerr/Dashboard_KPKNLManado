<?php 
 
class M_capaian extends CI_Model{
	function tampil_data(){
		return $this->db->get('capaian');
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}