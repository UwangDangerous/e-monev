<?php 

class Tahun extends CI_Controller{
    public function __construct()
    {
        parent::__construct() ;
        $this->load->model('Master_model') ; 
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $data['judul'] = "Data Laboratorium - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ 'active', '', 'Lab' ]
            ];
            $data['sub'] = 'Laboratorium' ;
            $data['data'] = $this->Master_model->getDataTahun() ;

            $this->load->view('temp/header', $data) ;
            $this->load->view('temp/dsb_header') ;
            $this->load->view('master/tahun/index') ;
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
            $this->Master_model->addTahun() ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function hapus($tahun)
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $this->Master_model->deleteTahun($tahun) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }
}