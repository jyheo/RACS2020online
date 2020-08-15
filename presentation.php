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
        <title>RACS2020 Online Conference</title>
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
                <a class="navbar-brand js-scroll-trigger" href="index.php">RACS2020 Online Conference</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!--li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li-->
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

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="h1">The paper title is shown here.</h1>
      <p>Bada Kim<br/>
Department of Computer Engineering, Hansung University, South Korea<br/>
qkek983@gmail.com</p>
<p>
Junyoung Heo<br/>
Department of Computer Engineering, Hansung University, South Korea<br/>
jyheo@hansung.ac.kr
</p>
<?php if ( $is_auth ) { ?>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">PDF &raquo;</a></p>
<?php } ?>
    </div>
  </div>

  <div class="container">
    <h3>Abstracts</h3>
        <p>
        License plate recognition has a recognition rate of more than
    98% in limited situations; however, the recognition rate
    sometimes falls to about 50% to 70% in unlimited situations for
    real time. The inability of filtering out anomaly data which is
    similar to a license plate results in the low recognition rate. This
    paper aims to suppress anomaly and improve the recognition
    rate. CNN consist of as few layers as possible for application
    with IoT edge technology. As a result of the experiment, the
    detection rate on real-time roads where situations are unlimited
    was 77% in normal models with the little filter performance.
    However, when applying the techniques of this paper, the
    detection rate was 88%.
    </p>

    <hr>
    <?php if ( $is_auth ) { ?>
    <h3>Video Presentation</h3>
    <p>
    <iframe width="720" height="405" src="https://www.youtube.com/embed/77XmRDtOL7c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </p>
    <?php } ?>
  </div> <!-- /container -->

</main>
        
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © SIGAPP RACS 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
