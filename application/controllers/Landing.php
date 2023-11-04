<?php 
class Landing extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');

	}

	function index(){
		$data['jadwal'] = $this->m_admin->tampil_data('jadwal')->result();
		// echo '<pre>';var_dump($data);die();	

		// $this->load->view('v2/landing_view',$data);
		$this->load->view('v_landing',$data);
	}
}