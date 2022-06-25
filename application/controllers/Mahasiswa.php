<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index(){
		$data['t_mahasiswa'] = $this->Mahasiswa_model->get_all();
		$this->load->view('mahasiswa/mahasiswa_list.php', $data);
	}

	public function cetak(){
		$data['t_mahasiswa'] = $this->Mahasiswa_model->get_all();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4','potrait');
		$this->pdf->filename = 'mahasiswa';
		$this->pdf->load_view('cetak/mahasiswa'.$data);

	}
}
