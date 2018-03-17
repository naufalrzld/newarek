<?php
class M_admin extends CI_Model{
	public function verifyComitte($username, $pass){

        $this->db->select('username,password,status,admin.id_users');
        // $this->db->from('users');
        $this->db->join('participants','users.id_users = participants.id_users');
        $this->db->join('admin','users.id_users = admin.id_users');
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
    public function getDetailAdmin($id){
    	$this->db->select('name');
    	$this->db->from('users');
        $this->db->join('participants','users.id_users = participants.id_users');
        $this->db->join('admin','users.id_users = admin.id_users');
        $this->db->where('admin.id_users',$id);
        $query = $this->db->get()->result_array()[0];
        return $query;
    }
    public function getBA(){
    	$this->db->select('count(*) AS totalBA');
    	$this->db->where('minat','BA');
    	$query = $this->db->get('participants')->row_array();
    	return $query;
    }
     public function getMP(){
    	$this->db->select('count(*) AS totalMP');
    	$this->db->where('minat','MP');
    	$query = $this->db->get('participants')->row_array();
    	return $query;
    }
     public function getUI(){
    	$this->db->select('count(*) AS totalUI');
    	$this->db->where('minat','UI');
    	$query = $this->db->get('participants')->row_array();
    	return $query;
    }
    public function getCountAllParticipants(){
    	$this->db->select('count(*) AS total');
    	// $this->db->where('minat','UI');
    	// $this->db->or_where('minat','MP');
    	// $this->db->or_where('minat','BA');
    	$query = $this->db->get('participants')->row_array();
    	return $query;
    }
    public function getAllParticipants(){
    	$this->db->select('*');
    	// $this->db->where('minat','UI');
    	// $this->db->or_where('minat','MP');
    	// $this->db->or_where('minat','BA');
    	$this->db->join('fakultas', 'id_fakultas = fakultas');
		$this->db->join('prodi', 'id_prodi = program');
    	$query = $this->db->get('participants')->result_array();
    	return $query;
    }
    public function hpsUser($id){
    	$q = $this->db->delete('users', array('id_users' => $id));
    	return $q;
    }
}

?>