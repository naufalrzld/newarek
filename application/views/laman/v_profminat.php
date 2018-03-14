<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!--End of Nav Bawah header-->
<?php $this->load->view('menu/navbar_head');?>
<?php $this->load->view('menu/navbar_second');?>
<div class="container-fluid">
    <div class="row sesi_pos">
        <h3>Peminatan di Motion</h3>
    	<div class="col-md-12 minat_tab_content">
    		<nav>
    		  <div class="nav nav-tabs minat_tab" id="nav-tab" role="tablist">
    		    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mobile Programming</a>
    		    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">UI / UX Designer</a>
    		    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Business Analyst</a>
    		  </div>
    		</nav>
    		<?php $this->load->view('menu/tab_content');?>
    	</div>
    </div>
</div>
<?php $this->load->view('menu/footer');?>