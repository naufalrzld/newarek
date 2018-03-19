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
        $sql = "SELECT name,nama_prodi,nama_fakultas,gender,angkatan,id_line,minat,student_id,last_login,status_paspor from participants p
JOIN fakultas f on (f.id_fakultas = p.fakultas)
JOIN prodi pr on (pr.id_prodi = p.program)
JOIN users using (id_users)
where p.id_users = $id";
     	$kue = $this->db->query($sql)->result_array()[0];
        return $kue;
	}
	public function tambahBerkas($file_details,$id){
        $data = array(
            'nama_berkas' => $file_details['file_name'],
            'tgl_upload' => date("Y/m/d"),
            'path' => $file_details['full_path'],
            'id_users' => $id

        );
        $this->db->insert('berkas',$data);
        $id_berkas = $this->db->insert_id();
        $this->db->where('id_users',$id);
        // $this->db->update('participants');
    }
    public function updateStatusPaspor($id){
    	$data = array(
    		'status_paspor' =>1
    	);
    	$this->db->where('id_users', $id);
		$this->db->update('participants', $data);
    }
}
?>