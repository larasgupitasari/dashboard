<?php 

class April extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Apr_model');
	}

	public function index()
	{
		$data['bulan'] = 'April';

		$data['April'] = $this->Apr_model->getApril();
		$data['Anggaran'] = $this->Apr_model->pie_anggaran();
		$data['Realisasi'] = $this->Apr_model->pie_realisasi();

		$this->load->view('templates/header', $data);
		$this->load->view('home/apr', $data);
		$this->load->view('templates/footer');
	}
}


?>