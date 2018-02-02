<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row gbr">
            <div class="col-lg-7">
                    <div class="logo"></div>
                    <div class="tulisan">
                        <p class="judul">Aplikasi Rekruitasi </p>
                        <p class="motion">Mobile Innovation Laboratory</p>
                        <p class="tahun"><?php echo date("Y");?></p>
                        <div class="lbr_grs grs">

                        </div>
                    </div>
            </div>
            <div class="col-lg-5 formlogin">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Registration Info</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="geserdikit"><a href="#">Sign Up</a></li>
                    </ul>
                </nav>
                <div class="row">
                    <div class="col-lg-8 formulir">
                        <p class="signin">Sign In</p>
                        <div class="grs_sign"></div>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="pwd"  placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="#" class="pull-right forgot">Forgotten Your Password</a>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg btn-block tombol-login">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    

