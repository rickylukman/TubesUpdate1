<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function ceklogin($nim,$pass) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('nim',$nim);
        $this->db->where('pass',$pass);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getAllTarif()
	{
		//use query builder to get data table "listongkir"
		$query = $this->db->get('listongkir');
		return $query->result();
    }
    
    public function getAllKirim()
	{
		//use query builder to get data table "listongkir"
		$query = $this->db->get('resi');
		return $query->result();
    }
      
    public function tambahDataKota()
    {
        $data = [
            'kota' => $this->input->post('kota',true),
            'reguler' => $this->input->post('reg',true),
            'extra' => $this->input->post('x',true),
            'kilat' => $this->input->post('kilat',true)
        ];
        $this->db->insert('listongkir',$data);
    }
    
    public function tambahDataResi()
    {
        $data = [
            'invoice' => $this->input->post('invoice',true),
            'penerima' => $this->input->post('penerima',true),
            'pengirim' => $this->input->post('pengirim',true),
            'alamat' => $this->input->post('alamat',true),
            'kota' => $this->input->post('kota',true),
            'deskripsi' => $this->input->post('deskripsi',true),
            'status' => $this->input->post('status',true)
        ];
        $this->db->insert('resi',$data);
    }

    public function editResi($invoice,$data)
    {
            $this->db->set('status', $data);
            $this->db->where('invoice', $invoice);
            $this->db->update('resi');
    }

    public function editOngkir($data)
    {
        $this->db->where('kota', $data['kota']);
        $this->db->update('listongkir',$data);
    }

    public function hapusResi($invoice) 
    {
        $this->db->where('invoice',$invoice); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
        $this->db->delete('resi'); //eksekusi
        return;
    }

    public function hapusKota($kota)
    {
        $this->db->where('kota',$kota); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
        $this->db->delete('listongkir'); //eksekusi
        return;
    }
}