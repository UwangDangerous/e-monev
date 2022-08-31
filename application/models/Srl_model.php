<?php 

class Srl_model extends CI_Model{
    // obat
        public function getDataObat($id = 0)
        {
            if($id > 0){
                $this->db->where("id_srl", $id) ;
            }

            $this->db->join("kelas", "kelas.id_kelas = srl_obat.id_kelas");
            return $this->db->get("srl_obat") ;
        }

        public function addObat()
        {
            $query = [
                'id_kelas' => $this->input->post('id_kelas') ,
                'zat_aktif' => $this->input->post('zat_aktif', true) ,
                'jenis_sedian' => $this->input->post('jenis_sedian', true) ,
                'bentuk_sedian' => $this->input->post('bentuk_sedian', true) ,
                'pustaka' => $this->input->post('pustaka', true) ,
                'parameter' => $this->input->post('parameter', true) ,
            ] ;
            if($this->db->insert("srl_obat", $query)) {
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
            redirect(MYURL."srl/obat") ;
        }

        public function editObat($id)
        {
            $query = [
                'id_kelas' => $this->input->post('id_kelas') ,
                'zat_aktif' => $this->input->post('zat_aktif', true) ,
                'jenis_sedian' => $this->input->post('jenis_sedian', true) ,
                'bentuk_sedian' => $this->input->post('bentuk_sedian', true) ,
                'pustaka' => $this->input->post('pustaka', true) ,
                'parameter' => $this->input->post('parameter', true) ,
            ] ;
            
            $this->db->where("id_srl", $id) ;
            $this->db->set($query) ;
            if($this->db->update("srl_obat")) {
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
            redirect(MYURL."srl/obat") ;
        }
        
        public function deleteObat($id)
        {
            $this->db->where("id_srl", $id) ;
            if($this->db->delete("srl_obat")) {
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
            redirect(MYURL."srl/obat") ;
        }
    // tutup obat
}