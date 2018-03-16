<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paspor extends MY_Controller {
	 public function __construct(){

	 	 parent::__construct();
	 	 $this->load->model('M_user');
	 	 $this->load->model('M_regis');
	 }

	public function index(){

	 $this->load->library('ciqrcode');
	 $id_users = $this->session->userdata('id');
	 $detil  = $this->M_regis->viewDetailsProfile($id_users);


	 $namafile = $detil['student_id'];
	 $nama = $detil['name'];
	 $gen =  $detil['gender'];
	 $fak = $detil['nama_fakultas'];
	 $prodi = $detil['nama_prodi'];
	 $minat = $detil['minat'];
	 switch($detil['minat']){
	     case 'MP':
	         $minat =  "Mobile Programming";
	         break;
	     case 'UI':
	         $minat = "UI / UX Designer";
	         break;
	     case 'BA':
	     $minat = "Business Analyst";
	     break;
	 }

	$params['data'] ="Nama Lengkap: ".$nama."\n"."Jenis Kelamin: ".$gen."\n"."Fakultas: ".$fak."\n".$prodi."\n".$minat;
	$params['cacheable']	= false; //boolean, the default is true
	$params['level'] = 'L';
	$params['size'] = 4;
	$params['savename'] = 'qrcode/'.$namafile.".png";

	$params['nama'] = $nama;
	$params['minat'] = $minat;
	$params['prodi'] = $prodi;
	// var_dump($params['data']);
	$this->ciqrcode->generate($params);

	$this->paspor('laman/qr',$params);
	}
}