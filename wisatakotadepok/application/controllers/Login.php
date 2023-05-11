<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Halaman Login'
		];

		$this->load->view('layout/header',$data);
		$this->load->view('login/login');
		$this->load->view('layout/footer');
	}

	public function otentikasi(){
		$this->load->model("user_model","user");
		
		$_username = $this->input->post('username');
		$_password = $this->input->post('password');

		$row = $this->user->login($_username,$_password);
		if(isset($row)){//jika user terdaftar di database
			$this->session->set_userdata('USERNAME',$row->username);
			$this->session->set_userdata('ROLE',$row->role);
			$this->session->set_userdata('USER',$row);

			redirect(base_url().'index.php/home');

		}else{//jika user tidak ada
			redirect(base_url().'index.php/login?status=f');
		}
	}

	public function input_data(){
		$this->load->model('user_model','user');

		$_username = $this->input->post('username');
		$_password = $this->input->post('password');
		$_email = $this->input->post('email');

		$data = [
			'username' => $_username,
			'password' => MD5($_password),
			'email' => $_email,
			'created_at' => date_create('now')->format('Y-m-d H:i:s'),
			'last_login' => date_create('now')->format('Y-m-d H:i:s'),
			'status' => 1,
			'role' => 'public'
		];

		$this->user->insert($data,'users');
		redirect(base_url().'index.php/login');
	}

	public function logout(){
		$this->session->unset_userdata('USERNAME');
		$this->session->unset_userdata('ROLE');
		$this->session->unset_userdata('USER');
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home');
	}
}
