<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Register Acount'
		];

		$this->load->view('layout/header',$data);
		$this->load->view('register/register');
		$this->load->view('layout/footer');
	}
}
