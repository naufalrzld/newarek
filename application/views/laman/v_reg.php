<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<?php echo $script;?>
<div class="container-fluid reg-box">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-body jrk_dlm">
                <div class="row jrk_logo">
                    <div class="col-6 mx-auto">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo base_url();?>assets/img/logo_arek.png" class="img-fluid">
                            </div>
                            <div class="col-6">  
                                <div class="title_reg">
                                    Aplikasi Rekrutmen <span class="thn"><?php echo date("Y");?></span>   
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                    <h6 class="card-title text-center mb-4 mt-3">Daftarkan dirimu sekarang !</h6>
                   <?php 
                    $attr = array('class' => 'form_reg');
                   echo form_open('Login/register',$attr);?>
                   <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name="usr" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-sm" name="email" placeholder="Masukkan alamat surel" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-sm" name="pwd" placeholder="Masukkan kata sandi" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-sm" name="pwd2" placeholder="Konfirmasi kata sandi" required>
                    </div>
                    <div align="center" class="gndr">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Laki-laki" checked>
                            <label class="custom-control-label" for="customRadioInline1" checked>Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Perempuan">
                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group mx-auto"><?php echo $capcay;?></div>
                    <div class="form-group text-center">
                        <small>Dengan klik daftar, Anda telah menyetujui kebijakan yang berlaku pada proses rekrutmen anggota lab motion. </small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-danger">Daftar</button>
                    </div>
                    <?php echo form_close();?>
                    <div class="float-right have_acc">
                        Sudah punya akun?
                        <a href="<?php echo base_url();?>" role="button">Silakan Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /.container -->

    

