<?php
include "login_syn.php";
include "functions.php";
session_start();
  if(!isset($_SESSION["login"])){
      header("location: halamanawal.php");
      exit;
  }
$result = mysqli_query($connect,"SELECT * FROM data");
$id_user = $_SESSION["id_user"];
$username = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo_iadel.png">
    <title>About Us</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    
        <link rel="stylesheet" href="css3/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css3/fontAwesome.css">
        
        <link rel="stylesheet" href="css3/owl-carousel.css">
        <link rel="stylesheet" href="css3/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <style type="text/css">
            u{
                font-family: Tahoma, Verdana, sans-serif;
            }
        </style>
        <script src="js1/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">Website Alumni Del<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
           

          

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>
            

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="profile2.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>

             <li class="nav-item active">
                <a class="nav-link" href="alumni2.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Alumni</span></a>
            </li>

             <li class="nav-item active">
                <a class="nav-link" href="loker2.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Lowongan Pekerjaan</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="about.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>About</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                      
                        <?php 
                        $query = $connect->query("SELECT * From user1 where id_user = '$id_user' ");
                        $i=1;
                        foreach ($query as $key => $value) {
                        ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $value['Nama']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/<?= $value['gambar']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <div class="dropdown-divider"></div>
                              
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                        <?php }  ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                   <section class="banner banner-secondary" id="top" style="background-image: url(img/dell.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Contact Us</h2>
                         <div class="blue-button">
                            <a href="home.php">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

                    <!-- DataTales Example -->
                    <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2><u>Kelompok 17</u></h2>
                        </div>
                    </div> 
                </div> 
            <center>

                <div class="owl-carousel owl-theme">
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/rio.jpeg" alt="" width="350" height="400">
                            </div>
                            <div class="text-content">
                                <h4>Rio Putrawan Zalukhu</h4>
                                <span>13320038</span>
                            </div>
                            <div class="plus-button">
                                <a href="https://www.facebook.com/profile.php?id=100011144857244"><i class="fa fa-facebook"></i></a>
                                <a href=" https://twitter.com/ZalukhuRio"><i class="fa fa-twitter"></i></a>
                                <a href=" https://www.linkedin.com/in/rio-zalukhu-195234212/"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/riozalukhu12/"><i class="fa fa-instagram"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/dody.jpeg" alt="" width="350" height="400">
                            </div>
                            <div class="text-content">
                                <h4>Dody I.J Nadapdap</h4>
                                <span>13320040</span>
                            </div>
                            <div class="plus-button">
                                <a href=" https://www.facebook.com/dody.nadapdap"><i class="fa fa-facebook"></i></a>
                                <a href=" https://twitter.com/DodyNadapdap"><i class="fa fa-twitter"></i></a>
                                <a href=" https://www.linkedin.com/in/dody-nadapdap-26a502189/"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/dodynadapdap325/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/kania.jpeg" alt="" width="350" height="400" >
                            </div>
                            <div class="text-content">
                                <h4>Kania Reski Amalya S</h4>
                                <span>13320047</span>
                            </div>
                            <div class="plus-button">
                                <a href="https://web.facebook.com/kaniares.kaniares"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/kaniareski"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/kania-reski-amalya-s-aaa09b212/"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/kaniialya_20/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </center>
        </section>
    </main>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js1/vendor/bootstrap.min.js"></script>
    
    <script src="js1/datepicker.js"></script>
    <script src="js1/plugins.js"></script>
    <script src="js1/main.js"></script>
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>