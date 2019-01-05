<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->db2 = $this->load->database('layoutmesin',TRUE);
		// cek login
		if($this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url().'Welcome');
		}

	}

	function index(){
		$head['head']="dashboard";
		$this->load->view('admin/header',$head);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome?pesan=logout');
	}

	function PurchasingOrder(){
		$head['head']="po";
		$this->load->view('admin/header',$head);
		$this->load->view('admin/Purchasing/PurchasingOrder');
		$this->load->view('admin/footer');
	}
	
	function test(){
		$this->load->view('test');
	}

	function TMOF(){
		$head['head']="tm";
		$data['mesin'] = $this->db2->query("show tables")->result();
		$this->load->view('admin/header',$head);
		$this->load->view('admin/PPIC/TMOF',$data);
		$this->load->view('admin/footer');
	}

	function TMOFPenawaran(){
		$head['head']="tmpenawaran";
		$data['mesin'] = $this->db2->query("show tables")->result();
		$this->load->view('admin/header',$head);
		$this->load->view('admin/Sales/TMOFPenawaran',$data);
		$this->load->view('admin/footer');
	}

}
