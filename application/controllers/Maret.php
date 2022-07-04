<?php 

class Maret extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mar_model');
	}

	public function index()
	{
		$data['bulan'] = 'Maret';

		$data['Maret'] = $this->Mar_model->getMaret();
		$data['Anggaran'] = $this->Mar_model->pie_anggaran();
		$data['Realisasi'] = $this->Mar_model->pie_realisasi();

		$this->load->view('templates/header', $data);
		$this->load->view('home/mar', $data);
		$this->load->view('templates/footer');
	}
}


?>