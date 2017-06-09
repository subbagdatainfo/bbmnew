        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $count;?></div>
                                    <div>Jumlah Link video</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Daftar video
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table">
                            <tr>
                                <th>#</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Waktu Upload</th>
                                <th> Link Video</th>
                               
                                
                                <!-- <th>Action</th> -->
                            </tr>
                            <?php $i=0;foreach ($list->result_array() as $row) { $i++;
                                ?><tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['NISN'];?></td>
                                    <td><?php echo $row['NAMA'];?></td>
                                    <td><?php echo $row['upload_video'];?></td>
                                    <td>
                                        <a class="youtube " href="<?php echo $row['path_video'];?>"><i class="fa fa-film fa-fw"></i></a>
                                    </td>
                                    
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
    <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.youtubepopup.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".youtube").YouTubeModal({autoplay:0, width:640, height:480});
        });
    </script>

</body>

</html>
