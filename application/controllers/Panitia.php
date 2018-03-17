<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends MY_Controller {
	 public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_admin');
    }

	public function index(){

		$this->panitia('laman/adm/v_login');
	}
	public function Dashboard(){
		 if (!$this->session->userdata("logged_in")){
            redirect("Panitia");
        }
		$id = $this->session->userdata('id'); 
		$get = $this->M_admin->getDetailAdmin($id);

		$getBA = $this->M_admin->getBA();
		$getMP = $this->M_admin->getMP();
		$getUI = $this->M_admin->getUI();
		$getAll = $this->M_admin->getCountAllParticipants();
		$data['nama'] = $get['name'];
		$data['ba'] = $getBA['totalBA'];
		$data['mp'] = $getMP['totalMP'];
		$data['ui'] = $getUI['totalUI'];
		$data['all'] = $getAll['total'];
		$this->panitia('laman/adm/v_dash',$data);
	}
	public function allUsers(){
		 if (!$this->session->userdata("logged_in")){
            redirect("Panitia");
        }
		$id = $this->session->userdata('id'); 
		$get = $this->M_admin->getDetailAdmin($id);
		$data['usr'] = $this->M_admin->getAllParticipants();
		$data['nama'] = $get['name'];
		$this->panitia('laman/adm/v_users',$data);
	}

	public function hpsUsers(){
		$dcd = base64_decode($this->uri->segment(3));
		$x = str_replace('id_usernya si dia adalah','',$dcd);
		$this->M_admin->hpsUser($x);
		redirect('Panitia/allUsers');
	}
	public function Login(){
	 	$username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $log = $this->M_admin->verifyComitte(strtolower($username),$pass);
        if ($log != FALSE){
            $array = array(
                'logged_in' => TRUE,
                'status' => 'admin',
                'id' => $log->id_users,
                'username' => $log->username
            );
            $this->session->set_userdata( $array );
            redirect('Panitia/Dashboard','refresh');
        }
        else{
        	echo $username;
        }
	}
}