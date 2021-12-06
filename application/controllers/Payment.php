<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function _construct()
    {   
        parent:: _construct();
        login();
        
    }
    public function index()
    {
        $this->load->view('all/payment');
    }

    public function cek() 
    {  
        if ($this->session->userdata('email')) {
            redirect('payment');
        } else{
            redirect('autentifikasi');
        }
        
    } 
}