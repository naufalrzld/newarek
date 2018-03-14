

<nav class="navbar justify-content-between navbar-light bg-danger">
    <div class="navbar-brand dash_logo">
        <a  href="<?php echo base_url() . 'Home';?>">
            <img src="<?php echo base_url();?>assets/img/logo_arek_w.png"  class="img-fluid align-top logo_w" alt="">
        </a>
        <p class="logo_txt">Aplikasi <br>Rekrutmen <span class="thn_dash"><?php echo date("Y");?></span> </p>
    </div>
    <nav class="navbar-expand-lg ">
        <!-- Menu Bar-->
        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
            <p class="welcome_txt">
                <?php echo $nama_user; ?>
                <span class="last_log">Login Terakhir: <?php echo $last_login;?></span>
            </p>
            <ul class="navbar-nav welcome">
                <img src="<?php echo base_url();?>assets/img/user.svg" width="50" height="50" d-inline-block align-top img-fluid" alt="">
                <a class="logout_btn" href="<?php echo base_url().'Login/logout';?>" role="button">
                    <img src="<?php echo base_url();?>assets/img/keluar.png" width="50" height="50" d-inline-block align-top img-fluid" alt="">
                    <!--<label>keluar</label>-->
                </a>
            </ul>

        </div>

    </nav>
</nav>
