<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function index()
	{	
		$data = [
			'title' => 'Edit data user'
		];

		$this->load->view('layout/header',$data);
		$this->load->view('admin/update');
		$this->load->view('layout/footer');
	}

	public function input_data(){
		$this->load->model('user_model','user');

		$_username = $this->input->post('username');
		$_password = $this->input->post('password');
		$_email = $this->input->post('email');
		$_status = $this->input->post('status');
		$_role = $this->input->post('role');
		
		$_idedit = $this->input->post('idedit');

		$data[]=$_username;
		$data[]=MD5($_password);
		$data[]=$_email;
		$data[]=date_create('now')->format('Y-m-d H:i:s');
		$data[]=date_create('now')->format('Y-m-d H:i:s');
		$data[]=$_status;
		$data[]=$_role;

		if(isset($_idedit)){
			$data[]=$_idedit;
			$this->user->update($data);
		}else{
			$this->user->insert($data);
		}
		
		redirect(base_url().'index.php/admin');
	}
}
