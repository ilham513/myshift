<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}

		$this->load->model('m_admin');
		$this->load->model('crud_model');
	}

	function index(){
		$this->load->view('v_admin');
	}

	function penyewa(){
		// $data['penyewa'] = $this->m_admin->tampil_data('penyewa')->result();
		$data['array_penyewa'] = $this->crud_model->mengambil_data('penyewa');		

		$this->load->view('v_admin_penyewa', $data);
	}

	function input(){
		$this->load->view('v_admin_input');
	}

	function input_go(){
		$this->m_admin->input_data('penyewa');
		redirect(site_url("admin/penyewa"));
	}

	function edit($id){
		$data = $this->m_admin->edit($id);

		$this->load->view('v_admin_edit_penyewa', $data);
	}

	function edit_go($id){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$no_telp = $this->input->post('no_telp');
	
		$data = array(
			'nama' => $nama,
			'no_telp' => $no_telp,
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update_data($where,$data,'penyewa');		
		redirect(site_url("admin/penyewa"));
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_admin->hapus_data($where,'penyewa');
		redirect(site_url("admin/penyewa"));
	}

	function jadwal(){
		$data['jadwal'] = $this->m_admin->tampil_data('jadwal')->result();
		// echo '<pre>';var_dump($data);die();
		$this->load->view('v_admin_jadwal',$data);		
	}

	function jadwal_otomatis(){
		set_time_limit(120);
		$this->load->model('m_admin');
		$data['penyewa'] = $this->m_admin->tampil_data('penyewa')->result();
		$data['waktu'] = $this->m_admin->tampil_data('waktu')->result();
		$this->load->view('v_admin_jadwal_otomatis',$data);		
	}

	function jadwal_reset(){
		$this->db->truncate('jadwal');

		$url = site_url('admin/jadwal');

		echo "<script>
		alert('Data jadwal berhasil direset!');
		window.location.href='$url';
		</script>";
	}

	function jadwal_edit($id){
		$data['edit'] = $this->m_admin->jadwal_edit($id);

		$waktu_full = $this->m_admin->tampil_data('waktu')->result();
		foreach ($waktu_full as $waktu_full) {
			$data['waktu'][] = $waktu_full->hari.", ".$waktu_full->jam;
		}

		$jadwal_full = $this->m_admin->tampil_data('jadwal')->result();
		foreach ($jadwal_full as $jadwal_full) {
			$data['waktu'] = array_diff($data['waktu'], array($jadwal_full->waktu_sewa));
		}
		// echo '<pre>';var_dump($data);die();		

		$this->load->view('v_admin_jadwal_edit',$data);
	}

	function jadwal_edit_go(){
		$id = $this->input->post('id');
		$nama_penyewa = $this->input->post('nama_penyewa');
		$waktu_sewa = $this->input->post('waktu_sewa');
	
		// $data_waktu_sewa = substr($waktu_sewa,0, 12);
		// $data = $this->m_admin->tampil_data('jadwal')->result();

		// foreach($data as $data){
		// 	$db_data_waktu_sewa = substr($data->waktu_sewa, 0, 12);
		// 	// echo $db_data_waktu_sewa."|";
		// 	// echo $data_waktu_sewa."<br/>";
		// 	if($data_waktu_sewa == $db_data_waktu_sewa){
		// 		echo '<h1>Ada Waktu Yang bentrok</h1>';die();
		// 	}
		// }

		// var_dump($data);die();

		$data = array(
			'nama_penyewa' => $nama_penyewa,
			'waktu_sewa' => $waktu_sewa,
		);

		// echo '<pre>';var_dump($data);die();
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update_data($where,$data,'jadwal');		
		redirect(site_url("admin/jadwal"));
	}
	function jadwal_hapus($id){
		$where = array('id' => $id);
		$this->m_admin->hapus_data($where,'jadwal');
		redirect(site_url("admin/jadwal"));
	}

	function jadwal_satuan(){
		$penyewa_full = $this->m_admin->tampil_data('penyewa')->result();
		foreach ($penyewa_full as $penyewa_full) {
			$data['penyewa'][] = $penyewa_full->nama;
		}

		$waktu_full = $this->m_admin->tampil_data('waktu')->result();
		foreach ($waktu_full as $waktu_full) {
			$data['waktu'][] = $waktu_full->hari.", ".$waktu_full->jam;
		}

		$jadwal_full = $this->m_admin->tampil_data('jadwal')->result();
		foreach ($jadwal_full as $jadwal_full) {
			// $data['waktu'][] = $jadwal_full->waktu_sewa;
			$data['waktu'] = array_diff($data['waktu'], array($jadwal_full->waktu_sewa));
		}

		// echo '<pre>';var_dump($data);die();
		$this->load->view('v_admin_jadwal_satuan', $data);
	}

	function jadwal_satuan_go(){
		$this->m_admin->input_data('jadwal_satuan');
		redirect(site_url("admin/jadwal"));
	}

	function waktu(){
		// $data['waktu'] = $this->m_admin->tampil_data('waktu')->result();
		$data['array_waktu'] = $this->crud_model->mengambil_data('waktu');				
		
		$this->load->view('v_admin_waktu', $data);
	}

	function edit_waktu($id){
		$data = $this->m_admin->edit_waktu($id);
		
		$this->load->view('v_admin_edit_waktu', $data);
	}

	function hapus_waktu($id){
		$where = array('id' => $id);
		$this->m_admin->hapus_data($where,'waktu');
		redirect(site_url("admin/waktu"));
	}

	function edit_waktu_go($id){
		$id = $this->input->post('id');
		$hari = $this->input->post('hari');
		$jam = $this->input->post('jam');
	
		$data = array(
			'hari' => $hari,
			'jam' => $jam,
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_admin->update_data($where,$data,'waktu');		
		redirect(site_url("admin/waktu"));
	}

	function input_waktu(){
		$this->load->view('v_admin_input_waktu');
	}

	function input_waktu_go(){
		$this->m_admin->input_data('waktu');
		redirect(site_url("admin/waktu"));
	}
}