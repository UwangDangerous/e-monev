<?php 

class Standar_model extends CI_Model{
    // obat
        public function getDataObat($id = 0)
        {
            $this->db->where("id", $this->session->userdata('monev_id')) ;
            if($id > 0){
                $this->db->where("srl_obat.id_srl", $id) ;
            }
            $this->db->join("srl_obat", "srl_obat.id_srl = rencana_obat.id_srl") ;
            $this->db->join("kelas", "kelas.id_kelas = srl_obat.id_kelas") ;
            $this->db->order_by('tahun', 'asc') ;
            $this->db->order_by('tw', 'asc') ;

            return $this->db->get("rencana_obat") ;
        }

        public function getDataRealisasiObat($id)
        {
            $this->db->where("id_obat", $id) ;
            return $this->db->get("realisasi_obat")->row_array() ;
        }

        public function addRencanaObat($id)
        {
            $query = [
                'id' => $this->session->userdata('monev_id') ,
                'id_srl' => $id ,
                'tahun' => $this->input->post('tahun') ,
                'tw' => $this->input->post('tw')
            ] ;

            if($this->db->insert('rencana_obat', $query)) {
                $pesan = [
                    "pesan" => "Rencana Berhasil Disimpan",
                    "warna" => "success"
                ];
            }else{
                $pesan = [
                    "pesan" => "Rencana Gagal Disimpan",
                    "warna" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."standar/obat") ;
        }

        public function editRencanaObat($id)
        {
            $query = [
                'tahun' => $this->input->post('tahun') ,
                'tw' => $this->input->post('tw')
            ] ;


            $this->db->where('id_obat', $id) ;
            $this->db->set($query) ;
            if($this->db->update('rencana_obat')) {
                $pesan = [
                    "pesan" => "Rencana Berhasil Diubah",
                    "warna" => "success"
                ];
            }else{
                $pesan = [
                    "pesan" => "Rencana Gagal Diubah",
                    "warna" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."standar/obat") ;
        }

        public function deleteRencanaObat($id)
        {
            $this->db->where('id_obat', $id) ;
            if($this->db->delete('rencana_obat')) {
                $berkas = $this->db->get_where('realisasi_obat', ['id_obat' => $id])->row_array() ;
                unlink(MYROUT.'doc/obat/'.$berkas['berkas']) ;

                $this->db->where("id_obat", $id) ;
                $this->db->delete("realisasi_obat");

                $pesan = [
                    "pesan" => "Rencana Berhasil Dihapus",
                    "warna" => "success"
                ];
            }else{
                $pesan = [
                    "pesan" => "Rencana Gagal Dihapus",
                    "warna" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."standar/obat") ;
        }


        


        public function addRealisasiObat($id)
        {
            if($_FILES['berkas']['name'] != null){
                $upload = $this->Utility_model->uploadFile('berkas', 'doc/obat', 'pdf|doc|docs|xls|xlsx|jpg|jpeg', 'standar/obat', '_realisasi') ;
            }else{
                $upload = '' ;
            }

            $query = [
                'id_obat' => $id ,
                'berkas' => $upload,
                'link' => $this->input->post('link'),
            ];

            if($this->db->insert('realisasi_obat', $query)) {
                $pesan = [
                    "pesan_realisasi" => "Realisasi Berhasil Disimpan",
                    "warna_realisasi" => "success"
                ];
            }else{
                $pesan = [
                    "pesan_realisasi" => "Realisasi Gagal Disimpan",
                    "warna_realisasi" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."standar/obat") ;
        }

        public function editRealisasiObat($id)
        {
            if($this->input->post('berkas_lama') == '') {
                if($_FILES['berkas']['name'] != null){
                    $upload = $this->Utility_model->uploadFile('berkas', 'doc/obat', 'pdf|doc|docs|xls|xlsx|jpg|jpeg', 'standar/obat', '_realisasi') ;
                }else{
                    $upload = '' ;
                }
            }else{
                if($_FILES['berkas']['name'] != null){
                    $upload = $this->Utility_model->uploadFile('berkas', 'doc/obat', 'pdf|doc|docs|xls|xlsx|jpg|jpeg', 'standar/obat', '_realisasi') ;
                    unlink(MYROUT.'doc/obat/'. $this->input->post('berkas_lama')) ;
                }else{
                    $upload = $this->input->post('berkas_lama') ;
                }
            }


            $query = [
                'berkas' => $upload,
                'link' => $this->input->post('link'),
            ];

            $this->db->where('id_realisasi', $id) ;
            if($this->db->update('realisasi_obat', $query)) {
                $pesan = [
                    "pesan_realisasi" => "Realisasi Berhasil Diubah",
                    "warna_realisasi" => "success"
                ];
            }else{
                $pesan = [
                    "pesan_realisasi" => "Realisasi Gagal Diubah",
                    "warna_realisasi" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."standar/obat") ;
        }
        
        public function deleteRealisasiObat($id)
        {
            $berkas = $this->db->get_where('realisasi_obat', ['id_realisasi' => $id])->row_array() ;

            $this->db->where('id_realisasi', $id) ;
            if($this->db->delete('realisasi_obat')) {
                unlink(MYROUT.'doc/obat/'.$berkas['berkas']) ;
                $pesan = [
                    "pesan_realisasi" => "Realisasi Berhasil Dihapus",
                    "warna_realisasi" => "success"
                ];
            }else{
                $pesan = [
                    "pesan_realisasi" => "Realisasi Gagal Dihapus",
                    "warna_realisasi" => "danger"
                ];
            }

            $this->session->set_flashdata($pesan) ;
            redirect(MYURL."standar/obat") ;
        }
    // tutup obat
}