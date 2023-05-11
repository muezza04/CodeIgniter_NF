<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Profile Website Wisata Depok'
		];

		$this->load->view('layout/header',$data);
		$this->load->view('profile/profile');
		$this->load->view('layout/footer');
	}
}
