<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function tracking(){
		$idtransaksi = $this->input->post('inputKodeKunci');
		if (!is_null($idtransaksi)) {
			$this->load->model('userModel');
			$query = $this->userModel->getTransaksi($idtransaksi);
			$queryNum = $this->userModel->getTransaksiRow($idtransaksi);
			if($queryNum > 0){
				$data['query'] = $query;
				foreach ($query as $key) {
					if ($key -> IdJenis == 1) {
						$this->load->view('trackingview1',$data);
					}
					elseif ($key -> IdJenis == 2) {
						$this->load->view('trackingview2',$data);
					}
					elseif ($key -> IdJenis == 3) {
						$this->load->view('trackingview3',$data);
					}
					else
						$this->load->view('trackingview4',$data);

				}
			}
			else{
				$data['pesan'] = "gagal";
				redirect('home',$data);
			}
				
		}
		else
			redirect('home');
	}

	public function checkharga(){
		$this->load->model('userModel');
		$IdJenis = $this->input->get('option');
		$berat = $this->input->get('berat');
		$query = $this->userModel->getTarif($IdJenis);

		foreach ($query as $key) {
			$tarif = $key -> Tarif;
		}
	

		$data['harga'] = $tarif * $berat;
		$this->load->view('checkhargaview',$data);
	}

	public function formcheckharga(){
		$this->load->view('checkhargaview');
	}

}