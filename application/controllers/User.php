<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function _construct()
    {
        parent::_construct();
        cek_login();
    }
    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('all/home', $data);
        $this->load->view('all/', $data);
        $this->load->view('all/', $data);
        $this->load->view('user/index', $data);
        $this->load->view('all/aboutus');
    }
    public function userr()
    {
        $data['judul'] = 'Data User';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 1);
        $data['userr'] = $this->db->get('user')->result_array();
        $this->load->view('all/home', $data);
        $this->load->view('all/', $data);
        $this->load->view('all/', $data);
        $this->load->view('all/aboutus');
    }
   
}
