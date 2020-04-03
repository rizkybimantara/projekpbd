<?php 
include '../../config/config.php';
$idprodi=$_POST["idprodi"];
$a=$_POST["kdprodi"];
$b=$_POST["nmprodi"];
$c=$_POST["akreditasi"];
$sql="insert into dt_prodi values ('$a','$b','$c')";

mysqli_query($conn,"update dt_prodi set kdprodi='$a',nmprodi='$b',akreditasi='$c' where idprodi='$idprodi'");
header("location:index.php");
 
?>