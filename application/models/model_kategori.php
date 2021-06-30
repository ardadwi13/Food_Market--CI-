<?php 

class Model_kategori extends CI_Model{

    public function data_salad(){
        return $this->db->get_where("tb_menu",array('kategori' => 'salad'));
    }

    public function data_seafood(){
        return $this->db->get_where("tb_menu",array('kategori' => 'seafood'));
    }

    public function data_meat(){
        return $this->db->get_where("tb_menu",array('kategori' => 'meat'));
    }

    public function data_drink(){
        return $this->db->get_where("tb_menu",array('kategori' => 'drink'));
    }

    public function data_junk_food(){
        return $this->db->get_where("tb_menu",array('kategori' => 'junk food'));
    }
}