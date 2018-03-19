<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_User');
		$this->load->model('M_Regis');
	}

	public function Alur(){
	     if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
	      if($this->session->userdata('status') == "admin" || $this->session->userdata('status') == "super admin" ){
        	 $this->session->set_flashdata('akses', 'Anda tidak memiliki akses');
        	redirect('Panitia/Dashboard','refresh');
        }
		$id_users = $this->session->userdata('id');
		$detil = $this->M_User->getDetailById($id_users);
		// var_dump($detil);
		$data['nama_user'] = $detil['name'];
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
		$this->laman('laman/v_alur',$data);
	}
	public function Minat(){
	     if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
	      if($this->session->userdata('status') == "admin" || $this->session->userdata('status') == "super admin" ){
        	 $this->session->set_flashdata('akses', 'Anda tidak memiliki akses');
        	redirect('Panitia/Dashboard','refresh');
        }
		$id_users = $this->session->userdata('id');
		$detil = $this->M_User->getDetailById($id_users);
		// var_dump($detil);
		$data['nama_user'] = $detil['name'];
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
		$this->laman('laman/v_profminat',$data);
	}
	public function Syarat(){
	     if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
	      if($this->session->userdata('status') == "admin" || $this->session->userdata('status') == "super admin" ){
        	 $this->session->set_flashdata('akses', 'Anda tidak memiliki akses');
        	redirect('Panitia/Dashboard','refresh');
        }
		$id_users = $this->session->userdata('id');
		$detil = $this->M_User->getDetailById($id_users);
		// var_dump($detil);
		$data['nama_user'] = $detil['name'];
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
		$this->laman('laman/v_syarat',$data);
	}
}