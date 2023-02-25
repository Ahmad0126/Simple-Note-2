<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){
		$this->load->view('landing');
	}
    public function register(){
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', array('is_unique' => 'Username sudah ada!'));
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]', array('min_length' => 'Password terlalu pendek!'));
        if($this->form_validation->run() == false){
            $this->load->view('daftar');
        }else{
            $data = [
                'username' => $this->input->post('username'),
                'sandi' => $this->input->post('password'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'usia' => $this->input->post('umur'),
            ];
            $query = 'CREATE table '.$data['username'].'(noteid INT NOT NULL auto_increment,judul VARCHAR(255) NOT NULL,catatan TEXT,PRIMARY KEY(noteid))';
            $this->db->query($query);
            $this->db->insert('users', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Mendaftar<br>Silahkan Login</div>');
			if($this->session->userdata('user') == 'admin'){
				redirect('Admin');
			}else{
            	redirect('Home/login');
			}
        }
    }
    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]', array('min_length' => 'Password terlalu pendek!'));
        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{
			$this->masuk();
		}
    }
	public function logout(){
		$this->session->unset_userdata('user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning">Anda telah Logout!</div>');
		redirect('Home/login');
	}
	private function masuk(){
		$username = $this->input->post('username');
		$sandi = $this->input->post('password');
		$query = $this->db->get_where('users', ['username' => $username])->row_array();
		if($query){
			if($sandi == $query['sandi']){
				$data = $username;
				$this->session->set_userdata('user', $data);
				if($data == 'admin'){
					redirect('Admin');
				}else{
					redirect('User');
				}
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Password salah!</div>');
				redirect('Home/login');
			}
		}else{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Username tidak ada!</div>');
			redirect('Home/login');
		}

	}
}
