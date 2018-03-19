<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends MY_Controller {
	 public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_admin');
        $this->load->model('M_berkas');
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
		$data['nama'] = $get['real_name'];
		$data['status'] = $get['status'];
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
		$data['status'] = $get['status'];
		$data['nama'] = $get['real_name'];
		$this->panitia('laman/adm/v_users',$data);
	}
	public function addComittee(){
		 if (!$this->session->userdata("logged_in")){
            redirect("Panitia");
        }
        $id = $this->session->userdata('id'); 
        $status = $this->session->userdata('status'); 
        $get = $this->M_admin->getDetailAdmin($id);
        $data['usr'] = $this->M_admin->getAllParticipants();
        $data['adm'] =  $this->M_admin->getAdm();
        $data['nama'] = $get['real_name'];
		$data['status'] = $get['status'];
		if($status == "super admin"){
            $this->panitia('laman/adm/v_berkas',$data);
        }
        else{
        	redirect("Panitia/Dashboard");
        }
	}
    public function viewBerkas(){
        if (!$this->session->userdata("logged_in")){
            redirect("Panitia");
        }
        $id = $this->session->userdata('id');
        $get = $this->M_admin->getDetailAdmin($id);
        $data['ba'] = $this->M_berkas->getBerkasBA();
        $data['mp'] = $this->M_berkas->getBerkasMP();
        $data['ui'] = $this->M_berkas->getBerkasUI();
        $data['status'] = $get['status'];
        $data['nama'] = $get['real_name'];
        $this->panitia('laman/adm/v_berkas',$data);
    }
    public function hpsBerkas(){
        $dcd = base64_decode($this->uri->segment(3));
        $x = str_replace('id_usernya si dia adalah','',$dcd);
        $this->M_berkas->hpsBerkas($x);
        redirect('Panitia/allUsers');
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
                'status' => $log->status,
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
	public function addAdm(){
		$a = $this->input->post('admId');
		$b = $this->input->post('admLevel');

		if($a != "0" && $b != "0"){
			$this->M_admin->setAdm($a,$b);
			$this->session->set_flashdata('tambahAdm', 'Tambah Panitia berhasil');
			redirect("Panitia/addComittee");
			// echo "sip";
		}
		else{
			$this->session->set_flashdata('tambahAdmGagal', 'Tambah Panitia Gagal, Periksa kembali inputan Anda!');
			redirect("Panitia/addComittee");
		}

	}


}