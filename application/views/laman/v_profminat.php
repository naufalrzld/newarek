<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!--End of Nav Bawah header-->
<?php $this->load->view('menu/navbar_head');?>
<?php $this->load->view('menu/navbar_second');?>
<div class="container-fluid">
    <div class="row sesi_pos">
    	<div class="col-md-12">
    		<ul class="nav nav-tabs">
    		  <li class="nav-item">
    		    <a class="nav-link active" href="#">Active</a>
    		  </li>
    		  <li class="nav-item">
    		    <a class="nav-link" href="#">Link</a>
    		  </li>
    		  <li class="nav-item">
    		    <a class="nav-link" href="#">Link</a>
    		  </li>
    		  <li class="nav-item">
    		    <a class="nav-link disabled" href="#">Disabled</a>
    		  </li>
    		</ul>
    	</div>
    </div>
</div>
<?php $this->load->view('menu/footer');?>