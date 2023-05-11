<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_kuliner extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Tempat Wisata Kuliner'
		];

		$this->load->view('layout/header',$data);
		$this->load->view('wisata_kuliner/wisata_kuliner');
		$this->load->view('layout/footer');
	}
}
