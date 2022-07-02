<?php
class M_Ruangan extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tbl_ruangan');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function input_data_ruangan_pasien($data,$table){
		$this->db->insert($table,$data);
	}

	function join_data($where){
		$this->db->select('*');
		$this->db->from('tbl_ruangan_pasien');
		$this->db->JOIN('tbl_pendaftaran','tbl_pendaftaran.id_pendaftaran=tbl_ruangan_pasien.id_pendaftaran');
		$this->db->JOIN('tbl_ruangan','tbl_ruangan.id_ruangan=tbl_ruangan_pasien.id_ruangan');
		$this->db->where('tbl_ruangan_pasien.id_ruangan='.$where);
		$query = $this->db->get();
		return $query->result();
	}

}