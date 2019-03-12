<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_user');
    }

    function do_login_post(){
        $username = $this->post('username');
        $pass = $this->post('pass');
        $log = $this->M_user->verifyLogin(strtolower($username),$pass);
        if ($log != FALSE){
            $detail = $this->M_user->getDetailUserById($log->id_users);
            $array = array(
                'id' => $log->id_users,
                'username' => $log->username,
                'detail' => $detail
            );
            $this->response($array, 200);
        } else {
            $array = array(
                "error" => true,
                "message" => "Username atau password salah!"
            );
            $this->response($array, 200);
        }
    }
}
?>