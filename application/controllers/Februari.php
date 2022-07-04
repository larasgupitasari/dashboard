<?php 

class Februari extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Feb_model');
	}

	public function index()
	{
		$data['bulan'] = 'Februari';

		$data['Februari'] = $this->Feb_model->getFebruari();
		$data['Anggaran'] = $this->Feb_model->pie_anggaran();
		$data['Realisasi'] = $this->Feb_model->pie_realisasi();

		$this->load->view('templates/header', $data);
		$this->load->view('home/feb', $data);
		$this->load->view('templates/footer');
	}
}


?>