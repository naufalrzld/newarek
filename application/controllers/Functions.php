<?php

/**
 * Created by PhpStorm.
 * User: Mobile Innovation 3
 * Date: 12/03/2018
 * Time: 21.36
 */
class Functions extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_user');
        $this->load->model('M_regis');
        $this->load->library(array('form_validation'));
    }
    public function prodi()
    {
        if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $this->db->where("id_fakultas", intval($id));
            $this->db->select("id_prodi,nama_prodi");
            $query = $this->db->get("prodi");
            echo json_encode($query->result_array());
        }

    }
    public function submitBio(){
        if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
//        var_dump($_POST);
        if ($this->session->userdata("logged_in")) {
            $id = $this->session->userdata('id');
            $nim = $this->input->post('nim');
            $fak = $this->input->post('fakultas');
            $prodi = $this->input->post('prodi');
            $angk = $this->input->post('angkatan');
            $minat = $this->input->post('peminatan');
            $line = $this->input->post('line');
//        $config = array(
//            array(
//                'field' => 'nim',
//                'label' => 'NIM',
//                'rules' => 'trim|required|numeric'
//            ),
//            array(
//                'field' => 'fakultas',
//                'label' => 'Data Fakultas',
//                'rules' => 'trim|required|numeric'
//            ),
//            array(
//                'field' => 'prodi',
//                'label' => 'Program Studi',
//                'rules' => 'trim|required|numeric'
//            ),
//            array(
//                'field' => 'gender',
//                'label' => 'Gender',
//                'rules' => 'trim|required'
//            )
//        );
//        $this->form_validation->set_rules($config);
//        if ($this->form_validation->run() != FALSE) {
            $this->M_regis->tambahBio($nim, $line, $fak, $prodi, $angk, $minat, $id);

//        }
//        else
//        {
//            var_dump($_POST);
//        }
        }
        redirect("Daftar");
    }
    public function submitBerkas(){
        if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'rar|zip';
        $config['max_size']             = 1024*1024*5;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userfile'))
        {
            $this->M_regis->tambahBerkas($this->upload->data(),$this->session->userdata('id'));
        }

        redirect('Daftar/Unggah');
    }

}