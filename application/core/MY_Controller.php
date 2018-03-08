<?php 
class MY_Controller extends CI_Controller
{
    function login_page($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $page = basename($_SERVER['PHP_SELF']);
        $data['page'] = $page;
        switch ($page){
            case 'index.php':
                $data['nama']= 'Aplikasi Rekrutmen Mobile Innovation ';
                break;

            case 'Dashboard':
                $data['nama']= 'Dashboard | Arek Motion Laboratory';

                break;
        }
        $this->load->view('template/index', $data);
    }
    function laman($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);
        $page = basename($_SERVER['PHP_SELF']);
        $data['page'] = $page;
        switch ($page){
            case 'index.php':
                $data['nama']= 'Aplikasi Rekrutmen Mobile Innovation ';
                break;

            case 'Dashboard':
                $data['nama']= 'Dashboard | Arek Motion Laboratory';
                break;
            case 'register':
                $data['nama']= 'Register Account | Arek Motion Laboratory';
        }
        $this->load->view('template/indexb4', $data);
    }
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