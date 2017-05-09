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
    <?php //echo $map['js']?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style> 
        label.wrap {
           width: 11em; 
    border: 1px solid #000000;
            word-wrap: break-word;
        }
    </style>

</head>

<body>

    

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Konfirmasi
                        <strong>Pendaftaran</strong>
                    </h2>
                    <hr>
                </div>
                <div class="row-sm-12 text-center">
                    <form  action ="<?=site_url('C_Peserta/createsiswa'); ?>" method="POST" role="form">
                        <div class="row">
                            <div class="col-sm-12 overflow-wrap:break-word;" >
                                <div class ="form-group">
                                    <label class ="form-control label-success">NISN</label>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control "><?php echo $siswa['nisn'];?></label>                                    
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Nama</label>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control "><?php echo $siswa['nama_siswa'];?></label>                                    
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Alamat</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control "><?php echo $siswa['alamat'];?></label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Nama Ibu Kandung</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-primary"><?php echo $siswa['nama_ibu_kandung'];?></label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Tempat/Tanggal Lahir</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-primary"><?php echo $siswa['tempat_lahir'].'/'.$siswa['tanggal_lahir'];?></label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Sekolah</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-primary"><?php echo $sekolah['nama'];?></label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Alamat Sekolah</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <span class ="form-control label-primary wrap"><?php echo $sekolah['alamat_jalan'].', '.$sekolah['kecamatan'].', '.$sekolah['kabupaten'].', '.$sekolah['provinsi'];?></span>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                
                                <div class ="form-group">
                                    <label class ="form-control label-success">Email</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-primary"><?php echo $siswa['email']?></label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Nomor Telepon</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-primary"><?php echo $siswa['no_telpon']?>></label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-success">Maestro Pilihan</label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <label class ="form-control label-primary"><?php echo $siswa['maestro']?></label>
                                    <p class ="help-block text-danger"></p>
                                </div>
                            </div>
                            
                                <!-- put variable for post  -->
                                <div class ="form-group">
                                   <input type="hidden" class="form-control" name="nisn" value="<?php echo $siswa['nisn'];?>" >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="Nama Siswa" id="nama_siswa" name="nama_siswa" value="<?php echo $siswa['nama_siswa']?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="alamat" id="alamat" name="alamat" value="<?php echo $siswa['alamat']?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="Nama Ibu Kandung" id="nama_ibu" name="nama_ibu" value="<?php echo $siswa['nama_ibu_kandung']?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="Tempat Tanggal Lahir" id="ttl" name="ttl" value="<?php echo $siswa['tempat_lahir'].'/'.$siswa['tanggal_lahir'];?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="Nama Sekolah" id="sekolah" name="sekolah" value="<?php echo $sekolah['nama'];?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="Alamat Sekolah" id="alamat_sekolah" name="alamat_sekolah" value="<?php echo $sekolah['alamat_jalan'].', '.$sekolah['kecamatan'].', '.$sekolah['kabupaten'].', '.$sekolah['provinsi'];?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                
                                
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="Email" id="email" name="email" value="<?php echo $siswa['email']?>" >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="Nomor Telepon" id="no_telpon" name="no_telpon" value="<?php echo $siswa['no_telpon']?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="maestro" id="maestro" name="maestro" value="<?php echo $siswa['maestro']?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type="hidden" class ="form-control" placeholder="password" id="password" name="password" value="<?php echo $siswa['password']?>"  >
                                    <p class ="help-block text-danger"></p>
                                </div>
                             
                        </div>
                        <!-- </div> -->
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <ul class="list-inline">
                                    <li><button type="submit" class="btn btn-xl">Daftar</button></li>
                                    <li><a class="btn btn-xl" href="<?=site_url('C_Peserta/batal');?>">Batal</a></li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    