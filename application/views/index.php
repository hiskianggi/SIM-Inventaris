<!-- - var navbarShadow = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Tempat Penyimpanan Data Tentang Inventaris">
  <meta name="keywords" content="inventaris">
  <meta name="author" content="Hiskia Web">
  <title>SIM Inventaris</title>
  <link rel="apple-touch-icon" href="<?php echo base_url();?>app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/vendors/css/tables/datatable/datatables.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>app-assets/fonts/simple-line-icons/style.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item">
          <a class="navbar-brand" href="index.html">
            <img class="brand-logo" alt="stack admin logo" src="<?php echo base_url();?>app-assets/images/logo/stack-logo.png">
            <h2 class="brand-text">Inventaris</h2>
          </a>
        </li>
        <li class="nav-item d-md-none">
          <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
        </li>
      </ul>
    </div>
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class="avatar avatar-online">
                <img src="<?php echo base_url();?>app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                <span class="user-name"><?php echo $this->session->userdata('nama');?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('login/logout');?>"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
          <span>Menu</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="Others"></i>
        </li>
        <li class="<?php if ($page=="dashboard"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/dashboard');?>"><i class="ft-airplay"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="<?php if ($page=="pegawai"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/pegawai');?>"><i class="ft-users"></i><span class="menu-title" data-i18n="">Pegawai</span></a>
        </li>
        <li class="<?php if ($page=="petugas"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/petugas');?>"><i class="ft-user-check"></i><span class="menu-title" data-i18n="">Petugas</span></a>
        </li>
        <li class="<?php if ($page=="jenis"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/jenis');?>"><i class="ft-target"></i><span class="menu-title" data-i18n="">Jenis</span></a>
        </li>
        <li class="<?php if ($page=="level"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/level');?>"><i class="ft-trending-up"></i><span class="menu-title" data-i18n="">Level</span></a>
        </li>
        <li class="<?php if ($page=="ruang"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/ruang');?>"><i class="ft-map"></i><span class="menu-title" data-i18n="">Ruang</span></a>
        </li>
        <li class="<?php if ($page=="inventaris"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/inventaris');?>"><i class="ft-radio"></i><span class="menu-title" data-i18n="">Inventaris</span></a>
        </li>
        <li class="<?php if ($page=="data_peminjaman" || $page=="peminjaman"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/data_peminjaman');?>"><i class="ft-cpu"></i><span class="menu-title" data-i18n="">Peminjaman</span></a>
        </li>
        <li class="<?php if ($page=="laporan_peminjaman"){echo 'active';} ?> nav-item"><a href="<?php echo site_url('mastercontrol/page/laporan');?>"><i class="ft-cpu"></i><span class="menu-title" data-i18n="">Laporan</span></a>
        </li>
      </ul>
    </div>
  </div>
  <?php include "content/".$page.".php";?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-dark navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://hiskiaweb.com"
        target="_blank">Hiskia Web </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
      </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url();?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url();?>app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url();?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url();?>app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
      <!-- END PAGE LEVEL JS-->
  </body>
  </html>