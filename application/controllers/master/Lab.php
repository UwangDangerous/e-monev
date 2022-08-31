<?php 

class Lab extends CI_Controller{
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
            $data['data'] = $this->Master_model->getDataLab()->result_array() ;

            $this->load->view('temp/header', $data) ;
            $this->load->view('temp/dsb_header') ;
            $this->load->view('master/lab/index') ;
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
            $data['judul'] = "Tambah Laboratorium - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ '', 'master/lab', 'Laboratorium' ],
                [ 'active', '', 'Tambah Laboratorium' ]
            ];
            $data['sub'] = 'Tambah Laboratorium' ;

            $this->form_validation->set_rules('nama_lab', 'Laboratorium', 'required');
            $this->form_validation->set_rules('nama_lain', 'Nama Lab', 'required');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('temp/header', $data) ;
                $this->load->view('temp/dsb_header') ;
                $this->load->view('master/lab/tambah') ;
                $this->load->view('temp/dsb_footer') ;
                $this->load->view('temp/footer') ;
            }else{
                $this->Master_model->addLab() ;
            }
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function ubah($id)
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $data['judul'] = "Ubah Data Laboratorium - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ '', 'master/lab', 'Laboratorium' ],
                [ 'active', '', 'Ubah Laboratorium' ]
            ];
            $data['sub'] = 'Ubah Data Laboratorium' ;
            $data['level'] = $this->Utility_model->cmbLevel() ;
            $data['data'] = $this->Master_model->getDataLab($id)->row_array() ;

            $this->form_validation->set_rules('nama_lab', 'Laboratorium', 'required');
            $this->form_validation->set_rules('nama_lain', 'Nama Lab', 'required');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('temp/header', $data) ;
                $this->load->view('temp/dsb_header') ;
                $this->load->view('master/lab/ubah') ;
                $this->load->view('temp/dsb_footer') ;
                $this->load->view('temp/footer') ;
            }else{
                $this->Master_model->editLab($id) ;
            }
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function hapus($id)
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $this->Master_model->deleteLab($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }
}