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
                Selamat Datang, <span class="nama">Cahyadi</span>
            </p>
            <ul class="navbar-nav welcome">
                <li class="nav-item dropdown">
                    <a class="nav-link menu_link_txt dropdown-toggle" href="#" id="navbarDropdown"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url();?>assets/img/user.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</nav>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1 sesi">
            <div class="nomor">1</div>
            <div class="judul_sesi">
                Pengisian Data Diri
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

    

