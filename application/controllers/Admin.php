<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        //load model admin
        parent::__construct();
        $this->load->model('M_Admin');
        $this->load->library('form_validation');
    }

    public $data = array(
        "nim" => '',
        // "nama" => "Alvianda Ricky LP",
        // "kampus"=>"Telkom University",
        "kita" =>"Apa Hayo"
    );

    public function index()
    {
        $data['kita'] = '';
        $data['nim'] = '';
        $this->load->view('admin/page_headerAdm', $data);
        $this->load->view('admin/page_homeAdm');
    }

    public function logAdm() 
    {   
        $data['kita'] = '';
        $this->load->view('user/page_header', $data);
        $this->load->view('admin/page_loginAd');
    }
    
    public function login() 
    {
        $nim= $this->input->post("nim");
        $pass = $this->input->post("pass");
        $cek = $this->M_Admin->ceklogin($nim, $pass);
        if ($cek > 0) {
            $data['nim'] = $nim;
            redirect("Admin/index", $data);
        } else {
            echo "SALAH";
        }
    }
 
    public function logout(){
        $this->simple_login->logout();
    }        
     
    public function listkota()
    {
        $data_kota = $this->M_Admin->getAllTarif();
        $this->load->view('admin/page_headerAdm');
        $this->load->view('admin/page_listKota',['data'=>$data_kota]);
    }
    
    public function listkirim()
    {
        $data_resi = $this->M_Admin->getAllKirim();
        $this->load->view('admin/page_headerAdm');
        $this->load->view('admin/page_listKiriman',['data'=>$data_resi]);
    }
    
    public function tambahkota()
	{	
        $this->form_validation->set_rules('kota','Kota','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/page_headerAdm');
            $this->load->view('admin/page_tambahKota');
        } else {
            $this->M_Admin->tambahDataKota();
            redirect('Admin/listkota');
        }
	}
    
    public function tambahresi()
	{	
        $this->form_validation->set_rules('invoice','Invoice','required');
        $this->form_validation->set_rules('penerima','Penerima','required');
        $this->form_validation->set_rules('pengirim','Pengirim','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','Kota','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/page_headerAdm');
            $this->load->view('admin/page_tambahResi');
        } else {
            $this->M_Admin->tambahDataResi();
            redirect('Admin/listkirim');
        }
	}

    public function editresi()
    {
        // Create variabel and use it for edit data from database.
        $invoice = $this->input->post('invoice',true);
        $data = $this->input->post('status',true);
        $this->M_Admin->editResi($invoice,$data);
        redirect('Admin/listkirim');
    }

    public function editongkir()
    {
        $data = array(
            'kota' => $this->input->post('kota',true),
            'reguler' => $this->input->post('reguler',true),
            'extra' => $this->input->post('extra',true),
            'kilat' => $this->input->post('kilat',true)
        );
        $this->M_Admin->editOngkir($data);
        redirect('Admin/listkota');
    }

    public function hapusresi($invoice)
    {
        $this->M_Admin->hapusResi($invoice);
        redirect('Admin/listkirim','refresh');
    }

    public function hapuskota($kota)
    {
        $this->M_Admin->hapusKota($kota);
        redirect('Admin/listkota','refresh');
    }
}