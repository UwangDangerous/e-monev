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

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."master/user") ;
        }
    // tutup user

    // lab
        public function getDataLab($id = 0)
        {
            if($id > 0){
                $this->db->where("id_lab", $id) ;
            }
            return $this->db->get("lab") ;
        }

        public function addLab()
        {
            $query = [
                'nama_lab' => $this->input->post("nama_lab"),
                'nama_lain' => $this->input->post("nama_lain")
            ] ;

            if($this->db->insert("lab", $query)) {
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
            redirect(MYURL."master/lab") ;
        }

        public function editLab($id)
        {
            $query = [
                'nama_lab' => $this->input->post("nama_lab"),
                'nama_lain' => $this->input->post("nama_lain")
            ] ;

            $this->db->where("id_lab", $id) ;
            $this->db->set($query) ;
            if($this->db->update("lab")) {
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
            redirect(MYURL."master/lab") ;
        }

        public function deleteLab($id)
        {
            $this->db->where("id_lab", $id) ;
            if($this->db->delete("lab")){
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

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."master/lab") ;
        }
    // tutup lab

    // tahun 
        public function getDataTahun()
        {
            return $this->db->get('tahun')->result_array() ;
        } 

        public function addTahun()
        {
            if($this->db->insert("tahun", ['tahun' => $this->input->post("tahun")])) {
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
            redirect(MYURL."master/tahun") ;
        }

        public function deleteTahun($tahun)
        {
            $this->db->where("tahun", $tahun) ;
            if($this->db->delete("tahun")) {
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

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."master/tahun") ;
        }
    // tutup tahun 

    // kelas 
        public function getDataKelas()
        {
            return $this->db->get('kelas')->result_array() ;
        } 

        public function addKelas()
        {
            if($this->db->insert("kelas", ['nama_kelas' => $this->input->post("nama_kelas")])) {
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
            redirect(MYURL."master/kelas") ;
        }

        public function editKelas($id)
        {
            $this->db->where("id_kelas", $id) ;
            if($this->db->update("kelas", ['nama_kelas' => $this->input->post("nama_kelas")])) {
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
            redirect(MYURL."master/kelas") ;
        }

        public function deleteKelas($id)
        {
            $this->db->where("id_kelas", $id) ;
            if($this->db->delete("kelas")) {
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

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."master/kelas") ;
        }
    // tutup kelas 

}