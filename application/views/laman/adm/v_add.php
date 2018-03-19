<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

    <!-- Page Content -->
    <?php $this->load->view('menu/adm/navbar_adm');?>
    <?php $this->load->view('menu/adm/navbar_sec_adm');?>
    <div class="row sesi_pos">
    	<div class="col-3">
    		<div class="card ">
    		  <div class="card-header bg-danger text-white">
    		    <h4>Tambah Panitia</h4>
    		  </div>
    		  <div class="card-body">
    		  	<?php if($this->session->flashdata('tambahAdmGagal')){?>
    		  		 <div class="alert alert-danger alert-dismissible" role="alert">
    		  		 	<?php echo $this->session->flashdata('tambahAdmGagal');?>
    		  		</div>
    		  	<?php }
    		  	else if($this->session->flashdata('tambahAdm')){
		  		?>
		  			 <div class="alert alert-success alert-dismissible" role="alert">
    		  		 	<?php echo $this->session->flashdata('tambahAdm');?>
    		  		</div>
		  		<?php }?>
    		    <?php echo form_open('Panitia/addAdm');?>
    		    	<div class="form-group">
    		    	   <label for="exampleFormControlSelect1">Nama Lengkap</label>
    		    	   <select name="admId" class="form-control" id="exampleFormControlSelect1">
    		    	   	<option value="0">Pilih Nama</option>
    		    	     <?php foreach ($usr as $data):?>
    		    	     	<option value="<?php echo $data['id_users'];?>"><?php echo ucwords($data['name']);?></option>
    		    	     <?php endforeach;?>
    		    	   </select>
    		    	 </div>
    		    	 <div class="form-group">
    		    	 	<label for="exampleFormControlSelect1">Admin Level</label>
    		    	 	<select  name="admLevel" class="form-control" id="exampleFormControlSelect1">
	    		    	 	<option value="0">Pilih Level</option>
	    		    	 	<option value="admin">Admin</option>
	    		    	 	<option value="super admin">Super Admin</option>
    		    	   </select>
    		    	 </div>
    		    	 <button type="submit" class="btn btn-outline-danger btn-block">Tambah</button>
    		    <?php echo form_close();?>
    		  </div>
    		</div>
    	</div>
    	<div class="col-8">
    		<table id="dataadm" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>Nama</th>
		                <th>Status</th>
		                <th>Aksi</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        	foreach ($adm->result_array() as $data):
		        		
		        	?>
		        	
		            <tr>
		                <td><?php echo $data['real_name'];?></td>
		                <td><?php echo $data['status'];?></td>
		                <td width="120px">
		                	<!--<a href="#" class="btn btn-warning text-white"><i class="far fa-edit"></i></a>	
		                	 <a href="<?php echo base_url().'Panitia/hpsUsers/'. $id;?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
		                	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del"> <i class="far fa-trash-alt"></i></a></button>
		                </td>
		            </tr>
		            <?php endforeach;?>
		        </tbody>
		        <tfoot>
		            <tr>
		               <th>Nama</th>
		                <th>Status</th>
		                <th>Aksi</th>
		            </tr>
		        </tfoot>
	    </table>
    	</div>
    </div>