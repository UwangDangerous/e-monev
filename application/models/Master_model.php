<?php 

class Master_model extends CI_Model{
    // user
        public function getDataUser($id = 0)
        {
            if($id > 0){
                $this->db->where("id", $id) ;
            }
            $this->db->join("level", "level.id_level = user.id_level") ;
            return $this->db->get("user") ;
        }

        public function addUser()
        {
            $query = [
                'kode' => $this->input->post("kode"),
                'nama' => $this->input->post("nama"),
                'username' => $this->input->post("kode"),
                'password' => $this->Utility_model->myPassword(),
                'id_level' => $this->input->post("id_level"),
            ] ;

            if($this->db->insert("user", $query)) {
                $pesan = [
                    "pesan" => "Data Berhasil Disimpan",
                    "warna" => "success"
                ];
            }else{
                $pesan = [
                    "pesan" => "Data Gagal Disimpan",
                    "warna" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."master/user") ;
        }

        public function editUser($id)
        {
            $query = [
                'kode' => $this->input->post("kode"),
                'nama' => $this->input->post("nama"),
                'id_level' => $this->input->post("id_level"),
            ] ;

            $this->db->where("id", $id) ;
            $this->db->set($query) ;
            if($this->db->update("user")) {
                $pesan = [
                    "pesan" => "Data Berhasil Diubah",
                    "warna" => "success"
                ];
            }else{
                $pesan = [
                    "pesan" => "Data Gagal Diubah",
                    "warna" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."master/user") ;
        }

        public function deleteUser($id)
        {
            $this->db->where("id", $id) ;
            if($this->db->delete("user")){
                $pesan = [
                    "pesan" => "Data Berhasil Dihapus",
                    "warna" => "success"
                ];
            }else{
                $pesan = [
                    "pesan" => "Data Gagal Dihapus",
                    "warna" => "danger"
                ];
            }
        }
    // tutup user


}