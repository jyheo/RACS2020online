<?php 
  include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RACS2020 Virtual Conference</title>
        <link rel="shortcut icon" href="https://www.acm.org/images/favicon.ico?v=10">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <img src="assets/img/SIGAPP-LOGO.jpg" height="30">&nbsp;
                <a class="navbar-brand js-scroll-trigger" href="#page-top">RACS2020 Virtual Conference</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!--li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li-->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://tour.gwangju.go.kr/eng/main.cs" target="_">Virtual Tour Gwangju</a></li>
                        <?php if ( $is_auth ) { ?>                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="program.php">Program</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="signout.php">Sign Out</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="signin.php">Sign In</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase"><img src="assets/img/acmlogo.png" height="120">
                    <a href="http://www.sigapp.org/RACS/RACS2020/">RACS2020</a></h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">RACS2020 Virtual Conference.</h2>
                    <?php if ( $is_auth != TRUE) { ?>
                        <a class="btn btn-primary js-scroll-trigger" href="signin.php">Sing In</a>
                    <?php } else { ?>
                        <a class="btn btn-primary js-scroll-trigger" href="program.php">Program</a>
                    <?php } ?>
                </div>
            </div>
        </header>
        <!-- About-->
        <!--section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
                        <p class="text-white-50">
                            Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                            <a href="https://startbootstrap.com/template-overviews/grayscale/">the preview page</a>
                            . The theme is open source, and you can use it for any purpose, personal or commercial.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="" />
            </div>
        </section-->
        <?php
        if ( $is_auth ) {
        ?>
        
        <?php
        }
        ?>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © SIGAPP RACS 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-analytics.js"></script>

        <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyDoPmTW6B_CGsPCIX5z-FnsS94xS-LPse0",
            authDomain: "racs2020online-a7b1f.firebaseapp.com",
            databaseURL: "https://racs2020online-a7b1f.firebaseio.com",
            projectId: "racs2020online-a7b1f",
            storageBucket: "racs2020online-a7b1f.appspot.com",
            messagingSenderId: "220922775629",
            appId: "1:220922775629:web:f3ffd7b49487f83d5c7404",
            measurementId: "G-RDDCSEJPJT"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        </script>
    </body>
</html>
