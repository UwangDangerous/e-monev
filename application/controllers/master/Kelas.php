<?php 

class Kelas extends CI_Controller{
    public function __construct()
    {
        parent::__construct() ;
        $this->load->model('Master_model') ; 
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $data['judul'] = "Kelas Terapi - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ 'active', '', 'Kelas Terapi' ]
            ];
            $data['sub'] = 'Kelas Terapi' ;
            $data['data'] = $this->Master_model->getDataKelas() ;

            $this->load->view('temp/header', $data) ;
            $this->load->view('temp/dsb_header') ;
            $this->load->view('master/kelas/index') ;
            $this->load->view('temp/dsb_footer') ;
            $this->load->view('temp/footer') ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function tambah()
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $this->Master_model->addKelas() ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function ubah($id)
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $this->Master_model->editKelas($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function hapus($id)
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $this->Master_model->deleteKelas($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }
}