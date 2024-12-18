<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{

    public function update(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level'),
        );
        $where = array(
            'id_user' =>  $this->input->post('id_user')
        );
        $this->db->update('user',$data,$where);
    }

    public function update_kategori(){
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
           
        );
        $where = array(
            'id_kategori' =>  $this->input->post('id_kategori')
        );
        $this->db->update('kategori',$data,$where);
    }
}
