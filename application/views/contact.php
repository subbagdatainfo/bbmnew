<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bersama Bersama Maestro</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo HTTP_CSS_PATH;?>bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo HTTP_CSS_PATH;?>business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $map['js']; ?>   
    

</head>

<body>

    <div class="brand"><img src="<?php echo HTTP_IMAGES_PATH?>logoatas.jpg"></div>
    <!-- <div class="address-bar">Belajar Bersama Maestro 2017</div> -->

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <?php echo anchor('', 'Beranda', 'class="link-class"') ?>
                    </li>
                    <li>
                        <?php echo anchor('Page/pendaftaran', 'Pendaftaran', 'class="link-class"') ?>
                    </li>
                    <li>
                        <?php echo anchor('Page/maestro', 'Maestro', 'class="link-class"') ?>
                    </li>
                    <li>
                        <?php echo anchor('Page/contact', 'Contact', 'class="link-class"') ?>
                    </li>
                    <li>
                        <?php echo anchor('Page/login', 'Login', 'class="link-class"') ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <?php if($this->session->flashdata('status')=="success"){ ?>
                        <p><h3><span class="label label-success" style="text-align:left;"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                        <?php }elseif ($this->session->flashdata('status')=='danger') {?>
                            <p><h3><span class="label label-danger" style="text-align:left;"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                    <?php } ?>
                    <hr>
                    <h2 class="intro-text text-center">Contact
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <!-- <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.id/maps/place/6%C2%B013'30.0%22S+106%C2%B048'12.0%22E/@-6.2251017,106.8012453,17z/data=!4m12!1m6!4m5!1m0!1m3!2m2!1d106.803434!2d-6.225107!3m4!1s0x0:0x0!8m2!3d-6.225005!4d106.803326?hl=en"></iframe> -->
                    <?php echo $map['html']; ?>
                </div>
                <div class="col-md-4">
                    <p align="justify"> 
                                <strong>
                                     Untuk Layanan Informasi Hubungi: <br>
                                </strong>
                            </p>
                                    <ul>
                                        <li><span class="glyphicon glyphicon-phone"></span> Afrilia : 0857-24262511</li>
                                        <li><span class="glyphicon glyphicon-phone"></span>  Hilda Yulianti: 0857 1140 5934</li>
                                        <li><span class="glyphicon glyphicon-phone"></span>  Hana Nabilah : 0812 9838 6898</li>
                                        <li><span class="glyphicon glyphicon-phone"></span>  Hary Mahardika : 0812 9838 6898</li>
                                        <li><span class="glyphicon glyphicon-phone"></span> Kantor : 021-5725518</li>
                                        <li><span class="glyphicon glyphicon-envelope"></span> Email : bbm@kemdikbud.go.id</li>
                                        <li><strong>Kementrian Pendidikan dan Kebudayaan<br>Direktorat Kesenian, DIrektorat Jenderal Kebudayaan<br>Jln. Jenderal Sudirman, Komplek Kementrian Pendidikan dan Kebudayaan <br>Gedung E Lantai 9<br>Senayan Jakarta 10270</strong></li>
                                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
`
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p allign="center">Pertanyaan mengenai program Belajar Bersama Maestro 2017.</p>

                    <form role="form" action ="<?=site_url('C_Peserta/contact'); ?>" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type ="text" class ="form-control" name="nama_contact" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type ="email" class ="form-control" name="email_contact" required>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="telp_contact" required>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="message" required></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    