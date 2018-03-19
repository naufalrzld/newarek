<?php
class M_berkas extends CI_Model{
    public function getBerkasBA(){
        $this->db->select('*');
        $this->db->join('berkas','participants.id_users = berkas.id_users');
        $this->db->where('minat','BA');
        $query = $this->db->get('participants')->result_array();

        return $query;
    }
    public function getBerkasMP(){
        $this->db->select('*');
        $this->db->join('berkas','participants.id_users = berkas.id_users');
        $this->db->where('minat','MP');
        $query = $this->db->get('participants')->result_array();

        return $query;
    }
    public function getBerkasUI(){
        $this->db->select('*');
        $this->db->join('berkas','participants.id_users = berkas.id_users');
        $this->db->where('minat','UI');
        $query = $this->db->get('participants')->result_array();

        return $query;
    }

}

?>