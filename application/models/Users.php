<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_model {
    public function getdata(){
        return $this->db->get('users')->result_array();
    }
    public function getnote($user){
        return $this->db->get($user)->result_array();
    }
    public function getuser($user){
        return $query = $this->db->get_where('users', array('username' => $user))->row();
    }
    public function del($id){
        $this->db->select('username');
        $query = $this->db->get_where('users', array('userid' => $id))->row();
        $this->db->query('DROP TABLE '.$query->username);
        $this->db->delete('users', array('userid' => $id));
    }
    public function ubah($id){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pass = $this->input->post('pl');
        $query = $query = $this->db->get_where('users', array('userid' => $id))->row();
        if($pass == $query->sandi){
            $array = array('nama' => $nama, 'email' => $email);
            $this->db->set($array);
            $this->db->where('userid', $id);
            $this->db->update('users');
        }else{
            $this->session->set_flashdata('pesan', '<small class="text-danger">Password salah!</small>');
            redirect('User/profile');
        }
    }
    public function pass($id){
        $pl = $this->input->post('pl');
        $pb = $this->input->post('pb');
        $pk = $this->input->post('pk');
        $query = $query = $this->db->get_where('users', array('userid' => $id))->row();
        if($pl == $query->sandi && $pb == $pk){
            $array = array('sandi' => $pb);
            $this->db->set($array);
            $this->db->where('userid', $id);
            $this->db->update('users');
        }else if($pl != $query->sandi && $pb == $pk){
            $this->session->set_flashdata('pesan1', '<small class="text-danger">Password salah!</small>');
            redirect('User/password');
        }else if($pl == $query->sandi && $pb != $pk){
            $this->session->set_flashdata('pesan2', '<small class="text-danger">Password tidak sama!</small>');
            redirect('User/password');
        }else{
            $this->session->set_flashdata('pesan1', '<small class="text-danger">Password salah!</small>');
            $this->session->set_flashdata('pesan2', '<small class="text-danger">Password tidak sama!</small>');
            redirect('User/password');
        }
    }
    public function _see($id){
        $table = $this->session->userdata('user');
        return $query = $this->db->get_where($table, array('noteid' => $id))->row();
    }
    public function _save(){
        $judul = $this->input->post('judul');
        $catatan = $this->input->post('catatan');
        $table = $this->session->userdata('user');
        $array = array('judul' => $judul, 'catatan' => $catatan);
        $this->db->insert($table, $array);
    }
    public function update($id){
        $judul = $this->input->post('judul');
        $catatan = $this->input->post('catatan');
        $table = $this->session->userdata('user');
        $array = array('judul' => $judul, 'catatan' => $catatan);
        $this->db->set($array);
        $this->db->where('noteid', $id);
        $this->db->update($table);
    }
    public function _dell($id){
        $table = $this->session->userdata('user');
        $this->db->delete($table, array('noteid' => $id));
    }
}