        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- <div class="row">
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $count;?></div>
                                    <div>Jumlah Pendaftar</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div> -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Daftar Pendaftar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pertanyaan</th>
                                <th>Telepon</th>
                                <th>Status</th>
                                
                                <!-- <th>Action</th> -->
                            </tr>
                            <?php foreach ($kontak->result_array() as $row) {
                                ?><tr>
                                    <td><?php echo $row['nama_contact'];?></td>
                                    <td><?php echo $row['email_contact'];?></td>
                                    <td><?php echo $row['message'];?></td>
                                    <td><?php echo $row['telp_contact'];?></td>
                                    <td><?php echo $row['answered'];?></td>
                                    
                                </tr><?php
                            }?>
                            </table>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    

    <!-- Metis Menu Plugin JavaScript -->
    

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo HTTP_VENDOR_PATH;?>raphael/raphael.min.js"></script>
    <script src="<?php echo HTTP_VENDOR_PATH;?>morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>/assets/admin/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    

    <script src="<?php echo HTTP_VENDOR_PATH;?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo HTTP_VENDOR_PATH;?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo HTTP_VENDOR_PATH;?>metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo HTTP_JS_PATH; ?>sb-admin-2.js"></script>

</body>

</html>
