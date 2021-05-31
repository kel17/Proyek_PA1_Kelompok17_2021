<?php

global $connect;
$host="localhost";
$user="root";
$password="";
$db="db_alumni";
$connect=mysqli_connect($host, $user, $password, $db);

if(!$connect){
	die("koneksi gagal");
}

?>