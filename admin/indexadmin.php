<?php 
session_start();
  require_once("conn.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Sistem Informasi HRD || Dashboard</title>

  <!-- Favicons -->
  <link href="img/logo128.jpg"   rel="icon">
  <link href="img/logo128.jpg" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  

  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" /> 
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />

  <!--external css-->
  
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  </head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>Sistem<span>  HRD</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="index.php">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a> -->
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.php">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.php">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="index.php">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a> -->
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.php">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.php">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
            <!-- <?php 
                                $querys1 = "SELECT COUNT(id_cuti) FROM cuti WHERE status = 'menunggu'";
                                     $cuti = mysqli_query($conn, $querys1);
                                     $cutis = mysqli_fetch_array($cuti); 
                                    ?> -->
          <li id="header_notification_bar" class="dropdown">
            <!-- <a data-toggle="dropdown" class="dropdown-toggle" >
              <i href="tablecuti.php" class="fa fa-bell-o"></i>
              <span class="badge bg-warning"><?=$cutis['COUNT(id_cuti)'];?></span>
              </a> -->
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              
                                   

              <li>

                <p class="yellow">You have <?=$cutis['COUNT(id_cuti)'];?> new notifications</p>
              </li>
              
             
             
              <li>
                <a href="tablecuti.php">See all notifications</a>
              </li>
            </ul>
                    <li><?php include 'waktunow.php' ?></li>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Logout</a></li>
        </ul>
      </div>  
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->


        <ul class="sidebar-menu" id="nav-accordion">


        <?php

        include('conn.php');

        $id = $_SESSION['id_user'];
          $query="SELECT * FROM user WHERE id_user='$id'";
        $query1=mysqli_query($conn,$query);
         $query2=mysqli_fetch_array($query1);
             $nama=$query2['namalengkap'];
               $gambars=$query2['pas_photo'];
            ?>
          <!--  <p class="centered"><a href="profile.html"><img src="img/user/marthin.jpeg" class="img-circle" width="80"></a></p>
 -->         <center><img  src="img/<?php  echo $query2['pas_photo']; ?>" width="100px;" style="border: 5px;padding-top: 0px;border-radius: 20px" /> 
            </center>
             
            <center><h5><?php echo $nama;?></h5></center>
            <!--  <h5 class="centered">Marthin Tampubolon</h5> -->
          
          

          <li class="mt">
            <a class="active" href="indexadmin.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li>
            <a class="sub-menu" href="profile.php">
              <i class="fa fa-user"></i>
              <span> Profil</span>
              </a>
          </li>
          <li>
            <a  href="daftarkontrakan.php">
              <i class="fa fa-folder"></i>
              <span> Data  Kontrakan pegawai</span>
              </a>
              
           <!-- <li>
            <a  href="datacuti.php">
              <i class="fa fa-folder"></i>
              <span> Data Cuti</span>
              </a>

              <ul class="sub">
              <li><a href="tablecuti.php">Daftar Request Cuti</a></li> 
     
            </ul>
          </li> -->
            <!-- <li>
            <a  href="docmanage.php">
              <i class="fa fa-envelope"></i>
              <span>Atur Dokumen</span>
              </a>
              <ul class="sub">
                <li><a href="daftarkontrakan.php">Insert Data</a></li>
                <li><a href="uploaddoc.php">Upload File</a></li>
            </ul>
          </li> -->
           <li>
            <a  href="kirimemail.php">
              <i class="fa fa-location-arrow"></i>
              <span>Kirim Email</span>
              </a>
          </li>
            <li>
            <a  href="Registeruser.php">
              <i class="fa fa-users"></i>
              <span>User</span>
              </a>
                <ul class="sub">
                <li><a href="Registeruser.php">Daftarkan User</a></li>
                <li><a href="daftaruser.php">Daftar Pengguna</a></li>
                    <li><a href="reminder.php">Reminder kontrak kerja</a></li>
            </ul>
          </li>
               <li>
            <a  href="grafik.php">
              <i class="fa fa-cogs"></i>
              <span>Manage Grafik</span>
              </a>
          </li>
         <li>
            <a  href="pengumuman2.php">
              <i class="fa fa-bullhorn"></i>
              <span>Kelola Pengumuman</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">


              
            <!--CUSTOM CHART START -->
                         <div class="alert alert-success fade in m-b-15alert alert-success fade in m-b-15">
                              <strong>
                                <i class="fa-lg fa fa-check text-success">

                                </i>
                                Sistem Human Resource Development v1.0

                              </strong>
                              <br><br>
                            <p>Selamat Datang di sistem Human Resource Development</p>

                       </div>

                        <!-- Bagian widget -->

            <div class="col-md-3 col-sm-6">
                                  <br><br>
                <div class="panel panel-inverse" style=" box-shadow: 7px 7px 5px grey;">
                  <div class="panel-heading" style="background-color: black;">
                                  <?php 
                                $querys = "SELECT COUNT(id_user) FROM USER WHERE role = 2";
                                     $jumlah_pengguna = mysqli_query($conn, $querys);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>
                                    <a href="daftar_user.php" style="text-decoration: none; color: #fff;">
                                    <p class="main-text"><span class="badge bg-important"><?=$jumlah_penggunas['COUNT(id_user)'];?> Pengguna</span></p><p class="text-muted">Jumlah Pengguna</p></a> 

                  </div>
                    
                  <div class="panel-body">
                  <center><a href="daftaruser.php"><button class="btn btn-basic">See Detail</button></a></center>               
                    </div>
                  </div>

                </div>
            
            <!-- <div class="col-md-3 col-sm-6">
                                  <br><br>
                <div class="panel panel-inverse" style=" box-shadow: 7px 7px 5px grey;">
                  <div class="panel-heading" style="background-color: black;">
   
                              <?php 
                                $querys1 = "SELECT COUNT(file_id) FROM file";
                                     $fileku = mysqli_query($conn, $querys1);
                                     $filekus = mysqli_fetch_array($fileku); 
                                    ?>
                                    <a href="daftar_user.php" style="text-decoration: none; color: #fff;">
                                    <p class="main-text"><span class="badge bg-important"><?=$filekus['COUNT(file_id)'];?> File</span></p><p class="text-muted">Jumlah File</p></a> 


                  </div>
                    
                  <div class="panel-body">
                              <center> <a href="uploaddoc.php"><button class="btn btn-basic" >See Detail</button></a></center>                    
                    </div>
                  </div>

                </div> -->
                 

          
            <div class="col-md-3 col-sm-6">
                                  <br><br>
                <div class="panel panel-inverse" style=" box-shadow: 7px 7px 5px grey;">
                  <div class="panel-heading" style="background-color: black;">
   
                              <?php 
                                $querys1 = "SELECT COUNT(id_pengumuman) FROM pengumuman";
                                     $pengumuman = mysqli_query($conn, $querys1);
                                     $pengumumans = mysqli_fetch_array($pengumuman); 
                                    ?>
                                    <a href="daftar_user.php" style="text-decoration: none; color: #fff;">
                                    <p class="main-text"><span class="badge bg-important"><?=$pengumumans['COUNT(id_pengumuman)'];?> Pengumuman</span></p><p class="text-muted">Jumlah Pengumuman  </p></a> 


                  </div>
                    
                  <div class="panel-body">
                              <center> <a href="pengumuman2.php"><button class="btn btn-basic" >See Detail</button></a></center>                    
                    </div>
                  </div>

                </div>


<!-- 
                <div class="col-md-3 col-sm-6">
                                  <br><br>
                <div class="panel panel-inverse" style=" box-shadow: 7px 7px 5px grey;">
                  <div class="panel-heading" style="background-color: black;">
                      <?php 
                                $querys1 = "SELECT COUNT(id_cuti) FROM cuti WHERE status = 'menunggu'";
                                     $cuti = mysqli_query($conn, $querys1);
                                     $cutis = mysqli_fetch_array($cuti); 
                                    ?>
                                    <a href="tablecuti.php" style="text-decoration: none; color: #fff;">
                                    <p class="main-text"><span class="badge bg-important"><?=$cutis['COUNT(id_cuti)'];?> Cuti</span></p><p class="text-muted"> Jumlah Cuti Belum di Approve</p></a> 

                  </div>
                    
                  <div class="panel-body">
                              <center> <a href="tablecuti.php"><button class="btn btn-basic" >See Detail</button></a></center>                    
                                        
                    </div>
                  </div>

                </div>      -->
                <!-- End -->
                <div class="container">
                 
                </div>

                  <!-- Bagian Chart -->
                 <?php include_once('chart.php'); ?>

                 <!-- end -->

          </div>
          
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
           
               

                          <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                    
                   <!-- //Kalender -->
                         <div class="tanggal">
                      <!DOCTYPE html>
                    <html>
                    <head>
	                  
                    </head>
                    <body style=>
                      	<script type='text/javascript'>
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
      document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
      
			//-->
		</script>

</body>
</html>

                    </div>

                    <!-- endcalender -->

                  <div id="my-calendar"></div>
                </div>
              </div>

           
            </div>
         
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Kelompok PA 2</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Kelompok 6 PA 2</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>

  <script src="lib/bootstrap-switch.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.tagsinput.js"></script>
  <!-- custom checkbox -->
 <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>
    <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
      <script src="lib/advanced-form-components.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Sistem HRD!',
        // (string | mandatory) the text inside the notification
        text: 'Selamat datang di sistem HRD,Manajemen Human Resource ITDel',
        // (string | optional) the image to display on the left
        image: 'img/logo128.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
