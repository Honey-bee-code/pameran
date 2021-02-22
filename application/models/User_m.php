<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    // public function getAllUsers(){
    //     $query = $this->db->get('users');
    //     return $query->result(); 
    //    }
      
    //    public function insert($user){
    //     $this->db->insert('users', $user);
    //     return $this->db->insert_id(); 
    //    }
      
    //    public function getUser($id){
    //     $query = $this->db->get_where('users',array('id'=>$id));
    //     return $query->row_array();
    //    }
      
    //    public function activate($data, $id){
    //     $this->db->where('users.id', $id);
    //     return $this->db->update('users', $data);
    //    }

    public function tambah($post)
    {
        $param['username'] = $post['Username'];
        $param['password'] = sha1($post['Password']);
        $param['nama'] = $post['Nama'];
        $param['email'] = $post['Email'];
        $param['no_hp'] = $post['Telepon'];
        $param['token'] = hash('sha256', md5(date('Y-m-d')));
        $param['aktif'] = '0';

        
            $this->db->insert('users', $param);
        
    }
}