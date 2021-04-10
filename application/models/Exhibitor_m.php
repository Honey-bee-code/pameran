<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Exhibitor_m extends CI_Model {

    public function get($id=null)
    {
        $this->db->select('*');
        $this->db->from('exhibitor');
        if($id != null){
            $this->db->where('exhibitor.exhibitor_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function prestasi($id)
    {
        $this->db->select('*, prestasi.detail as prestasi');
        $this->db->from('exhibitor');
        $this->db->join('prestasi', 'prestasi.exhibitor_id = exhibitor.exhibitor_id');
        $this->db->where('exhibitor.exhibitor_id', $id);
        $query = $this->db->get();
        return $query;
    }
    public function exhibition($id)
    {
        $this->db->select('*, exhibition.detail as exhibition');
        $this->db->from('exhibitor');
        $this->db->join('exhibition', 'exhibition.exhibitor_id = exhibitor.exhibitor_id');
        $this->db->where('exhibitor.exhibitor_id', $id);
        $query = $this->db->get();
        return $query;
    }
    public function karya($id)
    {
        $this->db->select('*, karya.detail as karya');
        $this->db->from('exhibitor');
        $this->db->join('karya', 'karya.exhibitor_id = exhibitor.exhibitor_id');
        $this->db->where('exhibitor.exhibitor_id', $id);
        $query = $this->db->get();
        return $query;
    }

    

    // public function tambah($post)
    // {
    //     $param['username'] = $post['Username'];
    //     $param['password'] = sha1($post['Password']);
    //     $param['nama'] = $post['Nama'];
    //     $param['email'] = $post['Email'];
    //     $param['no_hp'] = $post['Telepon'];
    //     $param['aktif'] = '0';
    //     $param['joined'] = date('Y-m-d');

        
    //     $this->db->insert('users', $param);
        
    // }
}