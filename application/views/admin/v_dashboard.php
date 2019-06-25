<?php
        /* Mengambil query report*/
        foreach($visitor as $result){
            $bulan[] = $result->tgl; //ambil bulan
            $value[] = (integer) $result->jumlah; //ambil nilai
        }

        
        /* end mengambil query*/
?>

<!--=================================
 Main content -->

 <!--=================================
wrapper -->


<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Dashboard Warung Kreatif</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/admin/images/favicon.ico" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/style.css" />
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="<?php echo base_url()?>assets/admin/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 header start-->
 
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="dashboard.html"><img src="<?php echo base_url()?>assets/admin/images/logo-dark.png" alt="" ></a>
    <a class="navbar-brand brand-logo-mini" href="dashboard.html"><img src="<?php echo base_url()?>assets/admin/images/logo-icon-dark.png" alt=""></a>
  </div>
  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
      <div class="search">
        <a class="search-btn not_click" href="javascript:void(0);"></a>
        <div class="search-box not-click">
          <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
          <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
        </div>
      </div>
    </li>
  </ul>
  <!-- top bar right -->
  
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown ">
      <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="ti-bell"></i>
        <span class="badge badge-danger notification-status"> </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
        <div class="dropdown-header notifications">
          <strong>Notifications</strong>
          <span class="badge badge-pill badge-warning"><?php echo $jum_pesan;?></span>
        </div>
        <div class="dropdown-divider"></div>
        <?php 
                    $inbox=$this->db->query("SELECT tbl_inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM tbl_inbox WHERE inbox_status='1' ORDER BY inbox_id DESC LIMIT 5");
                    foreach ($inbox->result_array() as $in) :
                        $inbox_id=$in['inbox_id'];
                        $inbox_nama=$in['inbox_nama'];
                        $inbox_tgl=$in['tanggal'];
                        $inbox_pesan=$in['inbox_pesan'];
        ?>
        <a href="<?php echo base_url()?>Admin/Inbox" class="dropdown-item"><?php echo $inbox_pesan;?> <small class="float-right text-muted time"><?php echo $inbox_tgl;?></small> </a>
        <?php endforeach;?>
      </div>
    </li>
    <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
              $c=$q->row_array();
          ?>
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="<?php echo base_url().'assets/admin/images/'.$c['pengguna_photo'];?>" alt="avatar">
      </a>
      
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
          <div class="media">
            <div class="media-body">
              <h5 class="mt-0 mb-0"><?php echo $c['pengguna_nama'];?></h5>
              <span><?php echo $c['pengguna_email'];?></span>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
        <a class="dropdown-item" href="<?php echo base_url().'Administrator/logout'?>"><i class="text-danger ti-unlock"></i>Logout</a>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->

<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar -->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
          <a href="<?php echo base_url()?>Admin/Dashboard"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span> </a>
        </li>
        <!-- menu title -->
         <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Website Components</li>
        <!-- All Form  -->
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Portofolio & Posting</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="Form" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Admin/Kategori">Kategori Portofolio & Posting</a> </li>
           <!--  <li> <a href="<?php echo base_url()?>Admin/Tulisan/add_tulisan">Form Add Tulisan</a> </li> -->
            <li> <a href="<?php echo base_url()?>Admin/Tulisan">List Portofolio & Posting</a> </li>
          </ul>
        </li>
        <li>
         <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#tentang">
            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Tentang</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="tentang" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Admin/Kategori_tentang">Kategori Tentang</a></li>
            <li> <a href="<?php echo base_url()?>Admin/Tentang">List Tentang</a> </li>
          </ul>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#galeri-menu">
            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">Galeri</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="galeri-menu" class="collapse" data-parent="#sidebarnav">
             <li> <a href="<?php echo base_url()?>Admin/Album">Kategori Galeri</a> </li>
            <li> <a href="<?php echo base_url()?>Admin/Galeri">List Galeri</a> </li>
          </ul>
        </li>
         <!-- menu item mailbox-->
        <li>
          <a href="<?php echo base_url()?>Admin/Inbox"><i class="ti-email"></i><span class="right-nav-text">Mail box</span> </a>
        </li>
      
    </ul>
  </div> 
