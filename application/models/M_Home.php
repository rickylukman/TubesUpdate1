<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

	public function getAllTarif()
	{
		//use query builder to get data table "listongkir"
		$query = $this->db->get('listongkir');
		return $query->result();
  	}



	// public function getAllInvoice()
	// {
	// 	//use query builder to get data table "resi"
	// 	$query = $this->db->get('resi');
	// 	return $query->result();
 //  	}

  	public function cari() {
  		$cari = $this->input->GET('cari',true);
  		$this->db->select('*');
  		$this->db->from('resi');
  		$this->db->like('invoice',$cari);
  		return $this->db->get()->result();
  	}


}
