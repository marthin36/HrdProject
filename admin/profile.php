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
  <title>Sistem HRD || Profil</title>

  <!-- Favicons -->
  <link href="img/logo128.jpg" rel="icon">
  <link href="img/logo128.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>

            <?php
            include('conn.php');
            $id = $_SESSION['id_user'];

              $query="SELECT * FROM user WHERE id_user='$id'";
    $query1=mysqli_query($conn,$query);
    $query2=mysqli_fetch_array($query1);
    $nama=$query2['namalengkap'];
    $alamat=$query2['alamat'];
    $username=$query2['username'];
     $password=$query2['password'];
    $telpon=$query2['nomortelepon'];
    $emails=$query2['email'];
    $jabatans=$query2['jabatan'];
    $tanggallahirs=$query2['tanggallahir'];
    $jenis_kelamins=$query2['jenis_kelamin'];
    $gambars=$query2['pas_photo'];
    function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}

    ?>






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
         <center><img src="img/<?php echo $query2['pas_photo']; ?>" width="100px;" style="border: 5px;padding-top: 0px;border-radius: 20px"/></center>
          <center><h5> <?php
                echo $nama;?></h5></center>
     
          <li class="mt">
            <a  href="indexadmin.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li>
            <a class="active" class="sub-menu" href="profile.php">
              <i class="fa fa-user"></i>
              <span> Profil</span>
              </a>
          </li>
          <li>
            <a  href="daftarkontrakan.php">
              <i class="fa fa-folder"></i>
              <span> Data  Kontrakan pegawai</span>
              </a>
              </li>
       <!-- <li>
            <a class="sub-menu" href="#">
              <i class="fa fa-folder"></i>
              <span> Data Cuti</span>
              </a>

              <ul class="sub">
              <li><a href="tablecuti.php">Daftar Data Cuti Anda</a></li> 
   
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
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
            </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a  href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
            </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li class="active"><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
            </a>
            <ul class="sub">
              <li><a href="form_component.html">Form Components</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
            </a>
            <ul class="sub">
              <li><a href="basic_table.html">Basic Table</a></li>
              <li><a href="responsive_table.html">Responsive Table</a></li>
              <li><a href="advanced_table.html">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
            </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
            </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div> -->
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
      
        <div class="row mt">
        
          <div class="col-lg-12">
          
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>Email</h4>
                  <p><?php echo $emails;?></p>
                  <h4>No Telepon</h4>
                  <p><?php echo $telpon;?></p>
                  <h4>Tanggal Lahir</h4>
                  <p><?php echo $tanggallahirs;?></p>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?php echo $nama;?></h3>
                <h6>test</h6>
                <p>HRD Mengelola pegawai ITDel.</p>
                <br>
                <!-- <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p> -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <!-- <p><img src="img/ui-sam.jpg" class="img-circle">
                </p> -->
                <img src="img/<?php
                echo $query2['pas_photo']; ?>" width="160px;" style="border: 50px;border-color: black;padding-top: 59px;" class="img-circle"/> 
                
                  
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Overview</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">Edit Profile</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                    

                              <table border="0" width="400" align="center" style="font-size:20px">
                                  <tr>
                                    <td>Nama </td>
                                    <td>:</td>
                                    <td> <p><?php echo $nama  ?></p></td>
                                </tr>
                                 <tr>
                                    <td>Alamat </td>
                                    <td>:</td>
                                    <td> <p><?php echo $alamat  ?></p></td>
                                </tr>
                                 <tr>
                                    <td>Username </td>
                                    <td>:</td>
                                    <td> <p><?php echo $username  ?></p></td>
                                </tr>
                                 <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td> <p><?php echo $jabatans  ?></p></td>
                                </tr>
                                 <tr>
                                    <td>Jenis Kelamin </td>
                                    <td>:</td>
                                    <td> <p><?php echo $jenis_kelamins  ?></p></td>
                                </tr>
                            </table>
                    

                        <!-- code overview -->





                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="contact" class="tab-pane">
                    <div class="row">
                              <table border="0" width="400" align="center" style="font-size:20px">
                                  <tr>
                                    <td>No Hp </td>
                                    <td>:</td>
                                    <td> <p><?php echo $telpon  ?></p></td>
                                </tr>
                                   <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td> <p><?php echo $emails  ?></p></td>
                                </tr>

                            </table>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Update Data Diri</h4>
                        <form  class="form-horizontal" method="post" action="updateprofil.php" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $query2['id_user'];?>" name="id_user"> 
                        <div class="form-group">
                            <label class="col-lg-2 control-label"> Nama</label>
                            <div class="col-lg-6">
                           <input type="text" name ="namalengkap" value="<?php echo $query2['namalengkap'] ?>" class="form-control" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Alamat</label>
                            <div class="col-lg-6">
                             <input type="text" name ="alamat" value="<?php echo $query2['alamat'] ?>" class="form-control" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-6">
                             <input type="text" name ="username" value="<?php echo $query2['username'] ?>" class="form-control" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                              <input type="text" name ="password" value="<?php echo $query2['password'] ?>" class="form-control" required />
                            </div>
                          </div>
                             <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" name ="email" value="<?php echo $query2['email'] ?>" class="form-control" required />
                            </div>
                              </div>
                                 <div class="form-group">
                            <label class="col-lg-2 control-label">Jabatan</label>
                            <div class="col-lg-6">
                              <input type="text" name ="jabatan" value="<?php echo $query2['jabatan'] ?>" class="form-control" required />
                            </div>
                              </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">No Telephone</label>
                            <div class="col-lg-6">
                              <input type="text" name ="nomortelepon" value="<?php echo $query2['nomortelepon'] ?>" class="form-control" required />
                            </div>
                              </div>

                              <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal Lahir</label>
                            <div class="col-lg-6">
                              <input type="date" name ="tanggallahir" value="<?php echo $query2['tanggallahir'] ?>" class="form-control" required />
                            </div>
                          </div>
                            <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="radio" class="" name="jenis_kelamin" value="Pria" <?php echo active_radio_button("Pria", $query2['jenis_kelamin'])?> required> Pria
                    <input type="radio" class="" name="jenis_kelamin" value="Wanita" <?php echo active_radio_button("Wanita", $query2['jenis_kelamin'])?>  required> Wanita
                  </div>
                </div>
                               <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" name="edit" type="submit">Update</button>
                              <button class="btn btn-theme04" type="reset">Reset</button>
                            </div>
                        </form>
                      </div>
                      
                       
                        
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
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
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function () {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Dashio Admin Theme!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
</body>

</html>