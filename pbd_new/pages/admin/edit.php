     <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <script type="text/javascript" src="../../js/fungsi.js"></script>
    <?php
    include '../../config/config.php';
    $idprodi = $_GET['idprodi'];
    $sql = mysqli_query($conn,"select * from dt_prodi where idprodi='$idprodi'");
    while($d = mysqli_fetch_array($sql)){
        ?>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            

<form action="edit_proses.php" method="post" role="form">
            <div class="form-group">

                <label>Kode Program Studi</label>
                <input type="hidden" name="idprodi" value="<?php echo $d['idprodi']; ?>" class="form-control">
                <input type="text" name="kdprodi" value="<?php echo $d['kdprodi']; ?>" class="form-control">
                <label>Nama Program Studi</label>
                <input type="text" name="nmprodi" value="<?php echo $d['nmprodi']; ?>" class="form-control">

                                            <label>Akreditasi</label>
                                            <select class="form-control" name="akreditasi" value="<?php echo $d['akreditasi']; ?>"required="">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>-</option>
                                              
                                            </select>
                                       
               
            

                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" onclick="update()">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


        </form>
        <?php 
    }
    ?>
        <div class="alert alert-success">
   
    Silahkan klik<a href="#myModal" data-toggle="modal" data-target="#myModal"> Lanjutkan </a>untuk mengedit data !. Or <a href="index.php">Exit</a>
     </div>

 
</body>
</html>
 <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>