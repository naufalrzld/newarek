<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="container-fluid bg_paspor">
	<div class="row">
		<h5 class="paspor_title">Data Peserta Rekrutmen</h5>
	</div>
    <div class="row bts_bwh">
        <div class="col-12">
        	<div class="row">
        		<div class="col-6">
        			<div class="row">
						<div class="col-4 note_paspor">
				  			<img src="<?php echo base_url().$savename;?>">
				  		</div>
				  		<div class="col-7 bio_detil">
				  			<label>Nama Lengkap</label>
				  				<p><?php echo $nama;?></p>
				  			<label>Program Studi</label>
				  				<p><?php echo $prodi;?></p>
				  			<label>Peminatan</label>
				  				<p><?php echo $minat;?></p>	
			  				<label class="printed float-right">Dicetak oleh <?php echo $nama;?> <br> pada <span><?php echo Date("d M Y h:i");?></span></label>
				  		</div>
        			</div>
        		</div>
        		<div class="col-6">
	        		<div class="col-12 note_paspor">
	        			<img src="<?php echo base_url().'assets/img/note_paspor.png';?>" class="img-fluid">
	        		</div>
        		</div>
          </div>
        </div>
    </div>
    <div class="row bg_paspor">
    	<div class="col-6">
    		<img src="<?php echo base_url().'assets/img/timeline.png';?>" class="img-fluid">
    	</div>
    	<div class="col-6">
    		<p class="stamp_title mx-auto">Stamp Collection</p>
    		<img src="<?php echo base_url().'assets/img/stempel.png';?>" class="img-fluid">
    	</div>
    </div>
    <div class="row bg_paspor">
    	<div class="col-6">
    		<img src="<?php echo base_url().'assets/img/cover1.png';?>" class="img-fluid">
    	</div>
    	<div class="col-6">
    		<img src="<?php echo base_url().'assets/img/cover2.png';?>" class="img-fluid">
    	</div>
    </div>
</div>

    <!-- /.container -->

    

