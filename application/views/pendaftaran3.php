

    <div class="container">

        <!-- <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Pendafataran
                        <strong>BBM 2017</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/slide-2.jpg" alt="">
                </div>
                <div class="col-md-12">
                    <p>
                        Penjaringan peserta Belajar Bersama Maestro dilakukan melalui 3 (tiga) cara utama yaitu; melalui pendaftaran secara online dengan mengisi form pendaftaran yang terdapat di website alamat bbm.kemendikbud.go.id, melalui penunjukan langsung oleh pihak sekolah dengan membuatkan surat rekomendasi dari kepala sekolah bahwa peserta didik yang bersangkutan ditunjuk untuk mewakili sekolah, dapat pula mengajukan secara manual melalui formulir-formulir yang disebarkan ke sekolah-sekolah, dimana para peserta didik mengisi form tersebut dengan melampirkan berkas-berkas yang diperlukan dan dikirimkan  ke alamat :
                        Gedung E Lt. 9 Direktorat Kesenian 
                        Subdit. Pembinaan Tenaga Kesenian
                        Kompleks Kementerian Pendidikan dan Kebudayaan 
                        Jl. Jenderal Sudirman, Senayan, 
                        Jakarta Pusat 10270
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
 -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <hr>
                    <h2 class="intro-text ">Pendaftaran Telah
                        <strong>Ditutup</strong>
                        <br>Terima Kasih Atas Partisipasinya

                    </h2>
                    <hr>
                    <?php echo validation_errors(); ?>
                    <?php if($this->session->flashdata('status')=="success"){ ?>
                        <p><h3><span class="label label-success"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                        <?php }elseif ($this->session->flashdata('status')=='danger') {?>
                            <p><h3><span class="label label-danger"><?php echo $this->session->flashdata('message'); ?></span></h3></p>
                    <?php } ?>
                </div>
                <div class="col-sm-12 ">
                    
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    