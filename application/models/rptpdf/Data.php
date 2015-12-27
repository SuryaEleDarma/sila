<?php
class Data extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct();
    }
    
    function select_data($idTransaksi) {
        $this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('admin','admin.idadmin = transaksi.admin');
		$this->db->join('informasi','informasi.idTransaksi = transaksi.idTransaksi');
		$this->db->join('jenistransaksi','jenistransaksi.idjenis = transaksi.jenistransaksi');
		$this->db->join('kodekunci','kodekunci.idTransaksi = transaksi.idTransaksi');
		$this->db->join('pelanggan','pelanggan.noPelanggan = transaksi.pelanggan');
		$this->db->join('tanggaldatang','tanggaldatang.idTransaksi = transaksi.idTransaksi');
		$this->db->where('transaksi.idTransaksi',$idTransaksi);

		$query = $this->db->get();
		return $query->result();
    }
}