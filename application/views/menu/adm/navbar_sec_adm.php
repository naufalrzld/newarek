<nav class="navbar menu navbar-expand-lg navbar-light bg-light">
    <div class="container" id="menu">
        <ul class="navbar-nav jarak">
            <li class="nav-item  home_menu" id="Home">
                <a class="navbar-brand mx-auto" href="<?php echo base_url();?>Panitia/Dashboard" target="_self"><div class="home"></div> </a>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" target="_self" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pengguna
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url().'Panitia/allUsers';?>">Pengguna Terdaftar</a>
                    <?php if($status =="super admin"){?>
                    <a class="dropdown-item" href="<?php echo base_url().'Panitia/addComittee';?>">Tambah Panitia</a>
                    <?php }?>
                </div>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Penerimaan
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url().'Panitia/viewBerkas';?>">Lihat Berkas</a>
<!--                    <a class="dropdown-item" href="--><?php //echo base_url().'Daftar/Unggah';?><!--">Form Upload Berkas</a>-->
<!--                    <a class="dropdown-item" href="--><?php //echo base_url().'Profile';?><!--">Cetak Paspor</a>-->
                </div>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Statistik Penerimaan
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Pendaftar Tahun <?php echo date("Y");?></a>
                    <a class="dropdown-item" href="#">Lulus Tahap 1</a>
                    <a class="dropdown-item" href="#">Diterima / Ditolak</a>
                </div>
            </li> 
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pengumuman
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Berita Penting</a>
                    <a class="dropdown-item" href="#">Pengumuman Tahap 1</a>
                    <a class="dropdown-item" href="#">Pengumuman Final</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php if($this->session->flashdata('akses')){?>
<div class="alert alert-danger alert-dismissible" role="alert">
   <?php
     echo $this->session->flashdata('akses');
    ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>