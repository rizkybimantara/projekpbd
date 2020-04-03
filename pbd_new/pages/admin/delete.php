<?php
include '../../config/
config.php';
$idprodi = $_GET['idprodi'];
$sql = mysqli_query($conn, "DELETE from dt_prodi where idprodi='$idprodi'");

header("location:index.php");

?>


   





