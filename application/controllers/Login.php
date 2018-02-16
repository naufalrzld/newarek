<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_user');
    }

	public function index()
	{
        if ($this->session->userdata('masuk') == TRUE){
            redirect('Login/Dashboard','refresh');
        }
        $this->login_page('laman/v_login');
	}
	public function register(){
        $data["username"] = "ramaadtym";
        $hash = $this->bcrypt->hash_password("1202962432");
        $data["password"] = $hash;

        $this->M_user->tambahUser($data);
    }
	public function login(){
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $log = $this->M_user->verifyLogin($username,$pass);
        if ($log != FALSE){
            $array = array(
                'logged_in' => TRUE,
                'id' => $log->id_users,
                'username' => $log->username
            );
            $this->session->set_userdata( $array );
            $data["nama"] = "Halaman Utama";
            redirect('Home','refresh',$data);
        }
        $this->session->set_flashdata('errors', 'Username atau password salah');
        redirect("/");
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/','refresh');
    }
    public function test()
    {
        // $this->load->model('M_user');
        // var_dump($this->M_user->verifyLogin("ipat","ganteng"));
    }
}
