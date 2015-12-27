<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userModel extends CI_Model {
	public function getTransaksi($idKodeKunci){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('admin','admin.idadmin = transaksi.admin');
		$this->db->join('informasi','informasi.idTransaksi = transaksi.idTransaksi');
		$this->db->join('jenistransaksi','jenistransaksi.idjenis = transaksi.jenistransaksi');
		$this->db->join('kodekunci','kodekunci.idTransaksi = transaksi.idTransaksi');
		$this->db->join('pelanggan','pelanggan.noPelanggan = transaksi.pelanggan');
		$this->db->join('tanggaldatang','tanggaldatang.idTransaksi = transaksi.idTransaksi');
		$this->db->join('proses','proses.NoProses = transaksi.StatusPesanan');
		$this->db->where('kodekunci.IdKodeKunci',$idKodeKunci);

		$query = $this->db->get();
		return $query -> result();
	}

	public function getTransaksiRow($idKodeKunci){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('admin','admin.idadmin = transaksi.admin');
		$this->db->join('informasi','informasi.idTransaksi = transaksi.idTransaksi');
		$this->db->join('jenistransaksi','jenistransaksi.idjenis = transaksi.jenistransaksi');
		$this->db->join('kodekunci','kodekunci.idTransaksi = transaksi.idTransaksi');
		$this->db->join('pelanggan','pelanggan.noPelanggan = transaksi.pelanggan');
		$this->db->join('tanggaldatang','tanggaldatang.idTransaksi = transaksi.idTransaksi');
		$this->db->join('proses','proses.NoProses = transaksi.StatusPesanan');
		$this->db->where('kodekunci.IdKodeKunci',$idKodeKunci);

		$query = $this->db->get();
		return $query -> num_rows();
	}

	public function getTarif($idJenis){
		$this->db->select('*');
		$this->db->from('jenistransaksi');
		$this->db->where('jenistransaksi.idjenis',$idJenis);

		$query = $this->db->get();
		return $query->result();
	}
}
?>