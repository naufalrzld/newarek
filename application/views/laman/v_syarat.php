<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!--End of Nav Bawah header-->
<?php $this->load->view('menu/navbar_head');?>
<?php $this->load->view('menu/navbar_second');?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-7">
            <img src="<?php echo base_url().'assets/img/syarat.png';?>" class="img-fluid alur">
            <a href="<?php echo base_url().'Daftar'?>" class="btn btn-danger btn-block btn-md">Daftar Sekarang</a>
        </div>
    </div>
</div>
<?php $this->load->view('menu/footer');?>

    <!-- /.container -->

    

