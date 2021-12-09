<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function _construct()
    {   
        parent:: _construct();
        login();
    }
    public function index()
    { 
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->set_userdata('email')])->row_array();
        $this->load->view('user/index', $data) ;     
    }
    public function aboutus() 
    {
        $this->load->view('user/aboutus');
    }
    public function guide() 
    {
        $this->load->view('user/guide');
    }

    public function how_to_order() 
    {
        $this->load->view('user/how_to_order');
    }
    public function buy_plant()  
    {
        $this->load->view('user/buy_login');
    }
    public function download()
    {
        $this->load->view('user/download');
    }
}
