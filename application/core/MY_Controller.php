<?php 
class MY_Controller extends CI_Controller
{
    function login_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('template/index_login', $data);
    }
    // function login_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/login/index', $data);
    // }
    // function dashboard_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/dashboard/index', $data);
    // }
    // function klas_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/kls/index', $data);
    // }
    // function presensi_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/presensi/index', $data);
    // }
    // function matkul_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/matkul/index', $data);
    // }
    // function mhs_page($content, $data = NULL){
    //     $data['content'] = $this->load->view($content, $data, TRUE);
    //     $this->load->view('template/mahasiswa/index', $data);
    // }
}
?>