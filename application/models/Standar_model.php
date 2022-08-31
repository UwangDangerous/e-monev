<?php 

class Standar_model extends CI_Model{
    public function getDataObat()
    {
        $this->db->where("id", $this->session->userdata('monev_id')) ;
        $this->db->join("srl_obat", "srl_obat.id_srl = rencana_obat.id_srl") ;
        $this->db->join("kelas", "kelas.id_kelas = srl_obat.id_kelas") ;
        $this->db->order_by('tw', 'asc') ;
        $this->db->order_by('tahun', 'asc') ;
        return $this->db->get("rencana_obat")->result_array() ;
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
}