</div>
<!-- Left Sidebar End-->

    <div class="content-wrapper">
      <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Dashboard</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mb-30">
           <div class="card card-statistics">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-8">
                  <div class="chart-wrapper" style="width: 100%; margin: 0 auto; "> 
                  <canvas id="canvas1" width="800"></canvas>
                  </div>
               </div>
               <div class="col-xl-4 mt-3 mt-xl-0">
               <h5 class="card-title">Social Source</h5>
                 <h4>$50,500 </h4>
                  <div class="mt-20">
                     <div class="clearfix">
                      <?php 
                        $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Chrome'");
                        $jml=$query->num_rows();
                      ?>
                         <p class="mb-10 float-left">Chrome</p>
                         <p class="mb-10 text-info float-right"><?php echo $jml;?></p>
                      </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                <div class="mt-20">
                     <div class="clearfix">
                      <?php 
                        $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Firefox' OR pengunjung_perangkat='Mozilla'");
                        $jml=$query->num_rows();
                      ?>
                         <p class="mb-10 float-left">Mozilla Firefox</p>
                         <p class="mb-10 text-success float-right"><?php echo $jml;?></p>
                      </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-success" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mt-20 mb-20">
                   <div class="clearfix">
                      <?php 
                        $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Googlebot'");
                        $jml=$query->num_rows();
                      ?>
                       <p class="mb-10 float-left">Googlebot</p>
                       <p class="mb-10 text-secondary float-right"><?php echo $jml;?></p>
                    </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-secondary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mt-20">
                     <div class="clearfix">
                      <?php 
                        $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_perangkat='Opera'");
                        $jml=$query->num_rows();
                      ?>
                         <p class="mb-10 float-left">Opera</p>
                         <p class="mb-10 text-warning float-right"><?php echo $jml;?></p>
                      </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-danger" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mt-20 mb-20">
                     <div class="clearfix">
                      <?php 
                          $query=$this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(CURDATE(),'%m%y')");
                          $jml=$query->num_rows();
                      ?>
                         <p class="mb-10 float-left">Pengunjung Bulan Lalu</p>
                         <p class="mb-10 text-danger float-right"><?php echo $jml;?></p>
                      </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-danger" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
               </div>
            </div> 
          </div> 
        </div> 
      </div>      
        <div class="row">
           <div class="col-xl-4 mb-30">
             <div class="card-statistics h-100">
               <div class="card-body p-0">
                  <div class="row">
                      <div class="col-xl-12 mb-30">
                        <div class="card card-statistics fb-bg h-100">
                          <div class="card-body">
                            <div class="clearfix">
                              <div class="float-left icon-box-fixed">
                                <span class="text-white">
                                  <i class="fa fa-facebook highlight-icon" aria-hidden="true"></i>
                                </span>
                              </div>
                              <div class="float-right">
                                <h4 class="text-white">11,543</h4>
                                <p class="card-text text-white">Likes </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 mb-30">
                        <div class="card card-statistics youtube-bg h-100">
                          <div class="card-body">
                            <div class="clearfix">
                              <div class="float-left icon-box-fixed">
                                <span class="text-white">
                                  <i class="fa fa-youtube highlight-icon" aria-hidden="true"></i>
                                </span>
                              </div>
                              <div class="float-right">
                                <h4 class="text-white">1,20,543</h4>
                                <p class="card-text text-white">Subscribers  </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 mb-30">
                        <div class="card card-statistics twitter-bg h-100">
                          <div class="card-body">
                            <div class="clearfix">
                              <div class="float-left icon-box-fixed">
                                <span class="text-white">
                                  <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                                </span>
                              </div>
                              <div class="float-right">
                                <h4 class="text-white">41,652</h4>
                                <p class="card-text text-white">Followers </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12">
                        <div class="card card-statistics instagram-bg h-100">
                          <div class="card-body">
                            <div class="clearfix">
                              <div class="float-left icon-box-fixed">
                                <span class="text-white">
                                  <i class="fa fa-instagram highlight-icon" aria-hidden="true"></i>
                                </span>
                              </div>
                              <div class="float-right">
                                <h4 class="text-white">69,454</h4>
                                <p class="card-text text-white">Followers </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                </div>
              </div>
            </div>
            <div class="col-xl-4 mb-30">
              <div class="card card-statistics h-100">
                <div class="card-body">
                  <h5 class="card-title">Latest post</h5>
                  <div class="btn-group info-drop">
                    <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i> Add Post</a>
                      <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i> Edit Post</a>
                      <a class="dropdown-item" href="#"><i class="text-success ti-eye"></i> View Blog</a>
                    </div>
                  </div>
                    <div class="blog-box blog-2">         
                    <img class="img-fluid w-100" src="images/blog/01.jpg" alt="">
                     <div class="blog-info pt-10">
                      <span class="post-category"><a href="#">Business</a></span>
                      <h4> <a href="#"> Does your life lack meaning</a></h4>
                      <p class="mb-10">I truly believe Augustine’s words are true.</p>
                      <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                      </div>            
                    </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 mb-30">
              <div class="card card-statistics h-100">
                <div class="p-4 text-center bg-warning">
                   <h5 class="mb-60 text-white"><?php echo $c['pengguna_nama'];?></h5>
                </div>
                <div class="card-body text-center">
                  <div class="avatar-top">
                    <img class="img-fluid w-25 rounded-circle " src="<?php echo base_url().'assets/admin/images/'.$c['pengguna_photo'];?>" alt="">
                   </div>
                   <p class="mt-30"><?php echo $c['pengguna_email'];?></p>
                    <div class="social-icons color-icon mt-20">
                      <ul>
                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-github"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                      </ul>
                    </div>
                   <div class="divider mt-20"></div>
                   <div class="row">
                      <div class="col-6 col-sm-4 mt-30">
                         <b>Project</b>
                         <h4 class="text-success mt-10">09</h4>
                      </div>
                      <div class="col-6 col-sm-4 mt-30">
                        <b>Messages </b>
                         <h4 class="text-danger mt-10">255</h4>
                      </div>
                      <div class="col-12 col-sm-4 mt-30">
                        <b>Views</b>
                         <h4 class="text-warning mt-10">608</h4>
                      </div>
                    </div>
                 </div>
              </div>
            </div>
        </div>
     
