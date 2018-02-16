<?php
class M_user extends CI_Model{
    public function tambahUser($data){
        $this->db->insert('users', $data);
    }
    public function verifyLogin($username, $pass){

        // $hash = $this->bcrypt->hash_password($password);
        $this->db->where('username',$username);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
            $user = $query->result()[0];
            if ($this->bcrypt->check_password($pass,$user->password)){
                return $user;
            }
        }
        return FALSE;
    }
}