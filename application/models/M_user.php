<?php
class M_user extends CI_Model{
    public function tambahUser($data_user,$data_participants){
        $this->db->insert('users', $data_user);
        $id_users = $this->db->insert_id();
        $data_participants['id_users'] = $id_users;
        $this->db->insert('participants', $data_participants);
    }
    public function verifyLogin($username, $pass){

        // $hash = $this->bcrypt->hash_password($password);
        $this->db->where('lower(username)',$username);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
            $user = $query->result()[0];
            if ($this->bcrypt->check_password($pass,$user->password)){
                return $user;
            }
        }
        return FALSE;
    }
   /* public function getDetailById($id_users){
        $this->db->where('participants.id_users', $id_users);
        $this->db->join('users', 'participants.id_users = users.id_users');
        $query = $this->db->get('participants');
        return $query->result_array()[0];
    }
    */
    public function getDetailById($id_users){
        $this->db->where('participants.id_users', $id_users);
        $this->db->join('users', 'participants.id_users = users.id_users');
        $query = $this->db->get('participants')->result_array()[0];
        if($query == NULL){
            return false;
        }else{
            return $query;
        }
    }

    public function getDetailUserById($id_users) {
        $sql = "SELECT p.student_id, p.name, p.id_line, p.minat, p.gender, p.angkatan, p.email, pr.nama_prodi, f.nama_fakultas from participants p
        JOIN fakultas f on (f.id_fakultas = p.fakultas)
        JOIN prodi pr on (pr.id_prodi = p.program)
        JOIN users using (id_users)
        where p.id_users = $id_users";

	    $query = $this->db->query($sql)->result_array()[0];
        if($query == NULL){
            return false;
        }else{
            return $query;
        }
    }
}