<!--=================================
 wrapper -->
      
<!--=================================
 footer -->

    <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="#"> Warung Kreatif </a> All Rights Reserved. </p>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="text-center text-md-right">
            <li class="list-inline-item"><a href="#">Terms & Conditions </a> </li>
            <li class="list-inline-item"><a href="#">API Use Policy </a> </li>
            <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
          </ul>
        </div>
      </div>
    </footer>
    </div><!-- main content wrapper end-->
  </div>
</div>
</div>

<!--=================================
 footer -->


 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url()?>assets/admin/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url()?>assets/admin/js/';</script>

<!-- chart -->
<!-- <script src="<?php echo base_url()?>assets/admin/js/chart-init.js"></script> -->

<!-- calendar -->
<script src="<?php echo base_url()?>assets/admin/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="<?php echo base_url()?>assets/admin/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="<?php echo base_url()?>assets/admin/js/morris.init.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/admin/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url()?>assets/admin/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="<?php echo base_url()?>assets/admin/js/toastr.js"></script>

<!-- validation -->
<script src="<?php echo base_url()?>assets/admin/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/admin/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
 
</body>
</html>

<script type="text/javascript">
  var config = {
        type: 'line',
        data: {
          labels: <?php echo json_encode($bulan);?>,
          datasets: [{
            label: "Facebook",
            borderColor: window.chartColors.red,
            backgroundColor: window.chartColors.red,
            data: [
                      <?php echo json_encode($value);?>
                  ],
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      title:{
        display:false,
        text:"Line Chart - Stacked Area"
      },
      tooltips: {
        mode: 'index',
      },
      hover: {
        mode: 'index'
      },
      scales: {
        xAxes: [{
          scaleLabel: {
            display: true,
            labelString: 'Month'
          }
        }],
        yAxes: [{
          stacked: true,
          scaleLabel: {
            display: true,
            labelString: 'Visitor'
          }
        }]
      }
    }
  };

  window.onload = function() {
          if ($('#canvas1').exists()) {
           var ctx1 = document.getElementById("canvas1").getContext("2d");
            window.myLine1 = new Chart(ctx1, config);
          }
        }
</script>