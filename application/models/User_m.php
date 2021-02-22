<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {


    public function login($post)
    {
        $aktif = '1';
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $this->db->where('aktif', $aktif);
        $query = $this->db->get();
        return $query;
    }

    public function activate($token)
    {
        $param['aktif'] = '1';

        $this->db->where('password', $token);
        return $this->db->update('users', $param);
    }

    public function tambah($post)
    {
        $param['username'] = $post['Username'];
        $param['password'] = sha1($post['Password']);
        $param['nama'] = $post['Nama'];
        $param['email'] = $post['Email'];
        $param['no_hp'] = $post['Telepon'];
        $param['aktif'] = '0';

        
        $this->db->insert('users', $param);
        
    }
}