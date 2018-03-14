<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $nama;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
   <!-- <link href="<?php /*echo base_url();*/?>assets/b4/css/bootstrap.css" rel="stylesheet">
-->
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    if ($this->session->flashdata("status")){
        echo "<script>alert($this->session->flashdata('status'))</script>";
    }
    ?>
</head>

<body>
<?php
/*
 * Variabel $headernya diambil dari libraries template.php
 * (application/libraries/template.php)
 * */
echo $content;
?>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/b4/js/bootstrap.min.js"></script>

</body>

</html>