<?php 
class Landing extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
		$this->load->model('crud_model');
	}

	function index(){
		$data['jadwal'] = $this->m_admin->tampil_data('jadwal')->result();
		// echo '<pre>';var_dump($data);die();	

		// $this->load->view('v2/landing_view',$data);
		$this->load->view('v_landing',$data);
	}
	
	public function landing_absen_go()
	{
		// var_dump($_POST);die();
		
		//variabel data
		$data = array(
			'nama_karyawan' => $this->input->post('nama_karyawan'),
			'lokasi' => $this->input->post('lokasi')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('absen', $data);
		
		//redirect
		$this->load->view('home_absen_success',$data);		
	}	

}