 
  <?php 
include '../../config/config.php';
  if (isset($_POST["enter"])) {
    # code...
    $a=$_POST["kdprodi"];
    $b=$_POST["nmprodi"];
    $c=$_POST["akreditasi"];
  
    
    $sql="insert into dt_prodi values ('','$a','$b','$c')";
    $hasil = mysqli_query($conn, $sql);
     header("location:index.php");
 exit;

}