<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Users');
	}
	public function index(){
		if($this->session->userdata('user') != 'admin'){
			redirect('Home/login');
		}
		$data['users'] = $this->Users->getdata();
        $this->load->view('admin', $data);
	}
	public function del(){
		$this->Users->del($this->input->get('id'));
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning text-center">User telah dihapus</div>');
		redirect('Admin');
	}
}