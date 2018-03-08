<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

    <!-- Page Content -->
<nav class="navbar justify-content-between navbar-light bg-danger">
    <a class="navbar-brand" href="<?php echo base_url() . '/Home';?>">
        <img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Dashboard Page
    </a>
    <nav class="navbar-expand-lg ">
        <!-- Menu Bar-->
        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
            <p class="welcome_txt">
               <?php echo $nama; ?>
                <span class="last_log">Login Terakhir: <?php echo $last_login;?></span>
            </p>
            <ul class="navbar-nav welcome">
                <img src="<?php echo base_url();?>assets/img/user.svg" width="50" height="50" d-inline-block align-top img-fluid" alt="">

            </ul>
        </div>
    </nav>
</nav>
<!-- Nav bawah Header-->
<nav class="navbar menu navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav jarak">
            <li class="nav-item active">
                <a class="navbar-brand" href="#"><div class="home"></div> </a>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi Rekrutasi
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Registrasi Calon Anggota
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tes dan Wawancara
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown jarak">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pengumuman
                </a>
                <div class="dropdown-menu utama" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--End of Nav Bawah header-->

<div class="container-fluid">
    <div class="row sesi_pos">
        <div class="col-lg-1 sesi">
            <div class="nomor">1</div>
            <div class="judul_sesi">
                Biodata Diri
            </div>
        </div>
        <div class="col-lg-6 formulir">
            <div class="card ">
                <div class="card-header">
                    Biodata Diri Detail
                </div>
                <div class="card-body">
                    <?php echo form_open();?>
                    <div class="form-row">
                        <div class="col-8">
                            <label> Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm" value="<?php echo $nama; ?>" readonly>
                        </div>
                        <div class="col-4">
                            <label> NIM</label>
                            <input type="text" class="form-control form-control-sm" name="nim">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <label>Fakultas</label>
                            <select class="custom-select form-control-sm">
                                <option selected>Pilih Fakultas</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label>Program Studi</label>
                            <select class="custom-select form-control-sm">
                                <option selected>Pilih Program Studi</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <label>Angkatan</label>
                            <select class="custom-select form-control-sm">
                                <option selected>Pilih Angkatan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label>ID Line</label>
                            <input type="text" class="form-control form-control-sm" placeholder="e.g puspita">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 formulir">
            <div class="card">
                <div class="card-header">
                    Peminatan
                </div>
                <div class="card-body">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Mobile Programming</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">UI / UX Designer</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Business Analyst</label>
                    </div>
                    <p>*Pilih berdasarkan keinginan mu</p>
                </div>
            </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<div class="fixed-bottom foot">
    <div class="row mt-logo">
        <div class="col-1 logo_foot">
            <!-- <div class="logo_foot"></div> -->
        </div>
        <div class="col-3">
            <p class="copyright">Copyright &copy; <?php echo date("Y");?> &bull; All right Reserved. Aplikasi Rekrutmen Mobile Innovation Laboratory</p>
        </div>
    </div>
</div>
    
    <!-- /.container -->

    

