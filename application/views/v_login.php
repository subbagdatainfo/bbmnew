

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <!-- <h3 class="panel-title">Silakan Log in</h3> -->
                    </div>
                    <div class="panel-body">
                        <div class="container">
                        <div style="text-align:left; color:red; font-size: 0.875em;"><?php echo validation_errors(); ?> </div>
                        <?php if($this->session->flashdata('status')=="success"){ ?>
                <p><h3><span class="label label-success"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                <?php }elseif ($this->session->flashdata('status')=='danger') {?>
                    <p><h3><span class="label label-danger"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                <?php } ?>
            </div>
                        <form role="form" name="login" action ="<?=site_url('C_Peserta/auth'); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NISN" name="nisn" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                <button type="submit" name ="submit" value="submit" class="btn btn-lg btn-success btn-block">Masuk</button>
                            </fieldset>
                        </form>
                        
                        <a style="text-decoration: underline;" href="<?php echo base_url().'Page/forgotpasssword';?>"> Lupa Password</a>
                        <div class="clear"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo HTTP_VENDOR_PATH;?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo HTTP_VENDOR_PATH;?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo HTTP_VENDOR_PATH;?>metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo HTTP_JS_PATH; ?>sb-admin-2.js"></script>

