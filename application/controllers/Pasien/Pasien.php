<?php
class Pasien extends CI_Controller{
		
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk')!= TRUE){
			$url=base_url;
			redirect($url);
		}
	}

	function index(){
		$this->load->view('Pasien/Template/header.php');
		$this->load->view('Pasien/Template/menu.php');
		$this->load->view('Pasien/index.php');
		$this->load->view('Pasien/Template/footer.php');
	}

	//....................DATA JADWAL PRIKSA ..................

	function data_jadwal(){
		$where = $this->session->userdata('id');
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_pasien($where);
		$this->load->view('Pasien/Template/header.php');
		$this->load->view('Pasien/Template/menu.php');
		$this->load->view('Pasien/data_jadwal.php',$data);
		$this->load->view('Pasien/Template/footer.php');
	}

}