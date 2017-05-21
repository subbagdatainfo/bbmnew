

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
                    <h2 class="intro-text ">Formulir
                        <strong>Pendaftaran</strong>

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
                    
                    <form name="daftar" id="daftarform" action ="<?=site_url('C_Peserta/daftar2'); ?>" method="post">
                        <div class="row">
                            <div class ="row-lg-12">
                                <div class ="form-group"  >
                                    <input type ="text" class ="form-control" placeholder="NISN" id="nisn" name="nisn" required data-validation-required-message="silakan masukan NISN Anda">
                                    <div style="text-align:left; color:red; font-size: 0.875em;">*Silakan kunjungi http://nisn.data.kemdikbud.go.id untuk memeriksa NISN Anda</div>
                                    <div style="text-align:left; color:red; font-size: 0.875em;">*Note : pendaftaran hanya bisa menggunakan 1 nisn dan 1 alamat email. Harap diingat nisn, alamat email dan password yang digunakan.</div>
                                    <p class ="help-block text-danger"></p>
                                </div>
                               <div class ="form-group">
                                    <input type ="text" class ="form-control" placeholder="Nama" id="nama_siswa" name="nama_siswa" required data-validation-required-message="silakan masukan nama Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="password" class ="form-control" placeholder="Password" id="password" name="password" required data-validation-required-message="silakan masukan password Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="alamat" class ="form-control" placeholder="Alamat" id="alamat" name="alamat" required data-validation-required-message="silakan masukan alamat Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="email" class ="form-control" placeholder="Email" id="email" name="email" required data-validation-required-message="silakan masukan email Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="text" class ="form-control" placeholder="Nomor Telepon" id="no_telpon" name="no_telpon" required data-validation-required-message="silakan masukan Nomor telepon Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="text" class ="form-control" placeholder="Nama Sekolah" id="sekolah" name="sekolah" required data-validation-required-message="silakan masukan nama sekolah Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                                <div class ="form-group">
                                    <input type ="text" class ="form-control" placeholder="Alamat Sekolah" id="alamat_sekolah" name="alamat_sekolah" required data-validation-required-message="silakan masukan Alamat sekolah Anda">
                                    <p class ="help-block text-danger"></p>
                                </div>
                            </div>    
                        </div>
                        <!-- </div> -->
                        <div class="container">
                            <div class ="row" style="text-align:justify;">
                                <h3 style="text-align:center;">Maestro Yang  Dipilih</h3 >
                                <div class="col-md-4" >
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Ki Manteb" checked> Ki Manteb <br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Sunaryo" > Sunaryo<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Titiek Puspa" > Titiek Puspa<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Asia Ramli" > Asia Ramli<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Timbul" > Timbul<br/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Dedek Wahyudi" checked> Dedek Wahyudi <br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Djana Partanain" > Djana Partanain<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Edon" > Edon<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Fendi Siregar" > Fendi Siregar<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Zakarya" > Zakarya<br/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Hanafi" checked> Hanafi <br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Jose Rizal Firdaus" > Jose Rizal Firdaus<br/>
                                        </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Krisna Murti" > Krisna Murti<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Retno Maruti" > Retno Maruti<br/>
                                    </div>
                                    <div class ="form-group">
                                        <input type="radio" id="maestro" name="maestro" value="Iman Soleh" > Iman Soleh<br/>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name ="submit" value="submit" class="btn btn-xl">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    