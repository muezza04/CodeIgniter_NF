<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{	
		$data = [
			'title' => 'View Data'
		];

		$this->load->model('user_model','user');

		$tamp['list_user'] = $this->user->getAll();

		$this->load->view('layout/header',$data);
		$this->load->view('admin/admin',$tamp);
		$this->load->view('layout/footer');
	}

	public function update(){
		$_id = $this->input->get('id');
		$this->load->model('user_model','user');
		$usr_edit = $this->user->findById($_id);

		$data = [
			'title' => 'Update Data'
		];
		$data['usr_edit'] = $usr_edit;
		$this->load->view('layout/header',$data);
		$this->load->view('admin/update',$data);
		$this->load->view('layout/footer');
	}

	public function delete(){
		$_id = $this->input->get('id');
		$this->load->model('user_model','user');
		$this->user->delete($_id);

		redirect(base_url().'index.php/admin');
	}
}
