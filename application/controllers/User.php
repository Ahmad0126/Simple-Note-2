<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Users');
        if($this->session->userdata('user') == 'admin' || $this->session->userdata('user') == null){
            redirect('Home/login');
        }
    }
	public function index(){
        $data['note'] = $this->Users->getnote($this->session->userdata('user'));
        $data['notes'] = false;
		$this->load->view('user', $data);
	}
    public function profile(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pl', 'Password', 'required');
        if($this->form_validation->run() == false){
            $data['profile'] = $this->Users->getuser($this->session->userdata('user'));
            $this->load->view('profl', $data);
        }else{
            $data['profile'] = $this->Users->getuser($this->session->userdata('user'));
            $id = $data['profile']->userid;
			$this->Users->ubah($id);
            redirect(base_url('User'));
		}
	}
    public function password(){
        $this->form_validation->set_rules('pk', 'Konfirmasi Password', 'required');
        $this->form_validation->set_rules('pb', 'Password baru', 'required');
        $this->form_validation->set_rules('pl', 'Password Lama', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('pass');
        }else{
            $data['profile'] = $this->Users->getuser($this->session->userdata('user'));
            $id = $data['profile']->userid;
			$this->Users->pass($id);
            redirect(base_url('User'));
		}
	}
    public function see(){
        $id = $this->input->get('id');
        $data['note'] = $this->Users->getnote($this->session->userdata('user'));
        $data['notes'] = $this->Users->_see($id);
		$this->load->view('user', $data);
    }
    public function save(){
        $id = $this->input->get('id');
        if($id == false){
            $this->Users->_save();
        }else{
            $this->Users->update($id);
        }
        redirect('User');
    }
    public function dell(){
        $id = $this->input->get('id');
        $this->Users->_dell($id);
        redirect('User');
    }
}