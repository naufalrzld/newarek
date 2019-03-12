<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!-- Page Content -->
<?php $this->load->view('menu/adm/navbar_adm');?>
<?php $this->load->view('menu/adm/navbar_sec_adm');?>
<div class="row sesi_pos"><h4>Pengumuman</h4></div>
<div class="row sesi_pos statis">
    <div class="col-12">
        <form method="post" action="<?php echo site_url("Panitia/penerimaan"); ?>">
        <div class="form-group">
            <select name="tahap" class="form-control" id="exampleFormControlSelect1">
                <option value="0">Pilih Tahap</option>
                <option value="1">Tahap Seleksi Berkas</option>
                <option value="2">Tahap Seleksi Test Tulis</option>
                <option value="3">Tahap Seleksi Intern</option>
                <option value="4">Tahap Seleksi Wawancara</option>
            </select>
        </div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mobile Programming</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">UI / UX Designer</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Business Analyst</a>
            </div>
        </nav>
        <div class="tab-content p-t-35" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table id="mp" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
                        <th>NIM</th>
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
		        	<?php foreach ($mp as $data):
		        		$ids = "id_usernya si dia adalah".$data['id_users'];
		        		$id = base64_encode($ids);
		        		$id = str_replace('=','',$id);
		        		// $id = $data['id_users'];
		        	?>
		        	
		            <tr>
		                <td><?php echo $data['student_id'];?></td>
		                <td><?php echo $data['name'];?></td>
		                <td><?php echo $data['nama_fakultas'];?></td>
		                <td><?php echo $data['nama_prodi'];?></td>
		                <td><?php echo $data['minat'];?></td>
		                <td><?php echo $data['angkatan'];?></td>
		                <td>
		                     <a href="http://line.me/ti/p/~<?php echo $data['id_line'];?>" class="line_acc" target="_blank">
                                <?php echo $data['id_line'];?></a>
		                   </td>
		                <td width="120px">
                            <div class="custom-control custom-checkbox setuju">
                                <input type="checkbox" class="custom-control-input cek" name="terima_mp[]" id="check_mp_<?=$data['id_users']; ?>" value="<?=$data["id_users"] ?>">
                                <label class="custom-control-label" for="check_mp_<?=$data['id_users']; ?>">Pilih</label>
                            </div>
		                </td>
		            </tr>
		            <?php endforeach;?>
		        </tbody>
		        <tfoot>
		            <tr>
                        <th>NIM</th>
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
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <table id="ui" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>NIM</th>
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
		        	<?php foreach ($ui as $data):
		        		$ids = "id_usernya si dia adalah".$data['id_users'];
		        		$id = base64_encode($ids);
		        		$id = str_replace('=','',$id);
		        		// $id = $data['id_users'];
		        	?>
		        	
		            <tr>
		                <td><?php echo $data['student_id'];?></td>
		                <td><?php echo $data['name'];?></td>
		                <td><?php echo $data['nama_fakultas'];?></td>
		                <td><?php echo $data['nama_prodi'];?></td>
		                <td><?php echo $data['minat'];?></td>
		                <td><?php echo $data['angkatan'];?></td>
		                <td>
		                     <a href="http://line.me/ti/p/~<?php echo $data['id_line'];?>" class="line_acc" target="_blank">
                                <?php echo $data['id_line'];?></a>
		                   </td>
		                <td width="120px">
                            <div class="custom-control custom-checkbox setuju">
                                <input type="checkbox" class="custom-control-input cek" name="terima_ui[]" id="check_ui_<?=$data['id_users']; ?>" value="<?=$data["id_users"] ?>">
                                <label class="custom-control-label" for="check_ui_<?=$data['id_users']; ?>">Pilih</label>
                            </div>
		                </td>
		            </tr>
		            <?php endforeach;?>
		        </tbody>
		        <tfoot>
		            <tr>
                        <th>NIM</th>
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
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <table id="ba" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>NIM</th>
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
		        	<?php foreach ($ba as $data):
		        		$ids = "id_usernya si dia adalah".$data['id_users'];
		        		$id = base64_encode($ids);
		        		$id = str_replace('=','',$id);
		        		// $id = $data['id_users'];
		        	?>
		        	
		            <tr>
		                <td><?php echo $data['student_id'];?></td>
		                <td><?php echo $data['name'];?></td>
		                <td><?php echo $data['nama_fakultas'];?></td>
		                <td><?php echo $data['nama_prodi'];?></td>
		                <td><?php echo $data['minat'];?></td>
		                <td><?php echo $data['angkatan'];?></td>
		                <td>
		                     <a href="http://line.me/ti/p/~<?php echo $data['id_line'];?>" class="line_acc" target="_blank">
                                <?php echo $data['id_line'];?></a>
		                   </td>
		                <td width="120px">
                            <div class="custom-control custom-checkbox setuju">
                                <input type="checkbox" name="terima_ba[]" class="custom-control-input cek" id="check_ba_<?=$data['id_users']; ?>" value="<?=$data["id_users"] ?>">
                                <label class="custom-control-label" for="check_ba_<?=$data['id_users']; ?>">Pilih</label>
                            </div>
		                </td>
		            </tr>
		            <?php endforeach;?>
		        </tbody>
		        <tfoot>
		            <tr>
                        <th>NIM</th>
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
        <button type="submit" class="btn btn-danger btn-md float-right btn_simpan">Kirim</button>
        </form>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/b4/js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" integrity="sha256-qcV1wr+bn4NoBtxYqghmy1WIBvxeoe8vQlCowLG+cng=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#ba').dataTable();
        $('#mp').dataTable();
        $('#ui').dataTable();
    });
</script>