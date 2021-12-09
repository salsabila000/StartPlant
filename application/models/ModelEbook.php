<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelEbook extends CI_Model
{
    //manajemen buku
    public function getEbook()
    {
        return $this->db->get('ebook');
    }
    public function ebookWhere($where)
    {
        return $this->db->get_where('ebook', $where);
    }

    public function simpanEbook($data = null)
    {
        $this->db->insert('ebook',$data);
    }
    public function updateEbook($data = null, $where = null)
    {   
        $this->db->update('ebook', $data, $where);
    }
    public function hapusEbook($where = null)
    {
        $this->db->delete('ebook', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('ebook');
        return $this->db->get()->row($field);
    }
 
    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }
    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }
    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }
    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }
    //join
    public function joinKategoriEbook($where)
    {
        $this->db->select('ebook.id_kategori,kategori.kategori');
        $this->db->from('ebook');
        $this->db->join('kategori','kategori.id = ebook.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}
