<?php
class M_regis extends CI_Model{
	public function tambahBio($nim,$line,$fak,$prodi,$angk,$minat,$id){
		$data = array(
		        'student_id' => $nim,
		        'id_line' => $line,
		        'minat' => $minat,
		        'fakultas' => $fak,
		        'program' => $prodi,
		        'angkatan' => $angk,
		        'status_bio' => 1
		);
		$this->db->where('id_users', $id);
		$this->db->update('participants', $data);
		
	}
	public function viewDetailsProfile($id){
		// SELECT *  FROM participants JOIN fakultas ON(id_fakultas = fakultas) JOIN prodi ON ( id_prodi = program) WHERE 
		$this->db->select('name,nama_prodi,nama_fakultas,gender,angkatan,id_line,minat,student_id,last_login,status_paspor');
		$this->db->from('participants');
		$this->db->join('fakultas', 'id_fakultas = fakultas');
		$this->db->join('prodi', 'id_prodi = program');
		$this->db->join('users', 'users.id_users = participants.id_users');
        $this->db->where('participants.id_users = ', $id);
     	$kue = $this->db->get()->result_array()[0];
        return $kue;
	}	
}
?>