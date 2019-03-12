<?php
class Profile extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_User');
		$this->load->model('M_Regis');
	}
	public function index()
	{

        if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
          if($this->session->userdata('status') == "admin" || $this->session->userdata('status') == "super admin" ){
        	 $this->session->set_flashdata('akses', 'Anda tidak memiliki akses');
        	redirect('Panitia/Dashboard','refresh');
        }
		$id_users = $this->session->userdata('id');
		// $detil = $this->M_User->getDetailById($id_users);
		// echo $id_users;
		$detil  = $this->M_Regis->viewDetailsProfile($id_users);
		if (!$detil) {
			$this->session->set_flashdata('oops', 'Silahkan lengkapi data diri anda terlebih dahulu!');
            $this->session->set_flashdata('jenisalert','alert-info');
			redirect("Daftar");
		}
        $this->db->where('id_users',$id_users);
        $berkasnya = $this->db->get("berkas");
        if ($berkasnya->num_rows() > 0)
            $id_berkas = $berkasnya->result_array()[0]['id_berkas'];
        else
            $id_berkas = NULL;
		// var_dump($detil);
		$data = array(
			'nama_user' => $detil['name'],
			'prodi' => $detil['nama_prodi'],
			'nim' => $detil['student_id'],
			'fak' => $detil['nama_fakultas'],
			'gender' => $detil['gender'],
			'line' => $detil['id_line'],
			'minat' => $detil['minat'],
			'angk' => $detil['angkatan'],
            'berkas' => $id_berkas
        );
		// $data['nama_user'] = $detil['name'];
		// $data['prodi'] = $detil['nama_prodi'];
		// $data['fak'] = $detil['nama_fakultas'];
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
        $this->profil('laman/v_profile',$data);
	}
}
?>