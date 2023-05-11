<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

	public function index()
	{
		$temp = [
			'title' => 'View Komentar'
		];

        $this->load->model('komentar_model','komentar');

		$tamp['list_user'] = $this->komentar->getInnerData();

		$this->load->view('layout/header',$temp);
		$this->load->view('komentar/komentar');
		$this->load->view('layout/footer');
	}
}
