<?php
class M_user extends CI_Model{
    public function tambahUser($data){
        $this->db->insert('users', $data);
    }
    public function verifyLogin($username, $pass){

        $hash = $this->bcrypt->hash_password($password);
        $this->db->group_start();
        $this->db->where('username',$username);
        $this->db->or_where('email',$username);
        $this->db->group_end();
        $query = $this->db->get('user');

        return $query;
    }
}