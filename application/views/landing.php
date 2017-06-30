    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <!-- <div class="carousel-inner"> -->
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo HTTP_IMAGES_PATH;?>baliho.jpg" alt="">
                            </div>
                            <!-- <div class="item">
                                <img class="img-responsive img-full" src="img/baliho.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/baliho.jpg" alt="">
                            </div> -->
                        <!-- </div> -->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <!-- <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Business Casual</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Start Bootstrap</strong>
                        </small>
                    </h2> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Belajar Bersama Maestro
                        <strong>2017</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="<?php echo HTTP_IMAGES_PATH;?>maestro.png" alt="" height="140" width="150">
                    <hr class="visible-xs">
                    <p>Pengumuman Peserta yang lolos dalam seleksi kegiatan BBM (belajar Bersama Maestro) dapat diunduh <a href="assets/Pengumuman BBM 2017.pdf">disini</a> </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <!-- <div class="col-lg-12"> -->
                    <hr>
                    <h2 class="intro-text text-center">Timeline 
                        <strong>BBM 2017</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-full" src="<?php echo HTTP_IMAGES_PATH;?>timeline.jpg" alt="">
                    <!-- <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
                <!-- </div> -->
            </div>
        </div>

    </div>
    <!-- /.container -->

    

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

