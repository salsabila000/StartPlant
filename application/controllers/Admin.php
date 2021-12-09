 <?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function _construct()
    {
        parent::_construct();
        login();
    }

    //manajemen Buku
    public function index()
    {
        $data['judul'] = 'Data E-Book'; 
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['ebook'] = $this->ModelEbook->getEbook()->result_array();
        $data['kategori'] = $this->ModelEbook->getKategori()->result_array();
        $this->form_validation->set_rules('judul_ebook', 'Title Ebook', 'required|min_length[3]', [
            'required' => 'Title Is Required',
            'min_length' => 'Ebook Title Is Too Short'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Price Is Required',
        ]);

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'judul_ebook' => $this->input->post('judul_ebook', true),
                'image' => $gambar,
                'harga' => $this->input->post('harga', true)
            ];

            $this->ModelEbook->simpanEbook($data);
            redirect('admin');
        }
    }
    public function hapusEbook()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelEbook->hapusEbook($where);
        redirect('admin');
    }
    
}

