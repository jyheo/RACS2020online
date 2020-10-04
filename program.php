<?php 
  include 'header.php';

  function paper_info($paperid) {
    $paper_json = json_decode(file_get_contents('papers/' . $paperid . '.json'), true);
    echo '<li class="list-group-item">';
    echo '<a class="list-group-item-text h5" href="presentation.php?paper=' . $paperid . '">' . $paper_json["title"] . '</a><br/>';
    foreach($paper_json["authors"] as $author) {
        echo '<i> - ' . $author . '</i><br/>';
    }
    echo '</li>';
  }
 
  
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
                <img src="assets/img/SIGAPP-LOGO.jpg" height="30">&nbsp;
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
      <h1 class="h1">Programs</h1>
      <p><a href="#keynote" class="btn btn-success" style="color:blue">Keynote Speech</a></p>
      <p>
        <a href="#systemsw" class="btn btn-primary">System Software</a>
        <a href="#security" class="btn btn-success">Security</a>
        <a href="#security" class="btn btn-info">Machine Learning</a>
      </p>
    </div>
  </div>

  <?php if ( $is_auth ) { ?>

  <div class="container" id="keynote">    
    <h3>Keynote Speach</h3>
    <ul class="list-group">
      <?php paper_info('keynote') ?>
    </ul>
    <br/>
  </div>

  <div class="container" id="systemsw">    
    <h3>System Software</h3>
    <ul class="list-group">  
      <?php foreach (array(116, 103, 69, 14, 3, 105, 118, 8, 133, 74, 21, 125, 155, 149, 18, 17, 66) as $p) paper_info($p) ?>
    </ul>
    <br/>
  </div>

  <div class="container" id="security">
    <h3>Security</h3>
    <ul class="list-group">
      <?php paper_info(100) ?>
      <?php paper_info(100) ?>
    </ul>
    <br/>
  </div>

  <?php } ?>

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
