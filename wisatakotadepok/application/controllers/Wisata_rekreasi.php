<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_rekreasi extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Tempat Wisata Rekreasi'
		];

		$this->load->view('layout/header',$data);
		$this->load->view('wisata_rekreasi/wisata_rekreasi');
		$this->load->view('layout/footer');
	}
}
