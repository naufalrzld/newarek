<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
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
		$detil = $this->M_User->getDetailById($id_users);
		// var_dump($detil);
		$data['nama_user'] = $detil['name'];
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
		$data['status_isi'] = $detil["status_bio"];	
        $this->laman('laman/v_dash',$data);
	}
	public function bio(){
	    // var_dump($_POST);
	    $id = $this->input->post('id_usr');
	    $nim = $this->input->post('nim');
	    $fak = $this->input->post('fakultas');
	    $prodi = $this->input->post('prodi');
	    $angk = $this->input->post('angkatan');
	    $minat = $this->input->post('peminatan');
	    $line = $this->input->post('line');
	    $this->M_Regis->tambahBio($nim,$line,$fak,$prodi,$angk,$minat,$id);

    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ ?>