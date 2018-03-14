<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_User');
	}
	public function index()
	{
		$id_users = $this->session->userdata('id');
		$detil = $this->M_User->getDetailById($id_users);
		// var_dump($detil);
		$data['nama_user'] = $detil['name'];
        $data['fakultas'] = $this->db->get('fakultas')->result_array();
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
		if($detil["status_bio"] == 1){
			$this->session->set_flashdata('oops', 'Maaf Anda telah mengisi biodata');
			redirect('Home');
		}else{
        	$this->laman('laman/v_bio',$data);
        }
	}
	public function unggah(){
		$id_users = $this->session->userdata('id');
		$detil = $this->M_User->getDetailById($id_users);
		// var_dump($detil);
		$data['nama_user'] = $detil['name'];
        $data['fakultas'] = $this->db->get('fakultas')->result_array();
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
        $this->laman('laman/v_upload',$data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ ?>