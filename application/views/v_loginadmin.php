<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBM 2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo HTTP_VENDOR_PATH;?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo HTTP_VENDOR_PATH;?>metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>sb-admin-2.css" rel="stylesheet">
    <link href="assets/css/agency.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo HTTP_VENDOR_PATH;?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silakan Log in</h3>
                    </div>
                    <div class="panel-body">
                        <?php if($this->session->flashdata('message')){
                            ?> <span class="label label-danger"> <?php echo $this->session->flashdata('message'); ?></span><?php 
                        }
                        ?>
                        <form role="form" name="login" action ="<?=site_url('C_Admin/authadmin'); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                <button type="submit" name ="submit" value="submit" class="btn btn-lg btn-success btn-block">Masuk</button>
                            </fieldset>
                        </form>
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

</body>

</html>
