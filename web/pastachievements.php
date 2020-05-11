<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="fi/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="fi/css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="fi/css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="fi/css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="fi/css/style.css">

    <script src="https://awesome-table.com/AwesomeTableInclude.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Designed and Developed by MSc C<>de Factory 2K16 - 2K21(Ashwin & Team)" content="">
    <title>Past Achievements</title>
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
    </style>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="gallery/assets/images/logo2.png" type="image/x-icon">

</head>

<body>

    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Student's Union</div>
                <div class="intro-heading text-uppercase">
                    <h1>Past Achievements</h1></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#fi" style="color: black">Let's Go!</a>
            </div>
        </div>

    </header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html#page-top"><h2>CIT Students' Union</h2></a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="font-size: 13px;">
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
                        <a class="nav-link js-scroll-trigger" href="gallery.php">Gallery</a>
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

    <div class="container" style="margin-top: -80px;">

        <div class="row">
            <?php
                        $files = scandir('./pastfiles/SU');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-4 category-responsive">';
                                echo '<a href="./pastfiles/SU/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
        </div>
    </div>

    <div class="rgba-black-strong py-5 px-4" id="fi">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-10 col-xl-8">

                <!--Accordion wrapper-->
                <div class="accordion accordion-5" id="accordionEx5" role="tablist" aria-multiselectable="true">

                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading30">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse30" aria-expanded="true" aria-controls="collapse30">

                                <i class="fa fa-paint-brush fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    ARTS CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse30" class="collapse" role="tabpanel" aria-labelledby="heading30" data-parent="#accordionEx5">

                            <section class="bg-light" id="team">
                                <div class="container">
                                    <section class="main-block">
                                        <div class="container h-100 d-flex justify-content-center" ">

                                            <div class="row">
                <?php
                        $files = scandir('./pastfiles/ARTS');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-12 category-responsive">';
                                echo '<a href="./pastfiles/ARTS/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </section>

                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading31">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse31" aria-expanded="true" aria-controls="collapse31">

                                <i class="fa fa-hand-peace-o fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    DRAMATIX CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="heading31" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/DX');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/DX/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse32" aria-expanded="true" aria-controls="collapse32">
                                <i class="fa fa-comments fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    முத்தமிழ் மன்றம் &
