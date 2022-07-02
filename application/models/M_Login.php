<?php
class M_Login extends CI_Model{
	
	function auth_admin($username, $password){
		$query = $this->db->query("Select * From tbl_user where username='$username' AND password = '$password' limit 1");
		return $query;
	}

	function auth_dokter($username, $password){
		$query = $this->db->query("Select * From tbl_dokter where ni_dokter='$username' AND ni_dokter = '$password' limit 1");
		return $query;
	}

	function auth_pasien($username, $password){
		$query = $this->db->query("Select * From tbl_pendaftaran where kd_pendaftaran='$username' AND kd_pendaftaran = '$password' limit 1");
		return $query;
	}
} 