<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

    <!-- Page Content -->
    <?php $this->load->view('menu/navbar_head');?>
    <?php $this->load->view('menu/navbar_second');
    ?>

<!-- Nav bawah Header-->

<!--End of Nav Bawah header-->
<div class="container-fluid">
    <div class="row sesi_pos">
        <div class="col-8 sambutan">
            <h1>Selamat Datang</h1>
            <p class="subtitle">di halaman resmi rekrutmen motion <?php echo date("Y");?></p>
            <div class="grs_welcome"></div>
            <p class="content_welcome">
                Semua proses rekruitasi calon member atau member baru Mobile Innovation Laboratory 2018 akan melalui website ini. Selamat mengikuti proses rekruitasi.
                “Every Movement is Motion !!”
            </p>
            <?php if($status_isi==0){?>
                <a href="<?php echo base_url().'Daftar'?>" class="btn btn-danger btn-md btn_daftar">Daftar &rarr;</a>
              
            <?php } else{?>
                <a href="<?php echo base_url().'Profile'?>" class="btn btn-danger btn-md btn_daftar">Lihat Data &rarr;</a>
            <?php }?>
        </div>
        <div class="col-4">
            <div class="card tgl">
                <div class="card-header tgl_skrg">
                    <div class="row">
                        <div class="col-3">
                            <span class="tgl_nomer float-right"> <?php echo date("d");?></span>
                        </div>
                        <div class="col-9">
                            <div class="row today_txt">
                                Hari Ini
                            </div>
                            <div class="row month_txt">
                                <?php echo bulan()." ".date("Y");?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   <?php $this->load->view('menu/timeline');?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed-bottom foot">
    <div class="row mt-logo">
        <div class="col-1 logo_foot">
            <!-- <div class="logo_foot"></div> -->
        </div>
        <div class="col-3">
            <p class="copyright">Copyright &copy; <?php echo date("Y");?> &bull; All right Reserved. Aplikasi Rekrutmen Mobile Innovation Laboratory</p>
        </div>
    </div>
</div>
    
    <!-- /.container -->

    

