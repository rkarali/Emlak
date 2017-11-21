<!DOCTYPE html>
<?php
if (!$this->session->logged_in)
{ 
	redirect(base_url()."admin/login");
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$title?></title>
    <!-- Bootstrap Styles-->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?=base_url()?>assets/admin/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?=base_url()?>assets/admin/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>Admin</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                


                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <?=$this->session->logged_in['kullanici'];?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ayarlar</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url()?>admin/login/logout"> <i class="fa fa-sign-out fa-fw"></i> Çıkış</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->