<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_User');
    }

    public function index()
    {
        if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
        $id_users = $this->session->userdata('id');
        $detil = $this->M_User->getDetailById($id_users);
        // var_dump($detil);
        $data['nama_user'] = $detil['name'];
        $data['fakultas'] = $this->db->get('fakultas')->result_array();
        $newDate = date("D, d/M/Y", strtotime($detil['last_login']));
        $data['last_login'] = $newDate;
        if ($detil["status_bio"] == 1) {
            $this->session->set_flashdata('oops', 'Anda telah mengisi biodata, silahkan mengunggah berkas');
            $this->session->set_flashdata('jenisalert','alert-info');
            redirect('Daftar/Unggah');
        } else {
            $this->laman('laman/v_bio', $data);
        }
    }

    public function Unggah()
    {
        if (!$this->session->userdata("logged_in")){
            redirect("/");
        }
        $id_users = $this->session->userdata('id');
        $this->db->where('id_users',$id_users);
        $berkas = $this->db->get('berkas');
        $detil = $this->M_User->getDetailById($id_users);


        if ($berkas->num_rows() == 0) {
            $data['nama_user'] = $detil['name'];
            $data['fakultas'] = $this->db->get('fakultas')->result_array();
            $newDate = date("D, d/M/Y", strtotime($detil['last_login']));
            $data['last_login'] = $newDate;
            $this->laman('laman/v_upload', $data);
        }
        else {
            $this->session->set_flashdata('oops', 'Anda telah mengunggah berkas, silahkan mencetak paspor');
            $this->session->set_flashdata('jenisalert','alert-info');
            redirect("Profile");
        }
    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ ?>