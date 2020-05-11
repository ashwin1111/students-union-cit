<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Designed and Developed by MSc C<>de Factory 2K16 - 2K21(Ashwin & Team)" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

    <title>Gallery</title>
    <link rel="stylesheet" href="gallery/assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="gallery/assets/tether/tether.min.css">
    <link rel="stylesheet" href="gallery/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="gallery/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="gallery/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="gallery/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="gallery/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="gallery/assets/theme/css/style.css">
    <link rel="stylesheet" href="gallery/assets/gallery/style.css">
    <link rel="stylesheet" href="gallery/assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="shortcut icon" href="gallery/assets/images/logo2.png" type="image/x-icon">
    <style>
        .accordion.accordion-5 .card {
            border: 0;
            background-color: transparent;
        }
        
        .accordion.accordion-5 .card .card-header {
            border: 0;
            background-color: #212529;
            -webkit-transition: .3s;
            transition: .3s;
        }
        
        .accordion.accordion-5 .card .card-header:hover {
            -webkit-transition: .3s;
            transition: .3s;
            background-color: #484848;
        }
        
        .accordion.accordion-5 .card .card-header .fa {
            background-color: #212529;
            border-top-left-radius: 3px;
        }
        
        .accordion.accordion-5 .card .card-body {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        
        img {
            image-orientation: from-image;
        }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="gallery/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="gallery/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
</head>

<body>

    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Student's Union</div>
                <div class="intro-heading text-uppercase">Picture Gallery</div>

            </div>
        </div>

    </header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html#page-top"><h2>CIT Student's Union</h2></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#heads">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#team">Office Bearers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#portfolio">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#hide1">Clubs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="mbr-gallery mbr-slider-carousel cid-qZMUOSwD8m" id="gallery2-4">
        <div class="container">
            <div>
                <!-- Filter -->
                <div class="mbr-gallery-filter container gallery-filter-active">
                    <ul buttons="0">
                        <li class="mbr-gallery-filter-all"><a class="btn btn-md btn-primary-outline active display-7" href="">All</a></li>
                    </ul>
                </div>
                <!-- Gallery -->
                <div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default">
                        <div>
                            <div>
                                <?php
                               $cnt = 0;
                               foreach(glob('gallery/gallery/*', GLOB_ONLYDIR) as $dir) {
                                        $group = str_replace('gallery/gallery/', '', $dir);
                                        $dir = $dir.'/';
                                        $images = glob($dir."*");
                                        foreach($images as $image) {
                                            echo '<div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="'.$group.'">';
                                            echo '<div href="#lb-gallery2-4" data-slide-to="'.$cnt.'" data-toggle="modal"><img src="'.$image.'" alt="" title=""><span class="icon-focus"></span></div>';
                                            echo '</div>';
                                            $cnt = $cnt +1;
                                        }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Lightbox -->
                <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-4">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="carousel-inner">

                                    <?php
                                        $num=0;
                                        foreach(glob('gallery/gallery/*', GLOB_ONLYDIR) as $dir) {
                                        $group = str_replace('gallery/gallery/', '', $dir);
                                        $dir = $dir.'/';
                                        $images = glob($dir."*");
                                        foreach($images as $image) {
                                            if ($num==0)
                                            {
                                                echo ' <div class="carousel-item active"><img src="'.$image.'" alt="" title=""></div>';
                                            }
                                            else 
                                            {
                                                echo '<div class="carousel-item"><img src="'.$image.'" alt="" title=""></div>';
                                            }
                                            $num=$num+1;
                                        }
                                    }
                                    ?>

                                </div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-4"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-4"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright">Designed and Developed by <b>MSc C<>de Factory 2K16 - 2K21<b></span>
                    <br>
                    <span class="copyright">Ashwin & Team<b></span>
                </div>

            </div>
        </div>
    </footer>

    <script src="gallery/assets/web/assets/jquery/jquery.min.js"></script>
    <script src="gallery/assets/popper/popper.min.js"></script>
    <script src="gallery/assets/tether/tether.min.js"></script>
    <script src="gallery/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="gallery/assets/smoothscroll/smooth-scroll.js"></script>
    <script src="gallery/assets/dropdown/js/script.min.js"></script>
    <script src="gallery/assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="gallery/assets/masonry/masonry.pkgd.min.js"></script>
    <script src="gallery/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="gallery/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="gallery/assets/countdown/jquery.countdown.min.js"></script>
    <script src="gallery/assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="gallery/assets/parallax/jarallax.min.js"></script>
    <script src="gallery/assets/theme/js/script.js"></script>
    <script src="gallery/assets/slidervideo/script.js"></script>
    <script src="gallery/assets/gallery/player.min.js"></script>
    <script src="gallery/assets/gallery/script.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="gallery/vendor/jquery/jquery.min.js"></script>
    <script src="gallery/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="gallery/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="gallery/js/jqBootstrapValidation.js"></script>
    <script src="gallery/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="gallery/js/agency.min.js"></script>

</body>

</html>