<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct()
 	{
		 // Load M_Web as parents in here.
		 parent::__construct();
		 $this->load->model('M_Home');
  	}

  	public $data = array(
  		// "nim" => "1301174125",
  		// "nama" => "Alvianda Ricky LP",
  		// "kampus"=>"Telkom University",
  		"kita" =>"Apa Hayo"
  	);

	public function index()
	{
		$data['kita'] = '';
		$this->load->view('user/page_header', $data);
		$this->load->view('user/page_index');
	}

	public function ongkir()
	{
		$data_ongkir = $this->M_Home->getAllTarif();
		$data['kita'] = '';
		$this->load->view('user/page_header', $data);
		$this->load->view('user/page_ongkir',['data'=>$data_ongkir]);
	}

	public function cari() 
	{
		$this->load->view('user/page_header');
		$this->load->view('user/page_cekresi');
	}

	public function hasil() 
	{
		$data2['cari'] = $this->M_Home->cari();
		$this->load->view('user/page_header');
		$this->load->view('user/page_resultresi',$data2);
	}

	// public function track()
	// {
	// 	$data_track = $this->M_web->Getjurusan_nim();
	// 	$this->load->view('page_header');
	// 	$this->load->view('page_jurusan',['data'=>$data_jurusan]);
	// }


}