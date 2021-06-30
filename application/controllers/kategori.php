<?php 

class Kategori extends CI_Controller{
    public function salad(){
        $data['salad'] = $this->model_kategori->data_salad()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('salad',$data);
        $this->load->view('templates/footer');
    }

    public function seafood(){
        $data['seafood'] = $this->model_kategori->data_seafood()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('seafood',$data);
        $this->load->view('templates/footer');
    }

    public function meat(){
        $data['meat'] = $this->model_kategori->data_meat()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('meat',$data);
        $this->load->view('templates/footer');
    }

    public function drink(){
        $data['drink'] = $this->model_kategori->data_drink()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('drink',$data);
        $this->load->view('templates/footer');
    }
    public function junk_food(){
        $data['junk_food'] = $this->model_kategori->data_junk_food()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('junk_food',$data);
        $this->load->view('templates/footer');
    }
}