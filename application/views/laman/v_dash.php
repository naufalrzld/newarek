<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

    <!-- Page Content -->
<body>
<nav class="navbar justify-content-between navbar-light bg-danger">
    <a class="navbar-brand" href="#">
        <img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Dashboard Page
    </a>
    <nav class="navbar-expand-lg ">
        <!-- Menu Bar-->
        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
            <p class="welcome_txt">
               Muhammad Adi Bayu Setiawan
                <span class="last_log">Login Terakhir: <?php echo date('D, d/m/Y');?></span>
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
    <div class="row">
        <div class="col-lg-1 sesi">
            <div class="nomor">1</div>
            <div class="judul_sesi">
                Biodata Diri
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card formulir">
                <div class="card-header">
                    Biodata Diri
                </div>
                <div class="card-body">
                    Bagian ini akan diisi pada pertemuan selanjutnya.
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1">
                <div class="logo"></div>
            </div>
            <div class="col-lg-2 copyright">
                <p> Copyright &copy; 2018 &bull; All Right Reserved  Designed by RAM</p>
            </div>
        </div>
    </div>
</footer>

</body>
    <!-- /.container -->

    

