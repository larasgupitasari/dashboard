<?php 

class Home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$data['bulan'] = 'Januari';

		$data['Januari'] = $this->Home_model->getJanuari();
		$data['Anggaran'] = $this->Home_model->pie_anggaran();
		$data['Realisasi'] = $this->Home_model->pie_realisasi();

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}



}


?>