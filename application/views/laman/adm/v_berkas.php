<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!-- Page Content -->
<?php $this->load->view('menu/adm/navbar_adm');?>
<?php $this->load->view('menu/adm/navbar_sec_adm');?>
<div class="row sesi_pos"><h4>Berkas Calon Pendaftar </h4></div>
<div class="row sesi_pos statis">
    <div class="col-12">
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
                        <th>Nama</th>
                        <th>Unduh Berkas</th>
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
                            <td><?php echo $data['name'];?></td>
                            <td><a href="<?php echo base_url().'uploads/'.$data['nama_berkas'];?>" class="btn btn-info"><i class="fas fa-download"></i></a></td>
                            <td width="120px">
                                <!--<a href="#" class="btn btn-warning text-white"><i class="far fa-edit"></i></a>
		                	 <a href="<?php echo base_url().'Panitia/hpsUsers/'. $id;?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $id;?>"> <i class="far fa-trash-alt"></i></a></button>
                            </td>
                        </tr>
                                        <div class="modal fade" id="del<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ingin menghapus <?php echo $data['name'];?> ?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo base_url().'Panitia/hpsUsers/'. $id;?>" class="btn btn-danger">YA</a>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                    <?php endforeach;?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Unduh Berkas</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table id="ui" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Unduh Berkas</th>
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
                            <td><?php echo $data['name'];?></td>
                            <td><a href="<?php echo base_url().'uploads/'.$data['nama_berkas'];?>" class="btn btn-info"><i class="fas fa-download"></i></a></td>
                            <td width="120px">
                                <!--<a href="#" class="btn btn-warning text-white"><i class="far fa-edit"></i></a>
		                	 <a href="<?php echo base_url().'Panitia/hpsUsers/'. $id;?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $id;?>"> <i class="far fa-trash-alt"></i></a></button>
                            </td>
                        </tr>
                                        <div class="modal fade" id="del<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ingin menghapus<?php echo $data['name'];?>?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo base_url().'Functions/removeBerkas/'.md5($data['id_users']);?>" class="btn btn-danger">YA</a>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>
                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                    <?php endforeach;?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Unduh Berkas</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <table id="ba" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Unduh Berkas</th>
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
                            <td><?php echo $data['name'];?></td>
                            <td><a href="<?php echo base_url().'uploads/'.$data['nama_berkas'];?>" class="btn btn-info"><i class="fas fa-download"></i></a></td>
                            <td width="120px">
                                <!--<a href="#" class="btn btn-warning text-white"><i class="far fa-edit"></i></a>
		                	 <a href="<?php echo base_url().'Panitia/hpsUsers/'. $id;?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $id;?>"> <i class="far fa-trash-alt"></i></a></button>
                            </td>
                        </tr>
                      <div class="modal fade" id="del<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ingin menghapus<?php echo $data['name'];?>?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo base_url().'Functions/removeBerkas/'.md5($data['id_users']);?>" class="btn btn-danger">YA</a>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>
                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    <?php endforeach;?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Unduh Berkas</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                </table>


            </div>
        </div>

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