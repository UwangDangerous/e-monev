<?php 

class Login_model extends CI_Model{
    public function cek_login() 
    {
        $name = $this->input->post('username');
        $pass = $this->input->post('password');

        $this->db->where("username", $name) ;
        $this->db->where("password", md5(sha1($pass))) ;
        $this->db->join("level", "level.id_level = user.id_level") ;
        $data = $this->db->get("user")->row_array() ;
        if($data) {
            $this->session->set_userdata([
                'monev' => $data['kode'],
                'monev_id' => $data['id'],
                'monev_name' => $data['nama'],
                'monev_level' => $data['nama_level'],
                'monev_level_id' => $data['id_level']
            ]) ;
            redirect(MYURL."Home") ;
        }else{
            $this->session->set_flashdata('pesan', 'username / password salah') ;
            redirect(MYURL."login") ;
        }
    }
}