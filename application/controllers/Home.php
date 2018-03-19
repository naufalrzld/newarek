<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_User');
		$this->load->model('M_Regis');
		$this->load->model('M_admin');
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
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
		$detil = $this->M_User->getDetailById($id_users);
		if($detil == NULL){
			$this->session->sess_destroy();
   //      	redirect('/','refresh');
			$msg ="Anda tidak punya akses";
			echo '<script type="text/javascript">alert("' . $msg . '")</script>';
			redirect('/','refresh');
		}
		else{
		// var_dump($detil);
		$data['nama_user'] = $detil['name'];
		$newDate = date("D, d/M/Y", strtotime($detil['last_login']));
		$data['last_login'] = $newDate;
		$data['status_isi'] = $detil["status_bio"];	
        $this->laman('laman/v_dash',$data);
        }
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ ?>