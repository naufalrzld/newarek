<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library(array('form_validation', 'Recaptcha'));
    }

    public function index()
    {
        $data = array(
            'capcay' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
            'nama' => "Registerasi Arek - Motion Laboratory"
            // 'products' => $this->Products_model->getItemforHome(),
        );
        $this->laman('laman/v_reg', $data);
        $user = $this->input->post('usr');
        $nama = $this->input->post('nama');
        $mail = $this->input->get('email');
        $pwd = $this->input->post('pwd');
        $pwd2 = $this->input->post('pwd2');
        $gender = $this->input->post('gender');
    }


}