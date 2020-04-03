
<?php
include '../../config/config.php';
$no=0;
$sql = mysqli_query($conn, "select * from dt_prodi");
$assoc = mysqli_fetch_assoc($sql);

?>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
       <div id="page-wrapper">
            <div class="row">

                <div class="col-lg-12">
          <h5 class="page-header">
              <div class="alert alert-success">
                               Hy.. anda berhasil login sebagai Admin.
                            </div>
          </h5>
                   
                    
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Tambah 
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


 



                                            <h4 class="modal-title" id="myModalLabel">Tambah Data Baru</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form role="form" method="post" action="tambah.php">
                                        <div class="form-group">
                                            <label>Kode Program Studi</label>
                                            <input class="form-control" name="kdprodi" required="">
                                        </div>
                                          <div class="form-group">
                                            <label>Nama Program studi</label>
                                            <input class="form-control" name="nmprodi" required="">
                                        </div>
                                      <div class="form-group">
                                            <label>Akreditasi</label>
                                            <select class="form-control" name="akreditasi" required="">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option selected="">-</option>
                                              
                                            </select>
                                        </div>





                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" value="Save changes" name="enter" class="btn btn-primary">
                                            
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <!-- /.modal -->
                            <div>.</div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Program studi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Prodi</th>
                                        <th>Kode Program Studi</th>
                                        <th>Nama Program Studi</th>
                                        <th>Akreditas</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                </tr>
<?php
while ($row = mysqli_fetch_assoc($sql)){
$no++;
 ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                    <td><?php echo "$no"; ?></td>
                                    <td><?= $row["idprodi"];?></td>
                                    <td><?= $row["kdprodi"];?></td>
                                    <td><?= $row["nmprodi"];?></td>
                                    <td><?= $row["akreditasi"];?></td>
                                    <td>
                                    <a href="delete.php?idprodi=<?php echo $row['idprodi']; ?>"><p class="fa fa-trash-o fw"></p></a>
                                    ||
                                    <a href="edit.php?idprodi=<?php echo $row['idprodi']; ?>"><p class="fa fa-edit fw"></p></a>
    </td>
    

                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                 
                

             
                
        </div>
        <!-- /#page-wrapper -->

    </div>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