இளம்பறவை
<i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="heading32" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/MTM');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/MTM/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading33">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse33" aria-expanded="true" aria-controls="collapse32">
                                <i class="fa fa-film fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    FILM CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse33" class="collapse" role="tabpanel" aria-labelledby="heading33" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/FILM');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/FILM/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading34">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse34" aria-expanded="true" aria-controls="collapse34">

                                <i class="fa fa-hand-rock-o fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    MARTIAL ARTS CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse34" class="collapse" role="tabpanel" aria-labelledby="heading34" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/MAC');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/MAC/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading35">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse35" aria-expanded="true" aria-controls="collapse32">

                                <i class="fa fa-handshake-o fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    YHAI CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse35" class="collapse" role="tabpanel" aria-labelledby="heading35" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/YHAI');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/YHAI/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse36" aria-expanded="true" aria-controls="collapse36">
                                <i class="fa fa-pencil fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    LITERARY CLUB & SRISTHI
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse36" class="collapse" role="tabpanel" aria-labelledby="heading36" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/LIT');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/LIT/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading37">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse37" aria-expanded="true" aria-controls="collapse37">
                                <i class="fa fa-music fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    MUSIC CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse37" class="collapse" role="tabpanel" aria-labelledby="heading37" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/MUSIC');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/MUSIC/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse38" aria-expanded="true" aria-controls="collapse38">
                                <i class="fa fa-pagelines fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    NATURE CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse38" class="collapse" role="tabpanel" aria-labelledby="heading38" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/NATURE');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/NATURE/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading39">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse39" aria-expanded="true" aria-controls="collapse39">

                                <i class="fa fa-camera-retro fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    PHOTOGRAPHIC CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse39" class="collapse" role="tabpanel" aria-labelledby="heading39" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/PHOTO');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/PHOTO/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading40">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse40" aria-expanded="true" aria-controls="collapse40">
                                <i class="fa fa-question-circle fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    QUIZ CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse40" class="collapse" role="tabpanel" aria-labelledby="heading40" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/QUIZ');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/QUIZ/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading41">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse41" aria-expanded="true" aria-controls="collapse41">

                                <i class="fa fa-grav fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    SPACE CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse41" class="collapse" role="tabpanel" aria-labelledby="heading41" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/SPACE');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/SPACE/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading42">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse42" aria-expanded="true" aria-controls="collapse42">

                                <i class="fa fa-futbol-o fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    SPORTS CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse42" class="collapse" role="tabpanel" aria-labelledby="heading42" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/SPORTS');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/SPORTS/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading43">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse43" aria-expanded="true" aria-controls="collapse43">
                                <i class="fa fa-flag-checkered fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    NATIONAL SERVICE SCHEME
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse43" class="collapse" role="tabpanel" aria-labelledby="heading43" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/NSS');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/NSS/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse44" aria-expanded="true" aria-controls="collapse44">
                                <i class="fa fa-shield fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    NATIONAL CADET CORPS
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse44" class="collapse" role="tabpanel" aria-labelledby="heading44" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/NCC');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/NCC/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading32">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse45" aria-expanded="true" aria-controls="collapse45">

                                <i class="fa fa-plus fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    YOUTH RED CROSS
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse45" class="collapse" role="tabpanel" aria-labelledby="heading45" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/YRC');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/YRC/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading46">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse46" aria-expanded="true" aria-controls="collapse46">
                                <i class="fa fa-cogs fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                   ROTARACT CLUB
                                   <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse46" class="collapse" role="tabpanel" aria-labelledby="heading46" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/ROTARACT');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/ROTARACT/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading47">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse47" aria-expanded="true" aria-controls="collapse47">

                                <i class="fa fa-road fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    ROAD SAFETY PATROL
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse47" class="collapse" role="tabpanel" aria-labelledby="heading47" data-parent="#accordionEx5">
                            <div class="card-body rgba-black-light white-text z-depth-1">
                                <section class="bg-light" id="team">
                                    <div class="container">
                                        <div class="row">
                                            <?php
                        $files = scandir('./pastfiles/RSP');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/RSP/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading48">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse48" aria-expanded="true" aria-controls="collapse48">

                                <i class="fa fa-book fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>
                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">

                                    KALAM KNOWLEDGE CLUB
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse48" class="collapse" role="tabpanel" aria-labelledby="heading48" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/KKC');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/KKC/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>

                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading49">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse49" aria-expanded="true" aria-controls="collapse49">
                                <i class="fa fa-female fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    WOMEN EMPOWERMENT CELL
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>
                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse49" class="collapse" role="tabpanel" aria-labelledby="heading49" data-parent="#accordionEx5">

                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/WEC');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/WEC/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <!-- Accordion card -->
                    <div class="card mb-4">

                        <!-- Card header -->
                        <div class="card-header p-0 z-depth-1" role="tab" id="heading50">
                            <a data-toggle="collapse" data-parent="#accordionEx5" href="#collapse50" aria-expanded="true" aria-controls="collapse50">
                                <i class="fa fa-bolt fa-2x p-3 mr-4 float-left black-text" aria-hidden="true"></i>

                                <h4 class="text-uppercase white-text mb-0 py-3 mt-1">
                                    ENTERPRENEURSHIP DEVELOPMENT CELL
                                    <i class="fa fa-chevron-circle-down fa-1x p-6 mr-4 float-right black-text" aria-hidden="true"></i>

                                </h4>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse50" class="collapse" role="tabpanel" aria-labelledby="heading50" data-parent="#accordionEx5">
                            <section class="bg-light" id="team">
                                <div class="container">
                                    <div class="row">
                                        <?php
                        $files = scandir('./pastfiles/EDC');
                        foreach($files as $file)
                        {
                            $ext = pathinfo($file, PATHINFO_EXTENSION);
                            if($ext == 'pdf')
                            {
                                echo '<div class="col-md-3 category-responsive">';
                                echo '<a href="./pastfiles/EDC/'.$file.'" class="category-wrap">';
                                echo '<div class="category-block" >';
                                echo '<i class="fa fa-file fa-4x p-3 mr-8" style="color: white;" aria-hidden="true"></i>';
                                echo '<h6>'.$file.'</h6>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                ?>
                                    </div>
                                </div>
                                <!-- Content -->
                            </section>
                        </div>
                    </div>
                </div>

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
                <!-- jQuery, Bootstrap JS. -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="fi/js/jquery-3.2.1.min.js"></script>
                <script src="fi/js/popper.min.js"></script>
                <script src="fi/js/bootstrap.min.js"></script>

                <script>
                    $(window).scroll(function() {
                        // 100 = The point you would like to fade the nav in.

                        if ($(window).scrollTop() > 100) {

                            $('.fixed').addClass('is-sticky');

                        } else {

                            $('.fixed').removeClass('is-sticky');

                        };
                    });
                </script>

                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Plugin JavaScript -->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Contact form JavaScript -->
                <script src="js/jqBootstrapValidation.js"></script>
                <script src="js/contact_me.js"></script>

                <!-- Custom scripts for this template -->
                <script src="js/agency.min.js"></script>

</body>

</html>