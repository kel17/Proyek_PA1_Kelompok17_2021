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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>

                <!-- Begin Page Content -->
                <div class="testimonial">
                    <h1> <b> <center>Lowongan Pekerjaan</center> <b></h1><br>
                        <br>
                        <br>
                        <div class="bor hidden-xs"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- testimonial content -->
                                <div class="testimonial-content animated">
                                    <!-- User's image , name and designation -->
                                    <h4><img src="img/ocbc.png" alt="" class="img-responsive img-circle"/>BUSINESS INSIGHT ANALYTICS<span>, Bank OCBC NISP </span></h4>
                                    <!-- User's comment -->
                                    <blockquote>
                                        <p>If you want to see about the work at Bank OCBC NISP, please click the following link <a href="https://www.linkedin.com/jobs/view/2533521284/?alternateChannel=search&refId=CYOHAFMHpEwERzLwtbkY7w%3D%3D&trackingId=23l%2F8nZNaNYP%2FF5knppgrg%3D%3D"> <u>OCBC NISP</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/xl.jpg" alt="" class="img-responsive img-circle"/>Performance Management<span>, PT. XL Axiata Tbk</span></h4>
                                    <blockquote>
                                        <p>If you want to see about the work at XL Axiata, please click the following link <a href="https://www.linkedin.com/jobs/view/2527294310/?alternateChannel=search&refId=PDTIRlWeR3qlf2nvUDlmyw%3D%3D&trackingId=w8piprCo3p7N7TmzR7am0A%3D%3D"><u>XL axiata</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/btpn.png" alt="" class="img-responsive img-circle"/>Digital Banking Mobile Developer<span>, PT Bank BTPN Tbk
                                    </span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Bank BTPN, please click on the following link <a href="https://www.linkedin.com/jobs/view/2548698653/?alternateChannel=search&refId=PDTIRlWeR3qlf2nvUDlmyw%3D%3D&trackingId=eJwfhqeLfDrpTi1byEUH8Q%3D%3D"><u>BTPN</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                           
                             <div class="col-md-4">
                                <!-- testimonial content -->
                                <div class="testimonial-content animated">
                                    <!-- User's image , name and designation -->
                                    <h4><img src="img/Bukalapak.png" alt="" class="img-responsive img-circle"/>Data Scientist<span>, Bukalapak </span></h4>
                                    <!-- User's comment -->
                                    <blockquote>
                                        <p>If you want to see about jobs at Bukalapak, please click on the following link <a href="https://www.linkedin.com/jobs/view/2528309641/?alternateChannel=search&refId=CYOHAFMHpEwERzLwtbkY7w%3D%3D&trackingId=wNo%2FMXQiMaWjyxx9EkVcWA%3D%3D"> <u>Bukalapak</u></a></p>
                                    </blockquote>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Danamon.png" alt="" class="img-responsive img-circle"/>Business Relationship Officer (BRO) & Consumer Relationship Officer (CRO) - Jakarta
                                        <span>, PT Bank Danamon Indonesia, Tbk.</span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Bank Danamon Indonesia, please click on the following link <a href="https://www.linkedin.com/jobs/view/2514292246/?alternateChannel=search&refId=i7gWrNpmHMBLTaNm%2FKOMsQ%3D%3D&trackingId=wTb6EwzcLDtTk9OwWVz7cQ%3D%3D"><u>Bank Danamon</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Grab.png" alt="" class="img-responsive img-circle"/>Sales Operations, GrabWheels<span>, Grab </span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Grab, please click on the following link <a href="https://www.linkedin.com/jobs/view/2547019994/?alternateChannel=search&refId=i7gWrNpmHMBLTaNm%2FKOMsQ%3D%3D&trackingId=7wIa2F%2BFwSv8DhCmX9g%2BzA%3D%3D"><u> Grab</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <!-- testimonial content -->
                                <div class="testimonial-content animated">
                                    <!-- User's image , name and designation -->
                                    <h4><img src="img/G4S.jpg" alt="" class="img-responsive img-circle"/>Receptionist (Bandara Soekarno Hatta)<span>, G4S </span></h4>
                                    <!-- User's comment -->
                                    <blockquote>
                                        <p>If you want to see about jobs at G4S, please click on the following link <a href="https://www.linkedin.com/jobs/view/2515317132/?alternateChannel=search&refId=i7gWrNpmHMBLTaNm%2FKOMsQ%3D%3D&trackingId=Cxoe7kRx8XASydQ38XI77w%3D%3D"> <u>G4S</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/kopi.jpg" alt="" class="img-responsive img-circle"/>Key Account Manager, Modern Trade<span>, Kopi Kenangan</span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Kopi Kenangan, please click on the following link <a href="https://www.linkedin.com/jobs/view/2497708068/?alternateChannel=search&refId=dOa6VksEKLXqJmKu3NucuA%3D%3D&trackingId=Vt95q7TPdjcqVuL74D%2B8JQ%3D%3D"><u>Kopi Kenangan</u></a></p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial-content animated">
                                    <h4><img src="img/Adira.jpg" alt="" class="img-responsive img-circle"/>Customer Experience Standardization (Supervisor)<span>, Adira Finance</span></h4>
                                    <blockquote>
                                        <p>If you want to see about jobs at Adira, please click on the following link <a href="https://www.linkedin.com/jobs/view/2549574827/?alternateChannel=search&refId=paFU5PUIcOAS9d2lzZzetw%3D%3D&trackingId=B%2F8CWoiCHsqEchMjHVPOLQ%3D%3D"> <u>Adira</u></a></p>
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
                    <li><a href="loker2.php">1</a></li>
                    <li><a href="loker3.php">2</a></li>
                    <li><a class="active" href="loker4.php">3</a></li>
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