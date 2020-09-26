<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function masuk(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_login->status("user",$where);
		if($cek->num_rows() > 0){
 
			foreach ($cek->result() as $qad) {
                    $sess_data['username'] = $qad->username;
                    $sess_data['role'] = $qad->role;
					$sess_data['status'] = "sudahlogin";
                    $this->session->set_userdata($sess_data);
                }
 
			redirect(base_url("dashboard"));
 
		}else{
			echo "<script type='text/javascript'>alert('Username / Password Salah atau Tidak Terdaftar');window.location = './';</script>";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}