<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seniman Mengajar</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="assets/css/agency.css" rel="stylesheet">
    <!-- load google maps library -->
    <?php echo $map['js']?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
                                    var kapuashulu = [{name:'Seni Tari', value:'senitari'}, {name:'Seni Musik', value:'senimusik'}, {name:'Seni Rupa (Ukir)', value:'senirupaukir'}, {name:'Seni Media', value:'Seni Media', value:'senimedia'}];

                                    var natuna = [{name:'Seni Tari', value:'senitari'}, {name:'Seni Musik', value:'senimusik'}, {name:'Seni Teater', value:'seniteater'}, {name:'Seni Rupa', value:'senirupa'}, {name:'Seni Media', value:'senimedia'}];

                                    var belu = [{name:'Seni Rupa (Ukir)', value:'senirupaukir'}, {name:'Seni Tari', value:'senitari'}, {name:'Seni Teater', value:'seniteater'}, {name:'Seni Musik (Vokal)', value:'senimusikvokal'}, {name:'Seni Media', value:'senimedia'}]
                                    $(document).ready( function() {
                                      $("input[name='chk']").on('change',function() {

                                          if($(this).is(':checked') && $(this).val() == 'belu')
                                          {
                                            $('#jenis_seni').empty()
                                            $.each(belu, function(index, value) {
                                             $('#jenis_seni').append('<option value="'+value.value+'">'+value.name+'</option>');
                                            });                  
                                          }
                                          else if($(this).is(':checked') && $(this).val() == 'natuna')
                                          {
                                            $('#jenis_seni').empty()
                                            $.each(natuna, function(index, value) {
                                             $('#jenis_seni').append('<option value="'+value.value+'">'+value.name+'</option>');
                                            }); 
                                          }
                                          else if($(this).is(':checked') && $(this).val() == 'kapuashulu')
                                          {
                                            $('#jenis_seni').empty()
                                            $.each(kapuashulu, function(index, value) {
                                             $('#jenis_seni').append('<option value="'+value.value+'" >'+value.name+'</option>');
                                            }); 
                                          }
                                          else 
                                          {

                                          }
                                          {

                                          }

                                      });
                                    });  
                                </script>

</head>

