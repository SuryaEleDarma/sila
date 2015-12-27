<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('fpdf');

        // $logged_in = $this->session->userdata('logged_in');
        // if(!$logged_in){
        //     header("location: ".base_url());
        // }
    } 
	public function index()
	{
		if ($this->session->flashdata('pesan') != null ) {
			$data['pesan'] = "gagal";
			$this->load->view('admin',$data);
		}
		else
			$this->load->view('admin');		
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('pwd');		
		$pwd =  md5($password);
		$this->load->model('adminModel');
		$result = $this->adminModel->loginAdmin($username,$pwd);

		if(is_array($result)){
			foreach ($result as $key) {
				$array = array(
					'id' => $key->idAdmin,
					'username'=> $key->username
				);
				
				$this->session->set_userdata('logged_in',$array);	
			}
			redirect('admin/dashboard');
		}
		else{
			$this->session->set_flashdata('pesan', 'gagal');
			redirect('admin/index');
		}
		
	}
	public function dashboard(){
		if ($this->session->userdata('logged_in')) {
			$this->load->view('admin_dashboard');
		}
		else{
			redirect('admin/index');
		}
		
	}

	public function logOut(){
		if ($this->session->userdata('logged_in')) {
			$this->session->unset_userdata('logged_in');
			redirect('admin/index');
		}
	}

	public function formBuatTransaksi(){
		if ($this->session->userdata('logged_in')) {
			$this->load->library('kodekunci');
			$this->load->model('adminModel');
			$tersedia = 1;
			while ( $tersedia == 1) {
				$kodekunci = $this->kodekunci->buatkodekunci(5);
				$tersedia = $this->adminModel->cekKetersedianKodeKunci($kodekunci);
			}
			$data['KodeKunci'] = $kodekunci;
			$this->load->view('formBuatTransaksi',$data);
		}
		else{
			redirect('admin/index');
		}
		
	}

	public function cetak($idTransaksi) {
        $this->load->model('rptpdf/data');
        $res['data'] = $this->data->select_data($idTransaksi);
        $this->load->view('rptpdf/index',$res);
    }	
	public function tarif(){
		if ($this->session->userdata('logged_in')) {
			$this->load->model('adminModel');
			$data['result'] = $this->adminModel->getTarif();

			if ($this->session->flashdata('pesan') != null ) {
				$data['pesan'] = "berhasil";
			}

			$this->load->view('tarif',$data);
		}
		else
			redirect('admin/index');
	}
	public function edittarif($idjenis){
		if ($this->session->userdata('logged_in')) {
			$this->load->model('adminModel');
			$data['result'] = $this->adminModel->getTarifDetail($idjenis);
			$this->load->view('formedittarif',$data);
		}
		else
			redirect('admin/index');
	}
	public function updateTarif($idjenis){
		if ($this->session->userdata('logged_in')) {
			$this->load->model('adminModel');
			$data['result'] = $this->adminModel->updateTarif($idjenis,$this->input->post('tarif'));
			$this->session->set_flashdata('pesan', 'berhasil');
			redirect('admin/tarif');
		}
		else
			redirect('admin/index');
	}


	public function update($idTransaksi){
		$this->load->model('adminModel');
		$query['result'] = $this->adminModel->getDetailTransaksi($idTransaksi);

		$this->load->view('formEditTransaksi',$query);
	}	
}

?>