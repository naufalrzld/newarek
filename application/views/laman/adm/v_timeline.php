<!-- Page Content -->
    <?php $this->load->view('menu/adm/navbar_adm');?>
    <?php $this->load->view('menu/adm/navbar_sec_adm');?>
    <div class="row sesi_pos"><h4>Timeline</h4></div>
    <div class="row sesi_pos statis">
    	<div class="col-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">Tambah Timeline</button><br><br>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		                <th>ID</th>
		                <th>Kegiatan</th>
		                <th>Tanggal Mulai</th>
		                <th>Tanggal Selesai</th>
		                <th>Aksi</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php foreach ($timeline as $data):?>
		        	
		            <tr>
		                <td><?php echo $data['id'];?></td>
		                <td><?php echo $data['kegiatan'];?></td>
		                <td><?php echo $data['tanggal_mulai'];?></td>
		                <td><?php echo $data['tanggal_selesai'];?></td>
		                <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $data["id"] ?>"><span class="far fa-edit"></span></button>
		                	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data["id"];?>"> <i class="far fa-trash-alt"></i></a></button>
		                </td>
		            </tr>
                    <div class="modal fade" id="edit<?= $data["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Edit Data</h3    >
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center><h3 class="modal-title" id="exampleModalLabel">Data <?= $data["kegiatan"] ?></h3></center>
                                    <!-- Insert Form here -->
                                    <form method="POST" action="<?php echo site_url('panitia/editTimeline') ?>">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID</label>
                                            <input type="text" class="form-control" value="<?= $data["id"] ?>" disabled>
                                            <input type="hidden" name="id" value="<?= $data["id"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kegiatan</label>
                                            <input type="text" class="form-control" name="kegiatan" value="<?= $data["kegiatan"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Mulai</label>
                                            <input type="date" class="form-control" name="tanggal_mulai" value="<?= $data["tanggal_mulai"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Selesai</label>
                                            <input type="date" class="form-control" name="tanggal_selesai" value="<?= $data["tanggal_selesai"] ?>">
                                        </div>
                                        <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
		            <div class="modal fade" id="del<?php echo $data["id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		              <div class="modal-dialog" role="document">
		                <div class="modal-content">
		                  <div class="modal-header">
		                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                      <span aria-hidden="true">&times;</span>
		                    </button>
		                  </div>
		                  <div class="modal-body">
		                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ingin menghapus <?php echo $data['kegiatan'];?> ?</h5>
		                  </div>
		                  <div class="modal-footer">
		                  	<a href="<?php echo base_url().'Panitia/deleteTimeline/'. $data["id"];?>" class="btn btn-danger">YA</a>
		                    <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>
		                    
		                  </div>
		                </div>
		              </div>
		            </div>
		            <?php endforeach;?>
		        </tbody>
		        <tfoot>
		            <tr>
                        <th>ID</th>
		                <th>Kegiatan</th>
		                <th>Tanggal Mulai</th>
		                <th>Tanggal Selesai</th>
		                <th>Aksi</th>
		            </tr>
		        </tfoot>
	    </table>
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Timeline</h3    >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                        
                        <form method="POST" action="<?php echo site_url('panitia/addTimeline') ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kegiatan</label>
                                <input type="text" class="form-control" name="kegiatan" placeholder="Kegiatan" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Mulai</label>
                                <input type="date" class="form-control" name="tanggal_mulai" value="<?= $data["tanggal_mulai"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Selesai</label>
                                <input type="date" class="form-control" name="tanggal_selesai" value="<?= $data["tanggal_selesai"] ?>">
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>