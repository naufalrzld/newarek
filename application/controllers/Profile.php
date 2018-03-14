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

		$id_users = $this->session->userdata('id');
		// $detil = $this->M_User->getDetailById($id_users);
		// echo $id_users;
		$detil  = $this->M_Regis->viewDetailsProfile($id_users);
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
			'paspor' => $detil['status_paspor']
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