<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class M_XPetShop extends CI_Model{
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function get_data($table){
		return $this->db->get($table);
	}

	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function kodepemesanan()   {
		$this->db->select('RIGHT(kodepesanan,5) as NO', FALSE);
		$this->db->order_by('kodepesanan','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('penjualan'); 
		if($query->num_rows() >= 1){        
		 $data = $query->row();      
		 $kode = intval($data->NO) + 1;
		}
		else {      
			echo "ELSE";
		 $kode = 1;    
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "PSN".$kodemax."XPET"; 
		return $kodejadi;  
  }

}