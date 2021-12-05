<?php

class Autentifikasi extends CI_Controller
{
    public function index()
    {
        if ($this-> session->userdata('email')){
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['user'] = '';
            $this->load->view('autentifikasi/login', $data);       
        } else {
            $this-> login();
        }
    } 
    public function registrasi()
    {
        if ($this->session->userdata('email')) {
        redirect('user');
        } 
        $this->form_validation->set_rules('nama', 'Full Name', 
        'required', [
            'required' => 'Nama Belum diis!!'
        ]);
        $this->form_validation->set_rules('email', 'Alamat Email', 
        'required|trim|valid_email|is_unique[user.email]', [
        'valid_email' => 'Email Tidak Benar!!',
        'required' => 'Email Belum diisi!!',
        'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 
        'required|trim|min_length[3]', [
        'min_length' => 'Password Terlalu Pendek'
        ]);
       
        if ($this->form_validation->run() == false) {
            
            $this->load->view('autentifikasi/registrasi');
          
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1         
            ];
            $this->ModelUser->simpanData($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! 
            akun member anda sudah dibuat. Silahkan Aktivasi Akun anda </div>'); 
            redirect('autentifikasi');
        }
    }
    private function login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
            
        $password = $this->input->post('password', true);   
        $user = $this->ModelUser->cekData(['email' => $email])->row_array();    
        if ($user) {
        
            if ($user['is_active'] == 1) {
               
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('autentifikasi');
            }    
    }
    public function logout()
    {   
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('autentifikasi');
    }
}