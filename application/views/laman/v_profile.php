<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('menu/navbar_head');?>
<?php $this->load->view('menu/navbar_second');?>


<div class="container-fluid">
    <div class="row sesi_pos">
    	<div class="col-4">
    		<div class="card" style="width: 18rem;">
    		  <img class="card-img-top avatar" src="<?php echo base_url();?>assets/img/boy.svg" alt="Card image cap">
    		  <!-- <div class="card-body">
    		    <span class="btn btn-outline-primary btn-block btn-file">
    		        Cari Foto <input type="file">
    		    </span>
    		  </div> -->
    		</div>
    	</div>
    	<div class="col-6 detail_user">
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
            <p>Status Cetak Paspor: 
                <?php 
                if($paspor == 0){
                    $paspor =  "Belum mencetak";
                }else{
                    $paspor =  "Belum mencetak";
                }
                echo $paspor;?>
                    
            </p>    
            <a href="#" class="btn btn-danger btn-block" role="button">Cetak Paspor</a>
    	</div>
	</div>
</div>
<?php $this->load->view('menu/footer');?>