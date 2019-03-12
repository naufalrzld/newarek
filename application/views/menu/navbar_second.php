<nav class="navbar menu navbar-expand-lg navbar-light bg-light">
    <div class="container" id="menu">
        <ul class="navbar-nav jarak">
            <li class="nav-item  home_menu" id="Home">
                <a class="navbar-brand mx-auto" href="<?php echo base_url();?>Home" target="_self"><div class="home"></div> </a>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" target="_self" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi Rekrutmen
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url().'Info/Alur';?>">Alur Rekrutmen</a>
                    <a class="dropdown-item" href="<?php echo base_url().'Info/Syarat';?>">Persyaratan & Mekanisme</a>
                    <a class="dropdown-item" href="<?php echo base_url().'Info/Minat';?>">Profil Peminatan</a>
                    <a class="dropdown-item" href="<?php echo base_url().'uploads/Letter For Motion_Nama Lengkap.docx';?>" target="_blank">Download Letter For Motion Template</a>
                </div>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Registrasi Calon Anggota
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url().'Daftar';?>">Form Biodata Diri</a>
                    <a class="dropdown-item" href="<?php echo base_url().'Daftar/Unggah';?>">Form Upload Berkas</a>
                    <a class="dropdown-item" href="<?php echo base_url().'Profile';?>">Profile</a>
                </div>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tes dan Wawancara
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Jadwal Slot Tes</a>
                    <a class="dropdown-item" href="#">Jadwal Slot Wawancara</a>
                    <a class="dropdown-item" href="#">Kisi-kisi Tes</a>
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
<?php if($this->session->flashdata('oops')){?>
<div class="alert <?php echo $this->session->flashdata('jenisalert');?> role="alert">
   <?php
     echo $this->session->flashdata('oops');
    ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>