<body id="page-top" class="index">
<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?=site_url('#page-top');?>">Seniman Mengajar</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="<?=site_url('#page-top');?>"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#lokasi">Lokasi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Tentang</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#timeline">Timeline</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#daftar">Daftar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#hubungi">Hubungi Kami</a>
                    </li>
                    <li>
                        <!--<a class="page-scroll" href="#masuk">Masuk</a>-->
                        <a href="<?=site_url('C_Peserta/login');?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container-fluid">
            <div class="intro-text">
                <div class="intro-lead-in">Seniman Mengajar</div>
                <div class="intro-heading">Gelombang 1</div>
                <a href="#daftar" class="page-scroll btn btn-xl">Daftar</a>
            </div>
            
        </div>
    </header>

    <!-- Tempat Pelaksanaan -->
    <section id="lokasi" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tempat Pelaksanaan</h2>
                    <h3 class="section-subheading">Tempat Pelaksanaan Seniman Mengajar Gelombang 1.</h3>
                </div>
            </div>
            <div class ="row text-center">
                <div class="col-md-4">
                    <img src="assets/img/106px-Lambang_Kabupaten_Kapuas_Hulu.png" alt="kapuashulu"  height="128" width="90"><br><h4>Kabupaten Kapuas Hulu<br>Kalimantan Barat</h4><br><br>
                    <a href="#kapuashulu" class="portfolio-link btn-xl" data-toggle="modal">
                        <!-- <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div> -->
                        DETAIL
                    </a>
                </div>

                <div class="col-md-4">
                    <img src="assets/img/118px-Lambang_Kabupaten_Natuna.png" alt="natuna"  height="128" width="90" align ="center"><br><h4>Kabupaten Natuna<br>Kepulauan Riau</h4><br><br>
                    <a href="#natuna" class="portfolio-link btn-xl" data-toggle="modal">
                        <!-- <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div> -->
                        DETAIL
                    </a>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/Lambang_Kabupaten_Belu.jpg" alt="belu"  height="128" width="90"><br><h4>Kabupaten Belu<br>Nusa Tenggara Timur</h4><br><br>
                    <a href="#belu" class="portfolio-link btn-xl" data-toggle="modal">
                        <!-- <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div> -->
                        DETAIL
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- page-section tentang seniman mengajar -->
    <section id="about" >
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tentang Kegiatan Seniman Mengajar</h2>   
                </div>
            </div>
            <div class="row-lg-12">
                <p allign="left">
                    Seniman Mengajar adalah program yang diselenggarakan Direktorat Kesenian, Direktorat Jenderal Kebudayaan, Kementerian Pendidikan dan Kebudayaan, yaitu program seniman mengajar kesenian kepada masyarakat/ komunitas/ sanggar yang berada di daerah dengan predikat 3T yang berada di Indonesia. <br><br>
                    Program ini pada prinsipnya mendorong para seniman berbagi ilmu dan pengalamannya kepada masyarakat yang berada daerah 3T. Dengan program ini masyarakat di daerah 3T dapat terbuka wawasannya dan dapat menjalin kerjasama dengan para seniman sehingga dapat meningkatkan kualitas ekspresi seni dan penguatan identitas budaya di daerah 3T. Pada akhir masa belajar, para seniman dapat mempresentasikan apa yang telah dikerjakannya di daerah pelaksanaan kegiatan. <br><br>
                    Dalam melaksanakan program Seniman Mengajar ditekankan prinsip – prinsip : partisipatif, dialogis, dan transformasi. Format kegiatan residensi seniman dalam kurun waktu yang ditentukan dengan target paket kegiatan selesai. Seniman berbagi ilmu dan keahlian dengan  seniman lokal yang mewakili sanggar/ komunitas.
                </p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="team-member">
                        <h4>Syarat Pendaftar</h4>
                        <!-- <p class="text-muted">Lead Designer</p> -->
                        <p align="left">
                            <br>a.  Warga Negara Indonesia<br>
                            b.  Usia 30 – 50 tahun<br>
                            c.  Non PNS<br>
                            d.  Profesional dan berdedikasi tinggi terhadap seni<br>
                            e.  Memiliki pengalaman minimal 5 tahun dalam berkesenian<br>
                            f.  Mampu beradaptasi dengan lingkungan di lokasi tempat mengajar<br>
                            g.  Dapat berkomunikasi dengan baik dan aktif<br>
                            h.  Sehat jasmani dan rohani<br>
                        </p>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <h4>Hak Seniman</h4>
                        <p align="left">
                            <br>a.  mendapatkan insentif<br> 
                            b.  sertifikat<br>
                            c.  sarana pendukung/ keperluan belajar<br> 
                            d.  akomodasi (tinggal bersama masyarakat setempat dan makan)<br>
                            e.  transportasi dari daerah asal ke lokasi kegiatan<br>
                        </p>                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <h4>Kewajiban Seniman</h4>
                        <p align="left">
                            <br>a.  membuat rancangan bahan ajar<br>
                            b.  membuat materi ajar<br>
                            c.  melaksanakan aktivitas harian sesuai dengan rancangan bahan ajar (mengikuti lampiran 2.)<br>
                            d.  mempresentasikan materi ajar<br>
                            e.  berkoordinasi dengan pihak Dinas Kebudayaan<br>
                            f.  melaksanakan aturan yang berlaku sesuai juknis<br>
                            g.  menandatangani kontrak kerja<br>
                            h.  wajib mengikuti proses kegiatan dari awal sampai akhir<br>
                            i.  membuat dokumentasi (audio visual) selama kegiatan monitoring dan evaluasi<br>
                            j.  menyusun laporan teknis dan administrasi kegiatan<br>
                            k.  seniman mengajar per kelas antara 10-30 orang
                        </p>   
                    </div>
                </div>
                <div class="col-md3">
                    <div class="team-member">
                        <h4>Berkas Kelengkapan</h4>
                        <p align="left">
                            1.  Mengirimkan daftar riwayat hidup <br>
                            2.  Surat keterangan sehat dari dokter<br>
                            3.  Foto diri seluruh badan terbaru ukuran 4R<br>
                            4.  Foto karya atau video karya<br>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!--Timeline pelaksanaan Seniman Mengajar -->
    <!-- Timeline Section -->
    <section id="timeline" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Timeline</h2>
                    <h3 class="section-subheading text-muted">Jadwal Pelaksaan Seniman Mengajar Gelombang 1</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/timeline/daftar.jpg" alt="" height="200" width="200">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Pendaftaran</h4>
                                    <h4 class="subheading">15 Maret 2017- 10 April 2017</h4>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/timeline/seleksi.jpg" alt="" height="200" width="200">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Seleksi</h4>
                                    <h4 class="subheading">11 April 2017 - 17 April 2017</h4>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/timeline/pengumuman.png" alt="" height="200" width="200">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Pengumuman Hasil Seleksi</h4>
                                    <h4 class="subheading">21 April 2017</h4>
                                </div>
                               
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/timeline/pelaksanaan.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Pembekalan di Jakarta</h4>
                                    <h4 class="subheading">28 April 2017 - 30 April 2017</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="assets/img/timeline/pelaksanaan.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Pelaksanaan Kegiatan</h4>
                                    <h4 class="subheading">1 Mei -20 Mei2017</h4>
                                </div>
                                
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>    

    <!-- daftar form -->
     <section id="daftar"   >
        <div class="container text-center">
            <div clas ="row">
                <h1><span class="label label-success"> Pendaftaran sudah Ditutup</span><h1>
                <!-- <div class ="col-lg-12 text-center">
                    <h2 class ="section-heading">Daftar</h2>
                </div>
            </div>
            <div class="row">
                <?php if($this->session->flashdata('status')=="success"){ ?>
                <p><h3><span class="label label-success"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                <?php }elseif ($this->session->flashdata('status')=='danger') {?>
                    <p><h3><span class="label label-danger"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="daftar" id="daftarform" action ="<?=site_url('C_Peserta/createpeserta'); ?>" method="post">
                        <div class="row">
                            <div class ="row-lg-12">
                                <div class ="form-group">
                                    <input type ="text" class ="form-control" placeholder="Nama" id="nama" name="nama" required data-validation-required-message="silakan masukan nama Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="text" class ="form-control" placeholder="Username" id="username" name="username" required data-validation-required-message="silakan masukan username Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="password" class ="form-control" placeholder="Password" id="password" name="password" required data-validation-required-message="silakan masukan password Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="tel" class ="form-control" placeholder="Nomor Telepon/Handphone" id="no_telpon" name ="no_telpon" required data-validation-required-message="silakan masukan nomor kontak Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="email" class ="form-control" placeholder="Email" id="email" name="email" required data-validation-required-message="silakan masukan email Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class"col-md-6">
                                <h3>Daerah yang Dipilih</h3>
                                <div class ="form-group">
                                    <input type="radio" id="region" name="chk" value="belu" checked>Belu <br/>
                                </div>
                                <div class ="form-group">
                                    <input type="radio" id="region" name="chk" value="natuna" >Natuna<br/>
                                </div>
                                <div class ="form-group">
                                    <input type="radio" id="region" name="chk" value="kapuashulu" >Kapuas Hulu<br/>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <h3>Bidang Seni</h3>
                                <select id="jenis_seni" name="jenis_seni">
                                    <option name='Seni Rupa (Ukir)', value='senirupaukir'>Seni Rupa (Ukir)</option>
                                    <option name='Seni Tari', value='senitari'>Seni Tari</option>
                                    <option name='Seni Teater', value='seniteater'>Seni Teater</option>
                                    <option name='Seni Musik (Vokal)', value='senimusikvocal'>Seni Musik (Vokal)</option>
                                    <option name='Seni Media', value='senimedia'>Seni Media</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name ="submit" value="submit" class="btn btn-xl">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>

            </div>
    </section>
    
    <!-- Contact Section -->
    <section id="hubungi" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Hubungi Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama *" id="name" required data-validation-required-message="Silakan masukan nama Anda.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="email *" id="email" required data-validation-required-message="Silakan masukan email Anda.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="No. Telp *" id="phone" required data-validation-required-message="Silakan masukan nomor yang bisa dihubungi.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form> -->
                    <div class ="col-md-6">
                        <div class="container">
                            <p align="justify"> 
                                <strong>
                                     Untuk Layanan Informasi Hubungi: <br>
                                </strong>
                            </p>
                                    <ul>
                                        <li><span class="glyphicon glyphicon-phone"></span> Afrilia : 0857-24262511</li>
                                        <li><span class="glyphicon glyphicon-phone"></span>  Hilda Yulianti: 0857 1140 5934</li>
                                        <li><span class="glyphicon glyphicon-phone"></span>  Hana Nabilah : 0812 9838 6898</li>
                                        
                                        <li><span class="glyphicon glyphicon-phone"></span> Kantor : 021-5725518</li>
                                        <li><span class="glyphicon glyphicon-envelope"></span> Email : pembinaantenaga.kesenian@gmail.com</li>
                                    </ul>      
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php echo $map['html']; ?>
                        <strong>Kementrian Pendidikan dan Kebudayaan<br>Direktorat Kesenian, DIrektorat Jenderal Kebudayaan<br>Jln. Jenderal Sudirman, Komplek Kementrian Pendidikan dan Kebudayaan <br>Gedung E Lantai 9<br>Senayan Jakarta 10270</strong>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- modal Kapuas Hulu -->
    <div class="portfolio-modal modal fade" id="kapuashulu" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Kabupaten Kapuas Hulu, Kalimantan Barat</h2>
                                <p align="justify">Pelaksanaan kegiatan Seniman Mengajar di Kab. Kapuas Hulu tepatnya di Desa Sungai Antu, Kec. Puring Kencana merupakan wilayah perbatasan Indonesia dengan Malaysia. Jarak dari Putussibau (Ibu Kota Kabupaten) ke Desa Sungai Antu cukup jauh, dapat di tempuh dengan jalur darat 7 – 8 Jam melewati hutan dan perkebunan sawit. Desa ini beriklim tropis, mata pencaharian masyarakatnya sebagian besar yaitu berkebun. Selain itu, nelayan dan penenun juga menjadi mata pencaharian masyarakat sekitar. Desa ini kental akan adat suku Dayak Iban. Tidak ada kendaraan umum di desa tersebut, sehingga transportasi yang digunakan dengan kendaraan pribadi jalur darat ataupun laut. Kesenian yang berkembang dimasyarakat yaitu Seni Tari, Seni Musik Tradisional, Seni Ukir, dan sastra.</p>
                                <p>
                                    <strong>Bidang Seni yang dibutuhkan untuk daerah Kapuas Hulu, Kalimantan Barat</strong>
                                </p>
                                <ul class="list-inline">
                                    <li>1. Seni Tari</li>
                                    <li>2. Seni Musik</li>
                                    <li>3. Seni Rupa (Ukir)</li>
                                    <li>4. Seni Media</li>
                                </ul>
                                
                                    
                                
                                <p class="section-subheading"> <strong>Contoh Rupa Kondisi Lokasi</strong></p>
                                <ul class="list-inline">
                                    <li><img src="assets/img/kapuashulu1.jpg" class = "image-responsive"></li>
                                    <li><img src="assets/img/kapuashulu2.jpg" class = "image-responsive"></li>
                                    <li><img src="assets/img/kapuashulu3.jpg" class = "image-responsive"></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Natuna -->
    <div class="portfolio-modal modal fade" id="natuna" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Kabupaten Natuna, Kepulauan Riau</h2>
                                <p align="justify">Pelaksanaan kegiatan Seniman Mengajar  di Desa Sebadai Hulu, Kec. Bunguran Timur Laut, Kab. Natuna, Kepulauan Riau. Berdasarkan kondisi fisiknya, daerah ini merupakan tanah berbukit dan bergunung batu yang berbatasan dengan laut Cina Selatan dengan iklim tropis namun sangat dipengaruhi oleh arah mata angin. Mata Pencaharian penduduknya sebagian besar adalah nelayan dan berkebun. Sistem transportasi di kabupaten ini belum tersedianya angkutan umum, sehingga masyarakat sekitar menggunakan kendaraan pribadi. Jenis kesenian yang berkembang di masyarakat yaitu Seni Teater Tradisional, Seni Tari Zapin, Seni Musik Alu, Seni Rupa Ukir.</p>
                                <p>
                                    <strong>Bidang Seni yang dibutuhkan untuk daerah Kabupaten Natuna, Kepulauan Riau</strong>
                                </p>
                                <ul class="list-inline">
                                    <li>1. Seni Tari</li>
                                    <li>2. Seni Musik</li>
                                    <li>3. Seni Teater</li>
                                    <li>4. Seni Rupa</li>
                                    <li>4. Seni Media</li>
                                </ul>
                                <p class="section-subheading"> <strong>Contoh Rupa Kondisi Lokasi</strong></p>
                                <ul class="list-inline">
                                    <li><img src="assets/img/natuna1.jpg" class = "image-responsive"></li>
                                    <li><img src="assets/img/natuna2.jpg" class = "image-responsive"></li>
                                    <li><img src="assets/img/natuna3.jpg" class = "image-responsive"></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal Belu -->
    <div class="portfolio-modal modal fade background-modal" id="belu" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Kabupaten Belu, Nusa Tengara Timur</h2>
                                <p align="justify">Pelaksanaan kegiatan Seniman Mengajar di Kab. Belu, NTT dipusatkan di Kec. Lamaknen tepatnya di Desa Duarato dan Desa Kabuna Kecamatan Kakuluk Mesak. Desa Duarato merupakan sebuah kerajaan kecil dibawah kerajaan  Lamaknen yang dipimpin oleh seorang Na’I yang mana masyarakatnya masih kental dengan adatnya. Desa ini berbatsan dengan Negara Timor Leste  dengan jarak batas 1km. Topografi wilayah yang berbukit-bukit, jurang terjal, da tanah liat berbatu-batu. Kabupaten Belu memiliki iklim tropis dengan musim hujan yang sangat pendek dan musim kemarau yang panjang. Masyarakatnya bermatapencaharian penenun dan petani dengan salah satu komoditas pertaniannya jagung. Transportasi yang digunakan masyarakat yaitu melalui jalur darat dengan kendaraan roda dua dan roda empat.</p>
                                <p>
                                    <strong>Bidang Seni yang dibutuhkan untuk daerah Kabupaten Belu, Nusa Tenggara Timur</strong>
                                </p>
                                <ul class="list-inline">
                                    <li>1. Seni Rupa (Ukir)</li>
                                    <li>2. Seni Tari</li>
                                    <li>3. Seni Teater</li>
                                    <li>4. Seni Musik (Vokal)</li>
                                    <li>4. Seni Media</li>
                                </ul>
                                <p class="section-subheading"> <strong>Contoh Rupa Kondisi Lokasi</strong></p>
                                <ul class="list-inline">
                                    <li><img src="assets/img/belu1.jpeg" class = "image-responsive"></li>
                                    <li><img src="assets/img/belu2.jpeg" class = "image-responsive"></li>
                                    <li><img src="assets/img/belu3.jpeg" class = "image-responsive"></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span class="copyright">Hak Cipta &copy; Direktorat Jenderal Kebudayaan,<br> Kementrian Pendidikan dan Kebudayaan</span>
                    </div>
                    <!-- <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            
                            <li><a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="col-md-6">
                        <ul class="list-inline quicklinks">
                            <li><a href="http://kebudayaan.kemdikbud.go.id" class=" btn btn-primary">Website Ditjen Kebudayaan</a>
                            </li>
                            <li><a href="http://kebudayaanindonesia.net" class="btn btn-primary">Website Kebudayaan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
    

    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo HTTP_JS_PATH;?>jqBootstrapValidation.js"></script>
    <script src="<?php echo HTTP_JS_PATH;?>contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo HTTP_JS_PATH;?>agency.min.js"></script>
    

</body>

</html>
