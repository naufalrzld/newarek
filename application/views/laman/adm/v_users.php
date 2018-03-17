<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

    <!-- Page Content -->
    <?php $this->load->view('menu/adm/navbar_adm');?>
    <?php $this->load->view('menu/adm/navbar_sec_adm');?>
    <div class="row sesi_pos"><h4>Pengguna Terdaftar</h4></div>
    <div class="row sesi_pos statis">
    	<div class="col-12">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>Nama</th>
		                <th>Fakultas</th>
		                <th>Prodi</th>
		                <th>Peminatan</th>
		                <th>Angkatan</th>
		                <th>ID Line</th>
		                <th>Aksi</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php foreach ($usr as $data):
		        		$ids = "id_usernya si dia adalah".$data['id_users'];
		        		$id = base64_encode($ids);
		        		$id = str_replace('=','',$id);
		        		// $id = $data['id_users'];
		        	?>
		        	
		            <tr>
		                <td><?php echo $data['name'];?></td>
		                <td><?php echo $data['nama_fakultas'];?></td>
		                <td><?php echo $data['nama_prodi'];?></td>
		                <td><?php echo $data['minat'];?></td>
		                <td><?php echo $data['angkatan'];?></td>
		                <td><?php echo $data['id_line'];?></td>
		                <td width="120px">
		                	<a href="#" class="btn btn-warning text-white"><i class="far fa-edit"></i></a>	
		                	<a href="<?php echo base_url().'Panitia/hpsUsers/'. $id;?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
		                </td>
		            </tr>
		            <?php endforeach;?>
		        </tbody>
		        <tfoot>
		            <tr>
		               <th>Nama</th>
		                <th>Fakultas</th>
		                <th>Prodi</th>
		                <th>Peminatan</th>
		                <th>Angkatan</th>
		                <th>ID Line</th>
		                <th>Aksi</th>
		            </tr>
		        </tfoot>
	    </table>
	</div>
</div>