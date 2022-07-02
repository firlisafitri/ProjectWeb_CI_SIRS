<?php
class Dokter extends CI_Controller{
		
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk')!= TRUE){
			$url=base_url;
			redirect($url);
		}
	}

	function index(){
		$this->load->view('Dokter/Template/header.php');
		$this->load->view('Dokter/Template/menu.php');
		$this->load->view('Dokter/index.php');
		$this->load->view('Dokter/Template/footer.php');
	}

	//....................DATA JADWAL PRAKTEK DOKTER ..................

	function data_jadwal(){
		$where = $this->session->userdata('id');
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_dokter($where);
		$this->load->view('Dokter/Template/header.php');
		$this->load->view('Dokter/Template/menu.php');
		$this->load->view('Dokter/data_jadwal.php',$data);
		$this->load->view('Dokter/Template/footer.php');
	}

	//...................DATA ABSENSI DOKTER ..........................
	
	function data_absensi(){
		$where = $this->session->userdata('id');
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_dokter($where);
		$this->load->view('Dokter/Template/header.php');
		$this->load->view('Dokter/Template/menu.php');
		$this->load->view('Dokter/data_absensi.php',$data);
		$this->load->view('Dokter/Template/footer.php');
	}

	function data_absensi_input($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Absensi');
		$data['tbl_jadwal'] = $this->M_Absensi->view_data($id_jadwal);
		$data['tbl_dokter'] = $this->M_Absensi->join_data($id_jadwal);
		$this->load->view('Dokter/Template/header.php');
		$this->load->view('Dokter/Template/menu.php');
		$this->load->view('Dokter/data_absensi_input.php',$data);
		$this->load->view('Dokter/Template/footer.php');
	}

	function data_absensi_input_aksi(){
		$idj = $this->input->POST('id_jadwal');
		$idk = $this->input->POST('id_dokter');
		$kehadiran = $this->input->POST('kehadiran');
		$tgl = $this->input->POST('tgl');
		$absensi = $this->input->POST('absensi');

		for($i=0; $i<count($idk); $i++){
		$data = array(
			'id_jadwal' => $idj,
			'id_dokter' => $idk[$i],
			'kehadiran' => $kehadiran,
			'tgl' => $tgl,
			'absensi' => $absensi[$i]
		);
		$this->load->model('M_Absensi');
		$this->M_Absensi->input_absensi_dokter($data,'tbl_absensi');

		}
		redirect('Dokter/Dokter/data_absensi');

	}

	function data_absensi_view($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Absensi');
		$data['tbl_absensi'] = $this->M_Absensi->Absensi_dokter($id_jadwal);
		$this->load->view('Dokter/Template/header.php');
		$this->load->view('Dokter/Template/menu.php');
		$this->load->view('Dokter/data_absensi_view.php',$data);
		$this->load->view('Dokter/Template/footer.php');
	}

	function cetak_data_absensi($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Absensi');
		$data['tbl_absensi'] = $this->M_Absensi->Absensi_dokter($id_jadwal);
		$this->load->view('Dokter/cetak_data_absensi.php',$data);
	}

}