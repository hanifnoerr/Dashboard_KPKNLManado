<?php 
 
class Target extends CI_Controller{
 
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
		$data['target'] = $this->M_target->edit_data($where,'target')->result();
		$this->load->view('template/header');
		switch ($this->session->userdata('role')) {
		case "pkn":
			$this->load->view('template/targetpkn',$data);
		break;
		case "lelang":
			$this->load->view('template/targetlelang',$data);
		break;
		case "penilaian":
			$this->load->view('template/targetpenilaian',$data);
		break;
		case "piutang":
			$this->load->view('template/targetpiutang',$data);
		break;
		case "kakan":
			$this->load->view('template/targetreadonly',$data);
		break;
		default:
			$this->load->view('template/target',$data);
		}
		$this->load->view('template/footer');
	}

	function updatepkn(){
		$id = '1';
		$pnbp_aset = str_replace ('.', '', $this->input->post('pnbp_aset'));
		$utilisasi = str_replace ('.', '', $this->input->post('utilisasi'));
		$sertifikat = str_replace ('.', '', $this->input->post('sertifikat'));
		$sbsk = str_replace ('.', '', $this->input->post('sbsk'));
		$portofolio_aset = str_replace ('.', '', $this->input->post('portofolio_aset'));
		$rereval = str_replace ('.', '', $this->input->post('rereval'));
		$tgl1 = date('Y-m-d H:i:s');
	 
		$data = array(
			'pnbp_aset' => $pnbp_aset,
			'utilisasi' => $utilisasi,
			'sertifikat' => $sertifikat,
			'sbsk' => $sbsk,
			'portofolio_aset' => $portofolio_aset,
			'rereval' => $rereval,
			'tgl1' => $tgl1
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_target->update_data($where,$data,'target');
		redirect('target');
	}

	function updatepenilaian(){
		$id = '1';
		$deviasi = $this->input->post('deviasi');
		$tgl2 = date('Y-m-d H:i:s');
	 
		$data = array(
			'deviasi' => $deviasi,
			'tgl2' => $tgl2
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_target->update_data($where,$data,'target');
		redirect('target');
	}

	function updatelelang(){
		$id = '1';
		$pnbp_lelang = str_replace ('.', '', $this->input->post('pnbp_lelang'));
		$pl1 = str_replace ('.', '', $this->input->post('pl1'));
		$pegadaian = str_replace ('.', '', $this->input->post('pegadaian'));
		$produktivitas = $this->input->post('produktivitas');
		$lelangeauction = $this->input->post('lelangeauction');
		$permohonanonline = $this->input->post('permohonanonline');
		$tgl3 = date('Y-m-d H:i:s');
	 
		$data = array(
			'pnbp_lelang' => $pnbp_lelang,
			'pl1' => $pl1,
			'pegadaian' => $pegadaian,
			'produktivitas' => $produktivitas,
			'lelangeauction' => $lelangeauction,
			'permohonanonline' => $permohonanonline,
			'tgl3' => $tgl3
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_target->update_data($where,$data,'target');
		redirect('target');
	}

	function updatepiutang(){
		$id = '1';
		$pnbp_piutang = str_replace ('.', '', $this->input->post('pnbp_piutang'));
		$tingkatoutstanding = str_replace ('.', '', $this->input->post('tingkatoutstanding'));
		$penyelesaianbkpn = str_replace ('.', '', $this->input->post('penyelesaianbkpn'));
		$tgl4 = date('Y-m-d H:i:s');
	 
		$data = array(
			'pnbp_piutang' => $pnbp_piutang,
			'tingkatoutstanding' => $tingkatoutstanding,
			'penyelesaianbkpn' => $penyelesaianbkpn,
			'tgl4' => $tgl4
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_target->update_data($where,$data,'target');
		redirect('target');
	}
}