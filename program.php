<?php 
  include 'header.php';

  function paper_info($paperid, $virtual = true) {
    $paper_json = json_decode(file_get_contents('papers/' . $paperid . '.json'), true);
    echo '<li class="list-group-item">';
    if (substr($paper_json['video_url'], 0, 4 ) === "http") {
      echo '(virtual) ';
      echo '<a class="list-group-item-text h5" href="presentation.php?paper=' . $paperid . '">' . $paper_json["title"] . '</a><br/>';
    } else {
      if ($virtual) {
        echo '(virtual) <b style="color:red;">no-show</b> ';
      } else {
        echo '(in-person) ';
      }
      echo '<span class="list-group-item-text h5">' . $paper_json["title"] . '</span><br/>';
    }
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
                <a class="navbar-brand js-scroll-trigger" href="index.php">RACS2020 Virtual Conference</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!--li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li-->
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

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="h1">Programs</h1>
      <p><a href="presentation.php?paper=keynote" class="btn btn-success" style="color:blue">Keynote Speech</a></p>
      <p>
        <a href="#ssw" class="btn btn-info" style="margin-bottom: 5px;">System Software & Networking</a>
        <a href="#ai" class="btn btn-info" style="margin-bottom: 5px;">AI & Algorithm</a>
        <a href="#db" class="btn btn-info" style="margin-bottom: 5px;">DB, Data Mining & SE</a>
        <a href="#ps" class="btn btn-info" style="margin-bottom: 5px;">Poster Session</a>
      </p>
    </div>
  </div>

  <style>
    .toppad {
      padding-top: 70px;
    }
  </style>

  <?php if ( $is_auth ) { ?>

  <div class="container" id="keynote">    
    <h3>Keynote Speech</h3>
    <ul class="list-group">
      <?php paper_info('keynote') ?>
    </ul>
    <br/>
  </div>
  
  <div class="container" id="ssw">
    <h3 class="toppad">System Software & Networking</h3>
    <ul class="list-group">  
      <?php foreach (array(5, 15, 16, 17, 67, 68, 71, 8, 14, 18, 105, 125) as $p) paper_info($p) ?>
      <?php foreach (array(3, 136, 144, 145) as $p) paper_info($p, false) ?>
    </ul>
    <br/>
  </div>

  


  <div class="container" id="ai">
  <h3 class="toppad">Artificial Intelligence & Algorithm</h3>
    <ul class="list-group">
      <?php foreach (array(21, 22, 69, 70, 150, 117, 118) as $p) paper_info($p) ?>
      <?php foreach (array(2, 9, 155, 146, 149, 151, 154) as $p) paper_info($p, false) ?>
    </ul>
    <br/>
  </div>
 

  <div class="container" id="db">
    <h3 class="toppad">Database, Data Mining & Software Engineering</h3>
    <ul class="list-group">
      <?php foreach (array(61, 73, 74, 103, 7, 66, 72, 116, 126, 127, 133) as $p) paper_info($p) ?>
      <?php foreach (array(152) as $p) paper_info($p, false) ?>
    </ul>
    <br/>
  </div> 


  <div class="container" id="ps">
    <h3 class="toppad">Poster Session</h3>
    <ul class="list-group">
      <?php foreach (array(158) as $p) paper_info($p) ?>
      <?php foreach (array(134, 135, 137, 141, 142, 153, 157) as $p) paper_info($p, false) ?>
    </ul>
    <br/>
  </div>
  

  <?php } else { ?>
    <div class="container d-flex h-100 align-items-center">
    <div class="mx-auto text-center">
    <a class="btn btn-primary js-scroll-trigger" href="signin.php">Sing In</a>
    </div></div>
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
