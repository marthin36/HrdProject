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
  <title>Sistem HRD||Table Request Cuti</title>

  <!-- Favicons -->
  <link href="img/logo128.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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
    $telpon=$query2['nomortelepon'];
    $emails=$query2['email'];
    $tanggallahirs=$query2['tanggallahir'];
    $jenis_kelamins=$query2['jenis_kelamin'];
    $gambars=$query2['pas_photo'];

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
            <?php 
                                $querys1 = "SELECT COUNT(id_cuti) FROM cuti WHERE status = 'menunggu'";
                                     $cuti = mysqli_query($conn, $querys1);
                                     $cutis = mysqli_fetch_array($cuti); 
                                    ?>
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" >
              <i href="tablecuti.php" class="fa fa-bell-o"></i>
              <span class="badge bg-warning"><?=$cutis['COUNT(id_cuti)'];?></span>
              </a>
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
            <a class="sub-menu" href="profile.php">
              <i class="fa fa-user"></i>
              <span> Profil</span>
              </a>
          </li>
           <li>
            <a class="active" href="datacuti.php">
              <i class="fa fa-folder"></i>
              <span> Data Cuti</span>
              </a>

              <ul class="sub">
              <li><a href="tablecuti.php">Daftar Request Cuti</a></li> 
<!--                <li><a href="datacuti.php">Request Cuti </a></li>  -->
            </ul>
          </li>
             <li>
            <a  href="docmanage.php">
              <i class="fa fa-envelope"></i>
              <span>Atur Dokumen</span>
              </a>
              <ul class="sub">
                <li><a href="daftarkontrakan.php">Insert Data</a></li>
                <li><a href="uploaddoc.php">Upload File</a></li>
            </ul>
          </li>
           <li>
            <a  href="kirimemail.php">
              <i class="fa fa-location-arrow"></i>
              <span>Kirim Email</span>
              </a>
          </li>
            <li>
            <a  href="Registeruser.php">
              <i class="fa fa-users"></i>
              <span>Registrasi User</span>
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
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Table Request Cuti</h3>


     <div class="row content-panel">


        <div class="row mt">
          <div class="col-lg-12">
              <div class="container">    
        <div class="row">
            <div class="col-lg-12">
   
                
                <br><br>
                  <div id="edit" class="tab-pane">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Nama</th>
                        <th>Alasan</th>
                        <th>Mulai Cuti</th>
                        <th>Selesai Cuti</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                    <?php 
                    include('conn.php');
                        $idku = $_SESSION['id_user'];
                      
                        $query = "SELECT * FROM cuti ORDER BY id_cuti DESC ";   
                      
                        $item = mysqli_query($conn,$query);
                        while($items = mysqli_fetch_array($item)){
                    ?>
                    <tr>
                        <td><?=$items['id_cuti'];?></td>
                        <td><?=$items['nama'];?></td>
                        <td><?=$items['tujuan'];?></td>
                        <td><?=$items['alasan'];?></td>
                        <td><?=$items['mulaicuti'];?></td>
                        <td><?=$items['selesaicuti'];?></td>
                         <td><?=$items['status'];?></td>
                     
                         <td>
                      <a href="detailrequest.php?id_cuti=<?=$items['id_cuti'];?>"><button class="btn btn-success btn-xs"><i class="fa fa-eye"></i></button></a>
                   
                    </td>

                        <!-- <td><a href="detail_supir.php?id_user=<?=$items['id_user']?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a> -->
                        <!-- <a href=""><button class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></button></a> -->
                        <!-- <a href="delete_user.php?id_user=<?=$items['id_user']?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a> -->
                        </td>
                    </tr>
                <?php } ?>
                </table>
                        </div>
            </div>
        </div>
    </div>
          </div>
        </div>


        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>
