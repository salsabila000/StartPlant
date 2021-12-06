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
    public function guide() 
    {
        $this->load->view('all/guide');
    }
    public function buy_plant() 
    {
        $this->load->view('all/buy_plant');
    }
    public function how_to_order() 
    {
        $this->load->view('all/how_to_order');
    }
}

?>