<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

    <!-- Page Content -->
    <?php $this->load->view('menu/adm/navbar_adm');?>
    <?php $this->load->view('menu/adm/navbar_sec_adm');?>
	 
 	<div class="row sesi_pos"><h4>Pendaftar Tahun ini</h4></div>
    <div class="row sesi_pos statis">
        <div class="col-3">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
              <div class="card-header">Total Pendaftar</div>
              <div class="card-body">
                <h3 class="card-title count"><?php echo $all;?></h3>
                <p class="card-text org"></p>
                <p class="card-text print_saran">*Data yang sudah upload berkas</p>
              </div>
            </div>
        </div>
    	<div class="col-3">
    		<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
    		  <div class="card-header">Business Analyst</div>
    		  <div class="card-body">
    		    <h3 class="card-title count"><?php echo $ba;?></h3>
    		    <p class="card-text text-white org"></p>
    		  </div>
    		</div>
    	</div>
    	<div class="col-3">
    		<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    		  <div class="card-header">Mobile Programming</div>
    		  <div class="card-body">
    		    <h3 class="card-title count"><?php echo $mp;?></h3>
    		    <p class="card-text text-white org"></p>
    		  </div>
    		</div>
    	</div>
    	<div class="col-3">
    		<div class="card bg-danger mb-3" style="max-width: 18rem;">
    		  <div class="card-header text-white">UI / UX Designer</div>
    		  <div class="card-body">
    		    <h3 class="card-title text-white count"><?php echo $ui;?></h3>
    		    <p class="card-text text-white org"></p>
    		  </div>
    		</div>
    	</div>
    </div>
