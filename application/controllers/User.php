<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function _construct()
    {   
        parent:: _construct();
        cek_login();
    }
    public function index()
    { 
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->set_userdata('email')])->row_array();
        $this->load->view('user/index', $data) ;
    }
}