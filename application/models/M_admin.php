<?php
class M_admin extends CI_Model{
	public function verifyComitte($username, $pass){

        $this->db->select('username,password,status,admin.id_users');
        // $this->db->from('users');
        // $this->db->join('participants','users.id_users = participants.id_users');
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
    public function getAdm(){
    	$this->db->select('admin.id_users,real_name,status');
    	$this->db->join('admin','users.id_users = admin.id_users');
    	$query = $this->db->get('users');
    	return $query;
    }
    public function getDetailAdmin($id){
    	$this->db->select('real_name,status');
    	$this->db->from('users');
        // $this->db->join('participants','users.id_users = participants.id_users');
        $this->db->join('admin','users.id_users = admin.id_users');
        $this->db->where('admin.id_users',$id);
        $query = $this->db->get()->result_array()[0];
        return $query;
    }
    public function getBA(){
    	$query = "SELECT COUNT(*) as totalBA from participants p JOIN berkas b on (p.id_users=b.id_users) WHERE p.minat = 'BA'";
        return $this->db->query($query)->row_array();
    }
    public function getMP(){
        $query = "SELECT COUNT(*) as totalMP from participants p JOIN berkas b on (p.id_users=b.id_users) WHERE p.minat = 'MP'";
        return $this->db->query($query)->row_array();
    }
     public function getUI(){
    	$query = "SELECT COUNT(*) as totalUI from participants p JOIN berkas b on (p.id_users=b.id_users) WHERE p.minat = 'UI'";
        return $this->db->query($query)->row_array();
    }
    public function getCountAllParticipants(){
        $query = "SELECT COUNT(*) AS total from participants p JOIN berkas b on (p.id_users=b.id_users)";
    	return $this->db->query($query)->row_array();
    }
    public function getAllParticipants(){
    	$this->db->select('*');
    	// $this->db->where('minat','UI');
    	// $this->db->or_where('minat','MP');
    	// $this->db->or_where('minat','BA');
    	$this->db->join('fakultas', 'id_fakultas = fakultas');
		$this->db->join('prodi', 'id_prodi = program');
        $this->db->order_by('name', 'ASC');
    	$query = $this->db->get('participants')->result_array();

    	return $query;
    }
    public function hpsUser($id){
    	$q = $this->db->delete('users', array('id_users' => $id));
    	return $q;
    }
    public function setAdm($id,$level){
        $this->db->select('name');
        $this->db->where('id_users',$id);
        $x = $this->db->get('participants')->row_array();
        $nama = $x['name'];
        // $idnya = $id;
        
        $dataAdm  =  array(
            'id_users' => $id,
            'real_name' => $nama,
            'status' => $level
        );
        $this->db->insert('admin',$dataAdm);
        $this->db->delete('participants', array('id_users' => $id));
    }
}

?>