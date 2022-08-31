<?php 

    class Login extends CI_Controller{
        public function __construct()
        {
            parent::__construct() ;
            $this->load->model('Login_model') ; 
            $this->load->library('form_validation');
        }

        public function index()
        {
            if($this->session->userdata('monev') == null) {
                $data['judul'] = MYWEB ;
    
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if($this->form_validation->run() == FALSE) {
                    $this->load->view('temp/header', $data) ;
                    $this->load->view('login/index') ;
                    $this->load->view('temp/footer') ;
                }else{
                    // login
                    $this->Login_model->cek_login() ;
                }
            }else{
                redirect(MYURL."") ;
            }
        }

        public function logout()
        {
            $this->session->sess_destroy() ;
            redirect(MYURL."login") ;
        }


    }


?>