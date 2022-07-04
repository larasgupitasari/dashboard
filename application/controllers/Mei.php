<?php 

class Mei extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mei_model');
	}

	public function index()
	{
		$data['bulan'] = 'Mei';

		$data['Mei'] = $this->Mei_model->getMei();
		$data['Anggaran'] = $this->Mei_model->pie_anggaran();
		$data['Realisasi'] = $this->Mei_model->pie_realisasi();

		$this->load->view('templates/header', $data);
		$this->load->view('home/mei', $data);
		$this->load->view('templates/footer');
	}
}


?>