<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model {

	public function loginAdmin($username, $password){
		$this->db->select('*');
		$this->db->from('admin');  
		$this->db->where('username',$username); 
		$this->db->where('password',$password); 
		$query = $this->db->get();

		if ($query->num_rows() > 0){
			return $query->result();
		}
		else {
			return 0;
		}
	}

	public function inputTanggalDiambil($data){
		$insert = $this->db->insert('tanggaldiambil',$data);
	}

	public function insertPelanggan($inputPelanggan){
		// pertama lakukan select ke tabel pelanggan untuk mencari tahu apakah data pelanggan ini
		// sebelumnya sudah ada atau belum
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('nama',$inputPelanggan['nama']);
		$this->db->where('alamat',$inputPelanggan['alamat']);
		$this->db->where('notelp',$inputPelanggan['notelp']);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			// jika data pelanggan tidak ada, maka data diinputkan 
			$insert = $this->db->insert('pelanggan',$inputPelanggan);
		}
		// mengambil no pelanggan
		$this->db->select('noPelanggan');
		$this->db->from('pelanggan');
		$this->db->where('nama',$this->input->post('nama'));	
		$this->db->where('alamat',$this->input->post('alamat'));
		$this->db->where('notelp',$this->input->post('noTelp'));
		$query2 = $this->db->get();

		foreach ($query2 ->result() as $row) {
			$noPelanggan = $row -> noPelanggan;
		}
		return $noPelanggan;
	}

	public function insertInformasi($inputInformasi){
		$insert = $this->db->insert('informasi',$inputInformasi);
	}

	public function insertTransaksi($inputTransaksi){
		$insert = $this->db->insert('transaksi',$inputTransaksi);

		$this->db->select('idTransaksi');
		$this->db->from('transaksi');
		$this->db->where('jenistransaksi',$inputTransaksi['jenisTransaksi']);
		$this->db->where('pelanggan',$inputTransaksi['pelanggan']);
		$this->db->where('admin',$inputTransaksi['admin']);
		$this->db->where('berat',$inputTransaksi['berat']);
		$query = $this->db->get();

		foreach ($query ->result() as $row) {
			$noTransaksi = $row -> idTransaksi;
		}
		return $noTransaksi;
	}

	public function cekKetersedianKodeKunci($kodeKunci){
		$this->db->select('*');
		$this->db->from('kodekunci');
		$this->db->where('idkodekunci',$kodeKunci);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			return 0;
		}
		return 1;
	}

	public function insertKodeKunci($data){
		$insert = $this->db->insert('kodekunci',$data);
	}


	public function insertTanggalDatang($data){
		$insert = $this->db->insert('tanggaldatang',$data);
	}

	public function getTarif(){
		$this->db->select('*');
		$this->db->from('jenistransaksi');
		$query = $this->db->get();

		return $query->result();
	}
	public function getTarifDetail($idjenis){
		$this->db->select('*');
		$this->db->from('jenistransaksi');
		$this->db->where('idjenis',$idjenis);
		$query = $this->db->get();

		return $query->result();
	}
	public function updateTarif($idjenis,$tarif){
		$data = array(
			'tarif' => $tarif
			);
		$this->db->where('idjenis',$idjenis);
		$this->db->update('jenisTransaksi',$data);
	}

	public function getDetailTransaksi($idTransaksi){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('admin','admin.idadmin = transaksi.admin');
		$this->db->join('informasi','informasi.idTransaksi = transaksi.idTransaksi');
		$this->db->join('jenistransaksi','jenistransaksi.idjenis = transaksi.jenistransaksi');
		$this->db->join('kodekunci','kodekunci.idTransaksi = transaksi.idTransaksi');
		$this->db->join('pelanggan','pelanggan.noPelanggan = transaksi.pelanggan');
		$this->db->join('tanggaldatang','tanggaldatang.idTransaksi = transaksi.idTransaksi');
		$this->db->join('proses','proses.NoProses = transaksi.StatusPesanan');
		$this->db->where('transaksi.idTransaksi',$idTransaksi);

		$query = $this->db->get();
		return $query->result();
	}
	public function getAllTransaksi(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('admin','admin.idadmin = transaksi.admin');
		$this->db->join('informasi','informasi.idTransaksi = transaksi.idTransaksi');
		$this->db->join('jenistransaksi','jenistransaksi.idjenis = transaksi.jenistransaksi');
		$this->db->join('kodekunci','kodekunci.idTransaksi = transaksi.idTransaksi');
		$this->db->join('pelanggan','pelanggan.noPelanggan = transaksi.pelanggan');
		$this->db->join('tanggaldatang','tanggaldatang.idTransaksi = transaksi.idTransaksi');

		$query = $this->db->get();
		return $query->result();
	}

	public function delete($idTransaksi,$noPelanggan){
		$this->db->where('idTransaksi',$idTransaksi);
		$this->db->delete('transaksi');

		$this->db->where('idTransaksi',$idTransaksi);
		$this->db->delete('tanggaldatang');

		$this->db->where('nopelanggan',$noPelanggan);
		$this->db->delete('pelanggan');

		$this->db->where('idTransaksi',$idTransaksi);
		$this->db->delete('kodeKunci');

		$this->db->where('idTransaksi',$idTransaksi);
		$this->db->delete('informasi');
	}

	public function update($inputPelanggan,$inputTransaksi,$noPelanggan,$noTransaksi){
		$this->db->where('nopelanggan',$noPelanggan);
		$this->db->update('pelanggan', $inputPelanggan); 

		$this->db->where('idTransaksi',$noTransaksi);
		$this->db->update('transaksi', $inputTransaksi); 
	}

	public function fetch_transaksi($limit, $start){
		$this->db->limit($limit, $start);

		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('admin','admin.idadmin = transaksi.admin');
		$this->db->join('informasi','informasi.idTransaksi = transaksi.idTransaksi');
		$this->db->join('jenistransaksi','jenistransaksi.idjenis = transaksi.jenistransaksi');
		$this->db->join('kodekunci','kodekunci.idTransaksi = transaksi.idTransaksi');
		$this->db->join('pelanggan','pelanggan.noPelanggan = transaksi.pelanggan');
		$this->db->join('tanggaldatang','tanggaldatang.idTransaksi = transaksi.idTransaksi');

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}

	public function record_count() {
        return $this->db->count_all("transaksi");
    }
}
?>