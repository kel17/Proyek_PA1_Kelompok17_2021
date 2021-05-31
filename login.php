<?php
  session_start();
  if(isset($_SESSION["login"])){
    header("location:index.php");
  }
  include("login_syn.php");
  if(isset($_POST['login'])){
      $username = $_POST["Username"];
      $password = $_POST["Password"];
      
      $result = mysqli_query($connect,"SELECT * FROM user1 where username = '$username' ");
      $result1 = mysqli_query($connect,"SELECT * FROM admin where username = '$username' ");
      if(mysqli_num_rows($result)===1){
           $row = mysqli_fetch_assoc($result);
           if(password_verify($password, $row["password"])){
                  $_SESSION["login"] = true;
                  $_SESSION["id_user"] = $row["id_user"];
                  $_SESSION["username"] = $username;
                  echo "<script>alert('Selamat Datang');
                         document.location.href = 'home.php';     
                        </script>";
                  exit;
           }
      }
      
      else if(mysqli_num_rows($result1)===1){
               $row1 = mysqli_fetch_assoc($result1);
               if(password_verify($password, $row1["password"])){
                      $_SESSION["login"] = true;
                      $_SESSION["id"] = $row1["id"];
                      $_SESSION["username"] = $username;
                      echo "<script>alert('Selamat Datang Admin');
                             document.location.href = 'tables.php';     
                            </script>";
                      exit;
               }
      }

     
  }

  
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo_iadel.png">
    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css1/2020.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
   <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="POST" class="box">
                    <h1>Login</h1>
                    <p class="text-muted">Selamat Datang</p> 
                    <input type="text" name="Username" placeholder="Username"> 
                    <input type="password" name="Password" placeholder="Password">
                    <input type="submit" name="login" value="login">
                </form>
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

</body>

</html>