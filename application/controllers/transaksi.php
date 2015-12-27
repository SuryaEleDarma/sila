<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->library("pagination");
    }

    public function lihattransaksi() {
    	$this->load->model('adminModel');
        $config = array();
        $config["base_url"] = base_url() . "transaksi/lihattransaksi";
        $config["total_rows"] = $this->adminModel->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["result"] = $this->adminModel->fetch_transaksi($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("lihattransaksi", $data);
    }

	public function tracking(){
		$idtransaksi = $this->input->post('inputKodeKunci');
		if (!is_null($idtransaksi)) {
			$this->load->model('userModel');
			$data['query'] = $this->userModel->getTransaksi($idtransaksi);
			$this->load->view('trackingview',$data);
		}
		else
			redirect('home');
	}

	// public function lihattransaksi(){
	// 	if ($this->session->userdata('logged_in')) {
	// 		$this->load->model('adminModel');
	// 		$query['result'] = $this->adminModel->getAllTransaksi();
	// 		if ($this->session->flashdata('pesan') != null ) {
	// 			$query['pesan'] = $this->session->flashdata('pesan');
	// 		}
	// 		$this->load->view('lihattransaksi',$query);
	// 	}
	// }

	public function detailtransaksi($idTransaksi){
		if ($this->session->userdata('logged_in')) {
			$this->load->model('adminModel');
			$query['result'] = $this->adminModel->getDetailTransaksi($idTransaksi);

			$this->load->view('detail',$query);
		}
	}

	public function detailtransaksiupdate($idTransaksi){
		if ($this->session->userdata('logged_in')) {
			$this->load->model('adminModel');
			$data['result'] = $this->adminModel->getDetailTransaksi($idTransaksi);
			$data['pesan'] = "update";	

			$this->load->view('detail',$data);
		}
	}

	public function buattransaksi($kodekunci){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('logged_in');
			$this->load->model('adminModel');

			// masukkan pelanggan lebih dahulu untuk mengetahui no pelanggan
			$inputPelanggan = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'notelp' => $this->input->post('noTelp')
				);	
			$noPelanggan = $this->adminModel->insertPelanggan($inputPelanggan);		

			$inputTransaksi = array(
				'jenisTransaksi' => $this->input->post('optionJasa'),
				'pelanggan' => $noPelanggan,
				'admin' => $session['id'],
				'berat' => $this->input->post('berat')
				);

			$noTransaksi = $this->adminModel->insertTransaksi($inputTransaksi);

			$inputInformasi = array(
				'idTransaksi' => $noTransaksi,
				'kemeja' => $this->input->post('kemeja'),
				'celana' => $this->input->post('celana'),
				'bajuKaos' => $this->input->post('bajuKaos'),
				'handuk' => $this->input->post('handuk'),
				'pakaianDalam' => $this->input->post('pakaianDalam'),
				'kaosKaki' => $this->input->post('kaosKaki')
				);

			$this->adminModel->insertInformasi($inputInformasi);

			$inputTanggal = array(
				'idTransaksi' => $noTransaksi
				);
			$this->adminModel->insertTanggalDatang($inputTanggal);
			$inputKodeKunci = array(
				'idkodekunci' => $kodekunci,
				'idtransaksi' => $noTransaksi
				);
			$this->adminModel->insertKodeKunci($inputKodeKunci);

			$this->detailinput($noTransaksi);	
		}
		else{
			redirect('admin/index');
		}
	}
	public function detailinput($noTransaksi){
		$this->load->model('adminModel');
		$query['result'] = $this->adminModel->getDetailTransaksi($noTransaksi);
		$query['pesan'] = "berhasil";

		$this->load->view('detail',$query);
	}

	public function deletetransaksi(){
		if ($this->session->userdata('logged_in')) {
			$idTransaksi = $this->input->get('idtransaksi');
			$noPelanggan = $this->input->get('nopelanggan');

			$this->load->model('adminModel');
			$this->adminModel->delete($idTransaksi,$nopelanggan);
			$this->session->set_flashdata('pesan', 'delete');
			redirect('transaksi/lihattransaksi');
			// $this->load->view('kosongan',$data);
		}
	}

	public function updatetransaksi(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('logged_in');
			$this->load->model('adminModel');

			// masukkan pelanggan lebih dahulu untuk mengetahui no pelanggan
			$inputPelanggan = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'notelp' => $this->input->post('noTelp')
				);	
			$inputTransaksi = array(
				'jenisTransaksi' => $this->input->post('optionJasa'),
				'admin' => $session['id'],
				'berat' => $this->input->post('berat'),
				'statusPesanan' => $this->input->post('proses'),
				);
			$noPelanggan = $this->adminModel->update($inputPelanggan,$inputTransaksi,$this->input->get('nopelanggan'),$this->input->get('notransaksi'));
			
			if ($this->input->post('proses') == 6) {
				$inputTanggal = array(
					'IdTransaksi' => $this->input->get('notransaksi'),
				);
				$this->adminModel->inputTanggalDiambil($inputTanggal);
			}

			$this->detailtransaksiupdate($this->input->get('notransaksi'));
			

			// $noTransaksi = $this->adminModel->insertTransaksi($inputTransaksi);

			// $inputInformasi = array(
			// 	'idTransaksi' => $noTransaksi,
			// 	'kemeja' => $this->input->post('kemeja'),
			// 	'celana' => $this->input->post('celana'),
			// 	'bajuKaos' => $this->input->post('bajuKaos'),
			// 	'handuk' => $this->input->post('handuk'),
			// 	'pakaianDalam' => $this->input->post('pakaianDalam'),
			// 	'kaosKaki' => $this->input->post('kaosKaki')
			// 	);

			// $this->adminModel->insertInformasi($inputInformasi);

			// $inputTanggal = array(
			// 	'idTransaksi' => $noTransaksi
			// 	);
			// $this->adminModel->insertTanggalDatang($inputTanggal);
			// $inputKodeKunci = array(
			// 	'idkodekunci' => $kodekunci,
			// 	'idtransaksi' => $noTransaksi
			// 	);
			// $this->adminModel->insertKodeKunci($inputKodeKunci);

			// $this->session->set_flashdata('id',$noTransaksi);
			// redirect('admin/detailinput');	
		}
		else{
			redirect('admin/index');
		}
	}

	


}
