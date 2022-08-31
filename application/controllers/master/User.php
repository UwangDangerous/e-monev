<?php 

class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct() ;
        $this->load->model('Master_model') ; 
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('monev') != null && $this->session->userdata('monev_level_id') == 1) {
            $data['judul'] = "Data User - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ 'active', '', 'User' ]
            ];
            $data['sub'] = 'Data User' ;
            $data['data'] = $this->Master_model->getDataUser()->result_array() ;

            $this->load->view('temp/header', $data) ;
            $this->load->view('temp/dsb_header') ;
            $this->load->view('master/user/index') ;
            $this->load->view('temp/dsb_footer') ;
            $this->load->view('temp/footer') ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function tambah()
    {
        if($this->session->userdata('monev_id') != null && $this->session->userdata('monev_level_id') == 1) {
            $data['judul'] = "Tambah Data User - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ '', 'master/user', 'User' ],
                [ 'active', '', 'Tambah User' ]
            ];
            $data['sub'] = 'Tambah Data User' ;
            $data['level'] = $this->Utility_model->cmbLevel() ;

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('kode', 'Kode / NIP', 'required|is_unique[user.kode]|numeric');
            $this->form_validation->set_rules('id_level', 'Level User', 'required');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('temp/header', $data) ;
                $this->load->view('temp/dsb_header') ;
                $this->load->view('master/user/tambah') ;
                $this->load->view('temp/dsb_footer') ;
                $this->load->view('temp/footer') ;
            }else{
                $this->Master_model->addUser() ;
            }
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function ubah($id)
    {
        if($this->session->userdata('monev_id') != null && $this->session->userdata('monev_level_id') == 1) {
            $data['judul'] = "Ubah Data User - ".MYWEB ;
            $data['bread'] = [
                [ '', '', 'Dashboard' ],
                [ '', 'master/user', 'User' ],
                [ 'active', '', 'Ubah User' ]
            ];
            $data['sub'] = 'Ubah Data User' ;
            $data['level'] = $this->Utility_model->cmbLevel() ;
            $data['data'] = $this->Master_model->getDataUser($id)->row_array() ;

            if($this->input->post('kode') != $this->input->post('kode_lama')) {
                $this->form_validation->set_rules('kode', 'Kode / NIP', 'required|is_unique[user.kode]|numeric');
            }

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('id_level', 'Level User', 'required');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('temp/header', $data) ;
                $this->load->view('temp/dsb_header') ;
                $this->load->view('master/user/ubah') ;
                $this->load->view('temp/dsb_footer') ;
                $this->load->view('temp/footer') ;
            }else{
                $this->Master_model->editUser($id) ;
            }
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }

    public function hapus($id)
    {
        if($this->session->userdata('monev_id') != null && $this->session->userdata('monev_level_id') == 1) {
            $this->Master_model->deleteUser($id) ;
        }else{
            $this->session->set_flashdata('pesan', 'Tidak ada akses') ;
            redirect(MYURL."login") ;
        }
    }
}