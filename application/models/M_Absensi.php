<?php
class M_Absensi extends CI_Model{
	
	function view_data($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_dokter','tbl_dokter.id_dokter=tbl_jadwal.id_dokter');
		$this->db->where('tbl_jadwal.id_jadwal='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function join_data($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_dokter','tbl_dokter.id_dokter=tbl_jadwal.id_dokter');;
		$this->db->where('tbl_jadwal.id_jadwal='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function input_absensi_dokter($data,$table){
		$this->db->insert($table,$data);
	}

	function Absensi_dokter($where){
		$this->db->select('*');
		$this->db->from('tbl_absensi');
		$this->db->JOIN('tbl_jadwal','tbl_jadwal.id_jadwal=tbl_absensi.id_jadwal');
		$this->db->JOIN('tbl_dokter','tbl_dokter.id_dokter=tbl_absensi.id_dokter');
		$this->db->where('tbl_jadwal.id_jadwal='.$where);
		$query = $this->db->get();
		return $query->result();
	}
	
}