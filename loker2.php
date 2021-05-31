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
    <title>Lowongan Pekerjaan</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/buttonstyle.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="css/buttonstyle.css">
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
                                <a class="dropdown-item" href="reset.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Reset Password
                                </a>
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
                   

                    <!-- DataTales Example -->
                    <div class="testimonial">
                    <h1> <b> <center>Lowongan Pekerjaan</center> <b></h1>
                        <div class="bor hidden-xs"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- testimonial content -->
                                <div class="testimonial-content animated">
                                    <!-- User's image , name and designation -->
                                    <h4><img src="img/BFI1.png" alt="" class="img-responsive img-circle"/>BFI Finance<span>, Company</span></h4>
                                    <!-- User's comment -->
                                    <blockquote>
                                        <p>If you want to see about the work at this company, please click the following link <a href="https://www.kalibrr.id/c/bfifinance/jobs/169730/area-general-affair-specialist?sort=Freshness&similar_job_code=1&job_ref=&app_source=job-board-1-11-15-45"> <u>Website BFI</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Mandiri.png" alt="" class="img-responsive img-circle"/>Mandiri Office<span>, Bank</span></h4>
                                    <blockquote>
                                        <p>If you want to see about the work at this Bank, please click the following link <a href="https://www.kalibrr.id/c/pt-bank-mandiri-persero-tbk/jobs/108383/kriya-mandiri-back-office-jakarta?sort=Freshness&similar_job_code=1&job_ref=&app_source=job-board-1-5-15-45"><u>mandiri</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Metrodata.png" alt="" class="img-responsive img-circle"/>PT Metrodata Electronics<span>, Sales Admin SAP</span></h4>
                                    <blockquote>
                                        <p>if you like working as sales you can try the following companies <a href="https://www.kalibrr.id/c/metrodata/jobs/169242/sales-admin-sap?sort=Freshness&similar_job_code=0&job_ref=&app_source=job-board-1-14-15-45"><u>Metrodata</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                           
                             <div class="col-md-4">
                                <!-- testimonial content -->
                                <div class="testimonial-content animated">
                                    <!-- User's image , name and designation -->
                                    <h4><img src="img/Tokopedia.png" alt="" class="img-responsive img-circle"/>Employer Branding Intern<span>, Company</span></h4>
                                    <!-- User's comment -->
                                    <blockquote>
                                        <p>If you want to see about jobs at Tokopedia, please click on the following link <a href="https://www.kalibrr.id/c/tokopedia/jobs/165391/employer-branding-intern-2?similar_job_code=0&job_ref=&app_source=job-board-2-9-15-77"> <u>Tokopedia</u></a></p>
                                    </blockquote>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Tinkerlust.jpg" alt="" class="img-responsive img-circle"/>South Jakarta, Indonesia<span>, Contractual</span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Tinkerlust, please click on the following link <a href="https://www.kalibrr.id/c/tinkerlust/jobs/169719/hrga-intern?similar_job_code=1&job_ref=&app_source=job-board-1-1-15-37"><u>Tinkerlust</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Shopee.png" alt="" class="img-responsive img-circle"/>Promotion Operations<span>, Sales</span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Shopee, please click on the following link <a href="https://www.kalibrr.id/c/shopee/jobs/169829/promotion-operations?sort=Freshness&similar_job_code=0&job_ref=&app_source=job-board-2-11-15-235"><u>Shopee</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <!-- testimonial content -->
                                <div class="testimonial-content animated">
                                    <!-- User's image , name and designation -->
                                    <h4><img src="img/Zenius.png" alt="" class="img-responsive img-circle"/>CEO Office<span>, Management</span></h4>
                                    <!-- User's comment -->
                                    <blockquote>
                                        <p>If you want to see about jobs at Zenius, please click on the following link <a href="https://www.kalibrr.id/c/zenius-education/jobs/166456/ceo-office?sort=Freshness&similar_job_code=0&job_ref=&app_source=job-board-1-5-15-47"> <u>Zenius</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Otto.png" alt="" class="img-responsive img-circle"/>Front End<span>, Developer</span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at OTTODIGITAL, please click on the following link <a href="https://www.kalibrr.id/c/otto-digital/jobs/169939/front-end-developer?sort=Freshness&similar_job_code=1&job_ref=&app_source=job-board-3-7-15-400"><u>OTTODIGITAL</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Astra.png" alt="" class="img-responsive img-circle"/>Full Stack<span>, Developer</span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Astra, please click on the following link <a href="https://www.kalibrr.id/c/astra-financial/jobs/157584/full-stack-developer?sort=Freshness&similar_job_code=0&job_ref=&app_source=job-board-1-14-15-391"> <u>Astra</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                    </div>    
            </div> <br>
            <br>
            <br>
            <div>
                <div class="center">
                    <ul class="pagination">
                    <li><a class="active" href="loker2.php">1</a></li>
                    <li><a href="loker3.php">2</a></li>
                    <li><a href="loker3.php">3</a></li>
                    <li><a href="loker4.php">4</a></li>
                    <li><a href="loker5.php">5</a></li>
                    </ul>
            </div>

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>