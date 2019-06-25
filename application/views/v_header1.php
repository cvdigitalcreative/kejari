<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title?></title>
<meta name="description" content="Place your description here">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/pic/kejari.png'?>">
<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?= base_url()?>assets/css/update-responsive.css" type="text/css" media="all">
<!-- Slider -->
<link rel="stylesheet" href="<?= base_url()?>assets/css/flexslid.css" type="text/css" media="screen">
<!-- bootstrap css -->
<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css" type="text/css" media="screen">
<!-- cerousel css -->
<link rel="stylesheet" type="<?= base_url()?>assets/text/css" href="css/elastislide.css" />
<!-- Lightbox -->
<link rel="stylesheet" href="<?= base_url()?>assets/css/lightbox.min.css">
<!-- Style Switcher Box -->
<link rel="stylesheet" href="<?= base_url()?>assets/css/jsDatePick_ltr.css">
<!-- Right Hand Side Text Direction -->
<link rel="stylesheet" href="<?= base_url()?>assets/css/switcher.css">

<!-- skins -->
<link rel="stylesheet" name="skins" href="<?= base_url()?>assets/css/default.css" type="text/css" media="all">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie_lt9.css">
<![endif]-->
<!-- jquery -->
</head>
<body>
<div class="wrapper inner_page">
  <section class="banner-bg home">  
	<!-- header -->
	
  <header id="header">
    <section class="container container-fluid">
      <h1 id="logo"><a href="<?= base_url()?>"></a></h1>
      <h1 style="font-size: 45px;margin-bottom: 0; ">Kejaksaan Negeri</h1>
      <h2>Sumatera Selatan</h2>
    </section>
  	<section class="nav-holder">
    	<section class="container container-fluid">
        <div class="col-md-12" style="width: 62%;position:relative;display: inline-block;">
          <nav id="nav">
            <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                 <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                 <div class="nav-collapse collapse">
          
                  <ul class="nav">
                    <!--<li class="active"> <a href="index.html">Home</a> </li>-->
                    <li class="dropdown"> <a class="dropdown-toggle" href="<?= base_url()?>">Beranda</a></li>
                    <li class="dropdown"> <a class="dropdown-toggle" href="#">Profil<b class="caret"></b> </a>
                      <ul class="dropdown-menu">
                        <li> <a href="<?= base_url()?>Home/Kata_Sambutan">Kata Sambutan</a> </li>
                        <li> <a href="<?= base_url()?>Home/Pejabat_Struktural"> Pejabat Struktural</a> </li>
                        <li> <a href="<?= base_url()?>Home/Perintah_Harian"> Perintah Harian Kejaksaan Agung RI </a> </li>
                        <li> <a href="<?= base_url()?>Home/Struktur"> Struktur Organisasi </a> </li>
                        <li> <a href="<?= base_url()?>Home/Profil"> Kejari SumSel </a> </li>
                        <li> <a href="<?= base_url()?>Home/Visi_Misi"> Visi & Misi </a> </li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle" href="<?= base_url()?>Home/Peraturan">Peraturan</a></li>
                    <li class="dropdown"> <a class="dropdown-toggle" href="<?= base_url()?>Artikel">Berita</a></li>
                    <li class="dropdown"> <a class="dropdown-toggle" href="#">Info Perkara<b class="caret"></b> </a>
                      <ul class="dropdown-menu">
                        <li> <a href="<?= base_url()?>Home/Pidana_Umum">Pidana Umum</a> </li>
                      </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle" href="<?= base_url()?>Home/Layanan_Hukum">Layanan Hukum</a></li>        
                  </ul>
                </div>
                <!--/.nav-collapse -->
              </div>
              <!-- /.navbar-inner -->
            </div>
            <!-- /.navbar -->
          </nav>
        </div>
    		
  		</section>
    </section>
  </header>