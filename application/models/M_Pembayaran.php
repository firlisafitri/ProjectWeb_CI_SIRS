<?php
class M_Pembayaran extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tbl_pendaftaran');
	}

	function input_pembayaran_pasien($data,$table){
		$this->db->insert($table,$data);
	}

	function join_data($where){
		$this->db->select('*');
		$this->db->from('tbl_pembayaran');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_pembayaran.id_pendaftaran');
		$this->db->where('tbl_pembayaran.id_pembayaran='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function view_data($where){
		$this->db->select('*');
		$this->db->from('tbl_pembayaran');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_pembayaran.id_pendaftaran');
		$this->db->where('tbl_pembayaran.id_pembayaran='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function Pembayaran_pasien($where){
		$this->db->select('*');
		$this->db->from('tbl_pembayaran');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_pembayaran.id_pendaftaran');
		$this->db->where('tbl_pembayaran.id_pembayaran='.$where);
		$query = $this->db->get();
		return $query->result();
	}

}