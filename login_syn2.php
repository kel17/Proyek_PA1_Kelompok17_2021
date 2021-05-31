<?php
include"login_syn.php";
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];


$mysqli="SELECT * FROM data";
$result=mysqli_query($connect, $mysqli);

if($result){
	echo "login berhasil";
}
else{
	echo "login gagal";
}
mysqli_close($connect);
?>