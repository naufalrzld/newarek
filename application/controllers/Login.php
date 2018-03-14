<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_user');

        $this->load->helper(array('form', 'url'));

        $this->load->library(array('form_validation','Recaptcha'));
    }

	public function index()
	{
        if ($this->session->userdata('masuk') == TRUE){
            redirect('Login/Dashboard','refresh');
        }
        $this->login_page('laman/v_login');
	}
	public function register(){

        if ($this->input->server('REQUEST_METHOD') == "POST"){
            $capcai = $this->input->post('g-recaptcha-response');
            // var_dump($_POST);
            if (!empty($capcai)) {
                $response = $this->recaptcha->verifyResponse($capcai); //do Verify Recaptcha
                $user = $this->input->post('usr');
                $nama = $this->input->post('nama');
                $mail = $this->input->post('email');
                $pwd = $this->input->post('pwd');
                $pwd2 = $this->input->post('pwd2');
                $gender = $this->input->post('gender');
                $config = array(
                        array(
                                'field' => 'usr',
                                'label' => 'Username',
                                'rules' => 'trim|required'
                        ),
                        array(
                                'field' => 'pwd',
                                'label' => 'Password',
                                'rules' => 'trim|required',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        ),
                        array(
                                'field' => 'pwd2',
                                'label' => 'Password Confirmation',
                                'rules' => 'trim|required|matches[pwd]'
                        ),
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'trim|required'
                        ),
                        array(
                                'field' => 'gender',
                                'label' => 'Gender',
                                'rules' => 'trim|required'
                        )

                );
                $this->form_validation->set_rules($config);

                 if ($this->form_validation->run() != FALSE and isset($response['success']) and $response['success'] == true
                    )
                    {
                            $data_users["username"] = $user;
                            $hash = $this->bcrypt->hash_password($pwd);
                            $data_users["password"] = $hash;
                            $data_participants['name'] = $nama;
                            $data_participants['gender'] = $gender;
                            $data_participants['email'] = $mail;
                            $this->M_user->tambahUser($data_users,$data_participants);
                            redirect("/");

                    }
                    else
                    {
                            echo validation_errors();
                    }
                }
            else{
                echo "Belum isi captcha";
            }
        }
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
        redirect('/');
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
