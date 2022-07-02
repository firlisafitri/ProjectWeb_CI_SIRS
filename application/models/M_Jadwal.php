<?php
class M_Jadwal extends CI_Model{
	
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_jadwal.id_pendaftaran');
		$this->db->JOIN('tbl_ruangan','tbl_ruangan.id_ruangan=tbl_jadwal.id_ruangan');
		$this->db->JOIN('tbl_dokter','tbl_dokter.id_dokter=tbl_jadwal.id_dokter');
		$query = $this->db->get();
		return $query->result();
	}

	function jadwal_dokter($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_jadwal.id_pendaftaran');
		$this->db->JOIN('tbl_ruangan','tbl_ruangan.id_ruangan=tbl_jadwal.id_ruangan');
		$this->db->JOIN('tbl_dokter','tbl_dokter.id_dokter=tbl_jadwal.id_dokter');
		$this->db->where('tbl_dokter.id_dokter='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function jadwal_pasien($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_ruangan','tbl_ruangan.id_ruangan=tbl_jadwal.id_ruangan');
		$this->db->JOIN('tbl_dokter','tbl_dokter.id_dokter=tbl_jadwal.id_dokter');
		$this->db->JOIN('tbl_ruangan_pasien','tbl_ruangan_pasien.id_ruangan=tbl_ruangan.id_ruangan');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_ruangan_pasien.id_pendaftaran');
		$this->db->where('tbl_pendaftaran.id_pendaftaran='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_pasien(){
		return $this->db->get('tbl_pendaftaran');
	}

	function tampil_ruangan(){
		return $this->db->get('tbl_ruangan');
	}

	function tampil_dokter(){
		return $this->db->get('tbl_dokter');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data($where){
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_jadwal.id_pendaftaran');
		$this->db->JOIN('tbl_ruangan','tbl_ruangan.id_ruangan=tbl_jadwal.id_ruangan');
		$this->db->JOIN('tbl_dokter','tbl_dokter.id_dokter=tbl_jadwal.id_dokter');
		$this->db->where('tbl_jadwal.id_jadwal='.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}