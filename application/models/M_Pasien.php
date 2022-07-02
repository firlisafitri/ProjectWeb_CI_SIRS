<?php
class M_Pasien extends CI_Model{
	
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('tbl_pasien');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_pasien.id_pendaftaran');
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_pendaftaran(){
		return $this->db->get('tbl_pendaftaran');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data($where){
		$this->db->select('*');
		$this->db->from('tbl_pasien');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_pasien.id_pendaftaran');
		$this->db->where('tbl_pasien.id_pasien='.$where);
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
	
	function pilih_pasien(){
		$sql = $this->db->query('Select * from tbl_pendaftaran where NOT EXISTS (select * from tbl_ruangan_pasien where tbl_pendaftaran.id_pendaftaran = tbl_ruangan_pasien.id_pendaftaran)');
		return $sql->result_array();
	}

}