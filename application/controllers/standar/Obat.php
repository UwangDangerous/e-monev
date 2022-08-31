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
            $data['rencana'] = $this->Standar_model->getDataObat() ;

            $data['tahun'] = $this->Utility_model->cmbTahun() ;
            $data['tw'] = $this->Utility_model->cmbTw() ;
            
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

    // public function ubah($id)
    // {
    //     if($this->session->userdata('monev') != null) {
    //         $data['judul'] = "Ubah Form SRL Obat - ".MYWEB ;
    //         $data['bread'] = [
    //             [ '', '', 'Dashboard' ],
    //             [ '', 'srl/obat', 'Standar Ruang Lingkup' ],
    //             [ 'active', '', 'Ubah' ]
    //         ];
    //         $data['sub'] = 'Ubah Form SRL Obat' ;

    //         $data['data'] = $this->Srl_model->getDataObat($id)->row_array() ;
    //         $data['kelas'] = $this->Utility_model->cmbKelas() ;

    //         $this->form_validation->set_rules('id_kelas', 'Kelas Terapi', 'required');
    //         $this->form_validation->set_rules('zat_aktif', 'Zat Aktif', 'required');
    //         $this->form_validation->set_rules('jenis_sedian', 'Jenis Sedian', 'required');
    //         $this->form_validation->set_rules('bentuk_sedian', 'Bentuk Sedian', 'required');
    //         $this->form_validation->set_rules('pustaka', 'Pustaka Acuan', 'required');
    //         $this->form_validation->set_rules('parameter', 'Parameter Uji', 'required');

    //         if($this->form_validation->run() == FALSE) {
    //             $this->load->view('temp/header', $data) ;
    //             $this->load->view('temp/dsb_header') ;
    //             $this->load->view('srl/obat/ubah') ;
    //             $this->load->view('temp/dsb_footer') ;
    //             $this->load->view('temp/footer') ;
    //         }else{
    //             $this->Srl_model->editObat($id) ;
    //         }
    //     }else{
    //         $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
    //         redirect(MYURL."login") ;
    //     }
    // }

    // public function hapus($id)
    // {
    //     if($this->session->userdata('monev') != null) {
    //         $this->Srl_model->deleteObat($id) ;
    //     }else{
    //         $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
    //         redirect(MYURL."login") ;
    //     }
    // }
}