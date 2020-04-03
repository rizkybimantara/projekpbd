<?php 
session_start();
include 'config/config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$login = mysqli_query($conn,"select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "admin";
		header("location:pages/admin/index.php");

	}else if($data['level']=="client"){
		$_SESSION['status'] = "login";
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "client";
		header("location:pages/client/index.php");

	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}


?>