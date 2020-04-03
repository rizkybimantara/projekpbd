<?php
include 'config/config.php';
if (isset($_POST["enter"])) {
	# code...
	$username=$_POST["username"];
	$password=$_POST["password"];
	$level=$_POST["level"];
	$sql="insert into login values ('','$username','$password','$level')";
	$hasil = mysqli_query($conn, $sql);
	 header("location:index.php");
 exit;
}
?>
