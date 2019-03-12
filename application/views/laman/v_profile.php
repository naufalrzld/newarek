<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('menu/navbar_head');?>
<?php $this->load->view('menu/navbar_second');?>


<div class="container-fluid">
    <div class="row sesi_pos">
    	<div class="col-4">
    		<div class="card" style="width: 18rem;">
                <?php 
                if($gender == "Laki-laki"){
                    ?>
    		  <img class="card-img-top avatar" src="<?php echo base_url();?>assets/img/boy.png" alt="Card image cap">
              <?php } else{?>
                <img class="card-img-top avatar" src="<?php echo base_url();?>assets/img/girl.png" alt="Card image cap">
              <?php 
              }
              ?>
              
    		  <!-- <div class="card-body">
    		    <span class="btn btn-outline-primary btn-block btn-file">
    		        Cari Foto <input type="file">
    		    </span>
    		  </div> -->
    		</div>
    	</div>
    	<div class="col-8 detail_user">
    		<h2 class="namanya"> <?php echo $nama_user;?></h2>
            <p><?php echo $nim." - ".$gender." | id Line: "?> 
                <span>
                    <a href="http://line.me/ti/p/~<?php echo $line;?>" class="line_acc" target="_blank">
                    <?php echo $line;?></a>
                </span>
            </p>
    		<p><?php echo $fak." - ".$prodi." (".$angk.")";?></p>
            <?php 
                switch($minat){
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

            ?>
            <p>Peminatan: <span class="minat_txt"><?php echo $minat;?></span></p>
            <p>Status Unggah Berkas:
                 <?php 
                if($berkas == NULL){
                    $berkas =  "Belum Unggah Berkas";
                }else{
                    $berkas =  "Sudah Mengunggah Berkas";
                }
                echo $berkas;?>
            </p>
            <p> Status Registerasi:
                <?php 
                if($berkas == "Sudah Mengunggah Berkas"){
                  echo "Sudah Selesai";
                }else{
                    echo "Belum Selesai";
                }
                ?>
            </p>
            <?php
            if($berkas != "Belum Unggah Berkas"){
            ?>
            <p class="paragraf">Silahkan download applikasi android kami di <a href="#">bit.ly/blablaba</a> untuk memudahkan kalian dalam informasi seputar rekrutasi. Untuk pengguna iPhone mohon maaf kami belum bisa menyediakan aplikasinya, untuk informasi tentang rekrutasi bisa di cek melalui website.</p>
            <!-- <a href="<?php echo base_url().'Paspor';?>" class="btn btn-danger btn-block" role="button" target="_blank">Cetak Paspor</a>

            <p class="print_saran">*Disarankan menggunakan Browser Chrome untuk mencetak paspor</p> -->
            <?php } ?>
    	</div>
	</div>
    <!-- <div class="row bg_howto">
        <div class="col-8 mx-auto">
             <img src="<?php echo base_url().'assets/img/howto.jpg';?>" class="img-fluid">
        </div>
    </div> -->
</div>
<?php $this->load->view('menu/footer');?>