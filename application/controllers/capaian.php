<?php 
 
class capaian extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->model('M_capaian');
		$this->load->model('M_target');
		date_default_timezone_set('Asia/Makassar');
		if($this->session->userdata('status') != "sudahlogin"){
			redirect(base_url("login"));
		}
	}
 

	function index(){
		$where = array('id' => '1');
		$data['capaian'] = $this->M_capaian->tampil_data()->result();
		$data['target'] = $this->M_target->tampil_data()->result();
		$data['capaian'] = $this->M_capaian->edit_data($where,'capaian')->result();
		$this->load->view('template/header');
		switch ($this->session->userdata('role')) {
		case "pkn":
			$this->load->view('template/capaianpkn',$data);
		break;
		case "lelang":
			$this->load->view('template/capaianlelang',$data);
		break;
		case "penilaian":
			$this->load->view('template/capaianpenilaian',$data);
		break;
		case "piutang":
			$this->load->view('template/capaianpiutang',$data);
		break;
		case "kakan":
			$this->load->view('template/capaianreadonly',$data);
		break;
		default:
			$this->load->view('template/capaian',$data);
		}
		$this->load->view('template/footer');
	}

	function updatepkn(){
		$id = '1';
		$c_pnbp_aset = str_replace ('.', '', $this->input->post('c_pnbp_aset'));
		$c_utilisasi = str_replace ('.', '', $this->input->post('c_utilisasi'));
		$c_sertifikat = str_replace ('.', '', $this->input->post('c_sertifikat'));
		$c_sbsk = str_replace ('.', '', $this->input->post('c_sbsk'));
		$c_portofolio_aset = str_replace ('.', '', $this->input->post('c_portofolio_aset'));
		$c_rereval = str_replace ('.', '', $this->input->post('c_rereval'));
		$c_tgl1 = date('Y-m-d H:i:s');
	 
		$data = array(
			'c_pnbp_aset' => $c_pnbp_aset,
			'c_utilisasi' => $c_utilisasi,
			'c_sertifikat' => $c_sertifikat,
			'c_sbsk' => $c_sbsk,
			'c_portofolio_aset' => $c_portofolio_aset,
			'c_rereval' => $c_rereval,
			'c_tgl1' => $c_tgl1
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_capaian->update_data($where,$data,'capaian');
		redirect('capaian');
	}

	function updatepenilaian(){
		$id = '1';
		$c_deviasi = $this->input->post('c_deviasi');
		$c_tgl2 = date('Y-m-d H:i:s');
	 
		$data = array(
			'c_deviasi' => $c_deviasi,
			'c_tgl2' => $c_tgl2
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_capaian->update_data($where,$data,'capaian');
		redirect('capaian');
	}

	function updatelelang(){
		$id = '1';
		$c_pnbp_lelang = str_replace ('.', '', $this->input->post('c_pnbp_lelang'));
		$c_pl1 = str_replace ('.', '', $this->input->post('c_pl1'));
		$c_pegadaian = str_replace ('.', '', $this->input->post('c_pegadaian'));
		$c_produktivitas = $this->input->post('c_produktivitas');
		$c_lelangeauction = $this->input->post('c_lelangeauction');
		$c_permohonanonline = $this->input->post('c_permohonanonline');
		$c_tgl3 = date('Y-m-d H:i:s');
	 
		$data = array(
			'c_pnbp_lelang' => $c_pnbp_lelang,
			'c_pl1' => $c_pl1,
			'c_pegadaian' => $c_pegadaian,
			'c_produktivitas' => $c_produktivitas,
			'c_lelangeauction' => $c_lelangeauction,
			'c_permohonanonline' => $c_permohonanonline,
			'c_tgl3' => $c_tgl3
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_capaian->update_data($where,$data,'capaian');
		redirect('capaian');
	}

	function updatepiutang(){
		$id = '1';
		$c_pnbp_piutang = str_replace ('.', '', $this->input->post('c_pnbp_piutang'));
		$c_tingkatoutstanding = str_replace ('.', '', $this->input->post('c_tingkatoutstanding'));
		$c_penyelesaianbkpn = str_replace ('.', '', $this->input->post('c_penyelesaianbkpn'));
		$c_tgl4 = date('Y-m-d H:i:s');
	 
		$data = array(
			'c_pnbp_piutang' => $c_pnbp_piutang,
			'c_tingkatoutstanding' => $c_tingkatoutstanding,
			'c_penyelesaianbkpn' => $c_penyelesaianbkpn,
			'c_tgl4' => $c_tgl4
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_capaian->update_data($where,$data,'capaian');
		redirect('capaian');
	}
}