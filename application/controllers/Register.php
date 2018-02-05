<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library(array('form_validation', 'Recaptcha'));
    }
    public function index(){
        $data = array(
            'capcay' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag()
            // 'products' => $this->Products_model->getItemforHome(),
        );
        $this->laman('laman/v_reg',$data);
    }
}