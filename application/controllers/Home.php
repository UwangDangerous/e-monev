<?php 

    class Home extends CI_Controller{
        public function __construct()
        {
            parent::__construct() ;
            $this->load->model('Home_model') ; 
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->load->view('temp/header') ;
            // $this->load->view('home/index') ;
            $this->load->view('temp/footer') ;
        }

        // public function tambah()
        // {
        //     // lupa

        //     $this->form_validation->set_rules('nip', 'NIP', 'required');
        //     $this->form_validation->set_rules('nama', 'Nama', 'required');

        //     if($this->form_validation->run() == FALSE) {
        //         $this->load->view('temp/header') ;
        //         $this->load->view('home/tambah') ;
        //         $this->load->view('temp/footer') ;
        //     }else{
        //         // nanti ke model
        //         $this->home->addDataUser() ;
        //     }
        // }

    }


?>