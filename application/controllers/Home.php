<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('all/home');
    }
    public function login() 
    {
        $this->load->view('autentifikasi/login');
    }
    public function registrasi() 
    {
        $this->load->view('autentifikasi/registrasi');
    }
    public function aboutus() 
    {
        $this->load->view('all/aboutus');
    }
}

?>