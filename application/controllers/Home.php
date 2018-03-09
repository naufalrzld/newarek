<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
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
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
        $this->laman('laman/v_dash',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ ?>