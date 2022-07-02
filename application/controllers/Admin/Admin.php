<?php
class Admin extends CI_Controller{
		
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk')!= TRUE){
			$url=base_url;
			redirect($url);
		}
	}

	function index(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/index.php');
		$this->load->view('Admin/Template/footer.php');
	}

	//........................ DATA Pendaftaran .........................

	function data_pendaftaran(){
		$this->load->model('M_Pendaftaran');
		$data['tbl_pendaftaran'] = $this->M_Pendaftaran->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pendaftaran.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pendaftaran_input(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pendaftaran_input.php');
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pendaftaran_input_aksi(){
		$kd = $this->input->POST('kd_pendaftaran');
		$nama = $this->input->POST('nm_pasien');
		$penyakit = $this->input->POST('penyakit');
		$gender = $this->input->POST('gender');
		$usia = $this->input->POST('usia');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');
		$perawatan = $this->input->POST('perawatan');
		$ruangan = $this->input->POST('ruangan_tujuan');
		$jenis_bayar = $this->input->POST('jenis_bayar');

		$data = array(
			'kd_pendaftaran' => $kd,
			'nm_pasien' => $nama,
			'penyakit' => $penyakit,
			'gender' => $gender,
			'usia' => $usia,
			'alamat' => $alamat,
			'nohp' => $hp,
			'perawatan' => $perawatan,
			'ruangan_tujuan' => $ruangan,
			'jenis_bayar' => $jenis_bayar
		);
		$this->load->model('M_Pendaftaran');
		$this->M_Pendaftaran->input_data($data,'tbl_pendaftaran');
		redirect('Admin/Admin/data_pendaftaran');

	}

	function data_pendaftaran_edit($id_pendaftaran){
		$where = array('id_pendaftaran' => $id_pendaftaran);
		$this->load->model('M_Pendaftaran');
		$data['tbl_pendaftaran'] = $this->M_Pendaftaran->view_data($where,'tbl_pendaftaran')->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pendaftaran_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pendaftaran_edit_aksi(){
		$id = $this->input->POST('id_pendaftaran');
		$kd = $this->input->POST('kd_pendaftaran');
		$nama = $this->input->POST('nm_pasien');
		$penyakit = $this->input->POST('penyakit');
		$gender = $this->input->POST('gender');
		$usia = $this->input->POST('usia');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');
		$perawatan = $this->input->POST('perawatan');
		$ruangan = $this->input->POST('ruangan_tujuan');
		$jenis_bayar = $this->input->POST('jenis_bayar');

		$data = array(
			'kd_pendaftaran' => $kd,
			'nm_pasien' => $nama,
			'penyakit' => $penyakit,
			'gender' => $gender,
			'usia' => $usia,
			'alamat' => $alamat,
			'nohp' => $hp,
			'perawatan' => $perawatan,
			'ruangan_tujuan' => $ruangan,
			'jenis_bayar' => $jenis_bayar
		);

		$where = array(
			'id_pendaftaran' => $id
		);

		$this->load->model('M_Pendaftaran');
		$this->M_Pendaftaran->update_data($where,$data,'tbl_pendaftaran');
		redirect('Admin/Admin/data_pendaftaran');

	}

	function data_pendaftaran_delete($id_pendaftaran){
		$where = array('id_pendaftaran' => $id_pendaftaran);
		$this->load->model('M_Pendaftaran');
		$this->M_Pendaftaran->delete_data($where,'tbl_pendaftaran');
		redirect('Admin/Admin/data_pendaftaran');
	}

	//........................ DATA DOKTER .........................

	function data_dokter(){
		$this->load->model('M_Dokter');
		$data['tbl_dokter'] = $this->M_Dokter->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_dokter.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_dokter_input(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_dokter_input.php');
		$this->load->view('Admin/Template/footer.php');
	}

	function data_dokter_input_aksi(){
		$ni = $this->input->POST('ni_dokter');
		$nama = $this->input->POST('nm_dokter');
		$spesialis = $this->input->POST('spesialis');
		$gender = $this->input->POST('gender');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');

		$data = array(
			'ni_dokter' => $ni,
			'nm_dokter' => $nama,
			'spesialis' => $spesialis,
			'gender' => $gender,
			'alamat' => $alamat,
			'nohp' => $hp
		);
		$this->load->model('M_Dokter');
		$this->M_Dokter->input_data($data,'tbl_dokter');
		redirect('Admin/Admin/data_dokter');

	}

	function data_dokter_edit($id_dokter){
		$where = array('id_dokter' => $id_dokter);
		$this->load->model('M_Dokter');
		$data['tbl_dokter'] = $this->M_Dokter->view_data($where,'tbl_dokter')->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_dokter_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_dokter_edit_aksi(){
		$id = $this->input->POST('id_dokter');
		$ni = $this->input->POST('ni_dokter');
		$nama = $this->input->POST('nm_dokter');
		$spesialis = $this->input->POST('spesialis');
		$gender = $this->input->POST('gender');
		$alamat = $this->input->POST('alamat');
		$hp = $this->input->POST('nohp');

		$data = array(
			'ni_dokter' => $ni,
			'nm_dokter' => $nama,
			'spesialis' => $spesialis,
			'gender' => $gender,
			'alamat' => $alamat,
			'nohp' => $hp
		);

		$where = array(
			'id_dokter' => $id
		);

		$this->load->model('M_Dokter');
		$this->M_Dokter->update_data($where,$data,'tbl_dokter');
		redirect('Admin/Admin/data_dokter');

	}

	function data_dokter_delete($id_dokter){
		$where = array('id_dokter' => $id_dokter);
		$this->load->model('M_Dokter');
		$this->M_Dokter->delete_data($where,'tbl_dokter');
		redirect('Admin/Admin/data_dokter');
	}

	//....................DATA PASIEN ..................

	function data_pasien(){
		$this->load->model('M_Pasien');
		$data['tbl_pasien'] = $this->M_Pasien->tampil_data();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pasien.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pasien_input(){
		$this->load->model('M_Pasien');
		$data['tbl_pendaftaran'] = $this->M_Pasien->tampil_pendaftaran()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pasien_input.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pasien_input_aksi(){
		$idp = $this->input->POST('id_pendaftaran');

		$data = array(
			'id_pendaftaran' => $idp,
		);
		$this->load->model('M_Pasien');
		$this->M_Pasien->input_data($data,'tbl_pasien');
		redirect('Admin/Admin/data_pasien');

	}

	function data_pasien_edit($id_pasien){
		$where = array('id_pasien' => $id_pasien);
		$this->load->model('M_Pasien');
		$data['tbl_pasien'] = $this->M_Pasien->view_data($id_pasien);
		$data['tbl_pendaftaran'] = $this->M_Pasien->tampil_pendaftaran()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pasien_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pasien_edit_aksi(){
		$id = $this->input->POST('id_pasien');
		$kd = $this->input->POST('kd_pasien');
		$idp = $this->input->POST('id_pendaftaran');

		$data = array(
			'id_pendaftaran' => $idp,
		);

		$where = array(
			'id_pasien' => $id
		);

		$this->load->model('M_Pasien');
		$this->M_Pasien->update_data($where,$data,'tbl_pasien');
		redirect('Admin/Admin/data_pasien');

	}

	function data_pasien_delete($id_pasien){
		$where = array('id_pasien' => $id_pasien);
		$this->load->model('M_Pasien');
		$this->M_Pasien->delete_data($where,'tbl_pasien');
		redirect('Admin/Admin/data_pasien');
	}

	
	//................ DATA RUANGAN ...............

	function data_ruangan(){
		$this->load->model('M_Ruangan');
		$data['tbl_ruangan'] = $this->M_Ruangan->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_ruangan.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_ruangan_input(){
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_ruangan_input.php');
		$this->load->view('Admin/Template/footer.php');
	}

	function data_ruangan_input_aksi(){
		$kode = $this->input->POST('kd_ruangan');
		$nama = $this->input->POST('nm_ruangan');
		$tipe = $this->input->POST('tipe_kamar');

		$data = array(
			'kd_ruangan' => $kode,
			'nm_ruangan' => $nama,
			'tipe_kamar' => $tipe,
		);
		$this->load->model('M_Ruangan');
		$this->M_Ruangan->input_data($data,'tbl_ruangan');
		redirect('Admin/Admin/data_ruangan');

	}

	function data_ruangan_edit($id_ruangan){
		$where = array('id_ruangan' => $id_ruangan);
		$this->load->model('M_Ruangan');
		$data['tbl_ruangan'] = $this->M_Ruangan->view_data($where,'tbl_ruangan')->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_ruangan_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_ruangan_edit_aksi(){
		$id = $this->input->POST('id_ruangan');
		$kode = $this->input->POST('kd_ruangan');
		$nama = $this->input->POST('nm_ruangan');
		$tipe = $this->input->POST('tipe_kamar');

		$data = array(
			'kd_ruangan' => $kode,
			'nm_ruangan' => $nama,
			'tipe_kamar' => $tipe,
		);

		$where = array(
			'id_ruangan' => $id
		);

		$this->load->model('M_Ruangan');
		$this->M_Ruangan->update_data($where,$data,'tbl_ruangan');
		redirect('Admin/Admin/data_ruangan');

	}

	function data_ruangan_delete($id_ruangan){
		$where = array('id_ruangan' => $id_ruangan);
		$this->load->model('M_Ruangan');
		$this->M_Ruangan->delete_data($where,'tbl_ruangan');
		redirect('Admin/Admin/data_ruangan');
	}


	function data_ruangan_pasien($id_ruangan){
		$where = array('id_ruangan' => $id_ruangan);
		$this->load->model('M_Ruangan');
		$this->load->model('M_Pasien');
		$data['tbl_ruangan'] = $this->M_Ruangan->view_data($where,'tbl_ruangan')->result();
		$data['tbl_pendaftaran'] = $this->M_Pasien->pilih_pasien();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_ruangan_pasien.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_ruangan_pasien_aksi(){
		$idr = $this->input->POST('id_ruangan');
		$idp = $this->input->POST('id_pendaftaran');
		
		for($i=0; $i<count($idp); $i++){
		$data = array(
			'id_ruangan' => $idr,
			'id_pendaftaran' => $idp[$i]
		);
		$this->load->model('M_Ruangan');
		$this->M_Ruangan->input_data_ruangan_pasien($data,'tbl_ruangan_pasien');

		}
		redirect('Admin/Admin/data_ruangan');

	}


	function data_ruangan_pasien_view($id_ruangan){
		$where = array('id_ruangan' => $id_ruangan);
		$this->load->model('M_Ruangan');
		$data['tbl_ruangan'] = $this->M_Ruangan->view_data($where,'tbl_ruangan')->result();
		$data['tbl_pendaftaran'] = $this->M_Ruangan->join_data($id_ruangan);
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_ruangan_pasien_view.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	//....................DATA JADWAL PRAKTEK ..................

	function data_jadwal(){
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->tampil_data();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_jadwal.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_jadwal_input(){
		$this->load->model('M_Jadwal');
		$data['tbl_pendaftaran'] = $this->M_Jadwal->tampil_pasien()->result();
		$data['tbl_ruangan'] = $this->M_Jadwal->tampil_ruangan()->result();
		$data['tbl_dokter'] = $this->M_Jadwal->tampil_dokter()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_jadwal_input.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_jadwal_input_aksi(){
		$idp = $this->input->POST('id_pendaftaran');
		$idd = $this->input->POST('id_dokter');
		$idr = $this->input->POST('id_ruangan');
		$hari = $this->input->POST('hari');
		$jam = $this->input->POST('jam');

		$data = array(
			'id_pendaftaran' => $idp,
			'id_dokter' => $idd,
			'id_ruangan' => $idr,
			'hari'	=> $hari,
			'jam' => $jam
		);
		$this->load->model('M_Jadwal');
		$this->M_Jadwal->input_data($data,'tbl_jadwal');
		redirect('Admin/Admin/data_jadwal');

	}

	function data_jadwal_edit($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->view_data($id_jadwal);
		$data['tbl_pendaftaran'] = $this->M_Jadwal->tampil_pasien()->result();
		$data['tbl_ruangan'] = $this->M_Jadwal->tampil_ruangan()->result();
		$data['tbl_dokter'] = $this->M_Jadwal->tampil_dokter()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_jadwal_edit.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_jadwal_edit_aksi(){
		$id = $this->input->POST('id_jadwal');
		$idp = $this->input->POST('id_pendaftaran');
		$idd = $this->input->POST('id_dokter');
		$idr = $this->input->POST('id_ruangan');
		$hari = $this->input->POST('hari');
		$jam = $this->input->POST('jam');

		$data = array(
			'id_pendaftaran' => $idp,
			'id_dokter' => $idd,
			'id_ruangan' => $idr,
			'hari'	=> $hari,
			'jam' => $jam
		);

		$where = array(
			'id_jadwal' => $id
		);

		$this->load->model('M_Jadwal');
		$this->M_Jadwal->update_data($where,$data,'tbl_jadwal');
		redirect('Admin/Admin/data_jadwal');

	}

	function data_jadwal_delete($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$this->load->model('M_Jadwal');
		$this->M_Jadwal->delete_data($where,'tbl_jadwal');
		redirect('Admin/Admin/data_jadwal');
	}
	

	//............................ DATA PEMBAYARAN 1 ..........................

	function data_pembayaran1(){
		$where = $this->session->userdata('id');
		$this->load->model('M_Pembayaran1');
		$data['tbl_pendaftaran'] = $this->M_Pembayaran1->tampil_data()->result();
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pembayaran1.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pembayaran1_input($id_pembayaran1){
		$where = array('id_pembayaran1' => $id_pembayaran1);
		$this->load->model('M_Pembayaran1');
		$data['tbl_pembayaran1'] = $this->M_Pembayaran1->view_data($id_pembayaran1);
		$data['tbl_pendaftaran'] = $this->M_Pembayaran1->join_data($id_pembayaran1);
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pembayaran1_input.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function data_pembayaran1_input_aksi(){
		$kd = $this->input->POST('kd_pembayaran');
		$idp = $this->input->POST('id_pendaftaran');
		$hr = $this->input->POST('hrg_ruang');
		$tm = $this->input->POST('tgl_masuk');
		$tk = $this->input->POST('tgl_keluar');
		$hrwt = $this->input->POST('hrg_rawat');
		$hp = $this->input->POST('hrg_periksa');
		$ho = $this->input->POST('hrg_obat');
		
		for($i=0; $i<count($idp); $i++){
		$data = array(
			'id_pendaftaran' => $idp[$i],
			'kd_pembayaran' => $kd[$i],
			'hrg_ruang' => $hr[$i],
			'tgl_masuk' => $tm[$i],
			'tgl_keluar' => $tk[$i],
			'hrg_rawat' => $hrwt[$i],
			'hrg_periksa' => $hp[$i],
			'hrg_obat' => $ho[$i]
		);
		$this->load->model('M_Pembayaran1');
		$this->M_Pembayaran1->input_pembayaran_pasien($data,'tbl_pembayaran1');

		}
		redirect('Admin/Admin/data_pembayaran1');
	}

	function data_pembayaran1_view($id_pembayaran1){
		$where = array('id_pembayaran1' => $id_pembayaran1);
		$this->load->model('M_Pembayaran1');
		$data['tbl_pembayaran1'] = $this->M_Pembayaran1->view_data($id_pembayaran1);
		$data['tbl_pendaftaran'] = $this->M_Pembayaran1->join_data($id_pembayaran1);
		$this->load->view('Admin/Template/header.php');
		$this->load->view('Admin/Template/menu.php');
		$this->load->view('Admin/data_pembayaran1_view.php',$data);
		$this->load->view('Admin/Template/footer.php');
	}

	function cetak_data_pembayaran($id_pembayaran1){
		$where = array('id_pembayaran1' => $id_pembayaran1);
		$this->load->model('M_Pembayaran1');
		$data['tbl_pembayaran1'] = $this->M_Pembayaran1->Pembayaran_pasien($id_pembayaran1);
		$this->load->view('Admin/cetak_data_pembayaran.php',$data);
	}

	
}