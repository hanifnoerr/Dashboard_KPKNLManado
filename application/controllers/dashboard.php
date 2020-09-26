<?php 
 
class dashboard extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->model('M_capaian');
		$this->load->model('M_target');
	
		if($this->session->userdata('status') != "sudahlogin"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data['capaian'] = $this->M_capaian->tampil_data()->result();
		$data['target'] = $this->M_target->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/dashboard',$data);
		$this->load->view('template/footer',$data);
	}

}