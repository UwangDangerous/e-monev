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
            if($this->session->userdata('monev_id') != null) {
                $data['judul'] = "E-Monev SKL - Selamat datang di E- Monitoring dan Evaluasi Standard Kemampuan Laboratorium" ;
                $data['bread'] = [
                    [ 'active', '', 'Dashboard' ]
                ];
                $data['sub'] = 'Selamat datang di E- Monitoring dan Evaluasi Standard Kemampuan Laboratorium' ;
    
                $this->load->view('temp/header', $data) ;
                $this->load->view('temp/dsb_header') ;
                $this->load->view('home/index') ;
                $this->load->view('temp/dsb_footer') ;
                $this->load->view('temp/footer') ;
            }else{
                $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
                redirect(MYURL."login") ;
            }
        }

    }


?>