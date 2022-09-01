<?php 

class Obat extends CI_Controller{
    public function __construct()
    {
        parent::__construct() ;
        $this->load->model('Srl_model') ; 
        $this->load->model('Standar_model') ; 
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('monev_id') != null) {
            $data['judul'] = "Standar Ruang Lingkup Obat - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ 'active', '', 'Standar Ruang Lingkup Obat' ]
            ];
            $data['sub'] = 'Standar Ruang Lingkup Obat' ;
            $data['data'] = $this->Srl_model->getDataObat()->result_array() ;
            $data['rencana'] = $this->Standar_model->getDataObat()->result_array() ;

            $data['tahun'] = $this->Utility_model->cmbTahun() ;
            $data['tw'] = $this->Utility_model->cmbTw() ;

            $data['catatan'] = $this->Standar_model->getDataCatatanObat() ;
            
            $this->load->view('temp/header', $data) ;
            $this->load->view('temp/dsb_header') ;
            $this->load->view('standar/obat/index') ;
            $this->load->view('temp/dsb_footer') ;
            $this->load->view('temp/footer') ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function tambahRencana($id)
    {
        if($this->session->userdata('monev_id') != null) {
            $this->Standar_model->addRencanaObat($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function ubahRencana($id)
    {
        if($this->session->userdata('monev_id') != null) {
            $this->Standar_model->editRencanaObat($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function hapusRencana($id)
    {
        if($this->session->userdata('monev_id') != null) {
            $this->Standar_model->deleteRencanaObat($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function tambahRealisasi($id)
    {
        if($this->session->userdata('monev_id') != null) {
            $this->Standar_model->addRealisasiObat($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function ubahRealisasi($id)
    {
        if($this->session->userdata('monev_id') != null) {
            $this->Standar_model->editRealisasiObat($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function hapusRealisasi($id)
    {
        if($this->session->userdata('monev_id') != null) {
            $this->Standar_model->deleteRealisasiObat($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function tambahCatatan()
    {
        if($this->session->userdata('monev_id') != null) {
            $this->Standar_model->addCatatanObat() ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

}