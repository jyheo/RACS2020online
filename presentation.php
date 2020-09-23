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
                <a class="navbar-brand js-scroll-trigger" href="index.php">RACS2020 Virtual Conference</a>
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


<?php
    $paperid = htmlspecialchars($_GET["paper"]);
    $paper_json = json_decode(file_get_contents('papers/' . $paperid . '.json'), true);
?>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="h1"> <?php echo $paper_json["title"] ?> </h1>
      <?php
        foreach($paper_json["authors"] as $author) {
            echo $author . '<br/>';
        }
      ?>
      
    </div>
  </div>

  <div class="container">
    <h3>Presenter: <?php echo $paper_json["presenter"] ?> <a href="mailto:<?php echo $paper_json["presenter_email"] ?>"><i class="fas fa-envelope"></i></a></h3>
    <h3>Abstracts</h3>
        <p>
        <?php echo $paper_json["abstracts"] ?>
        </p>

    <hr>
    <?php if (array_key_exists("bio", $paper_json)) { ?>
    <h3>Bio</h3>
        <p>
        <?php echo $paper_json["bio"] ?>
        </p>

    <hr>
    <?php } ?>
    <?php if ( $is_auth ) { ?>
    <h3>Video Presentation</h3>
    <p>
    <iframe width="720" height="405" src="<?php echo $paper_json["video_url"] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </p>
    <?php } ?>

    <hr>

    <h3>Discussion (powered by <a href="https://github.com/jyheo/RACS2020online/issues/<?php echo $paper_json["github_issue_id"]; ?>">
        Github Issues #<?php echo $paper_json["github_issue_id"]; ?></a>)</h3>

    <table class="table table-hover">
    <thead>
      <tr>
        <th>Comments</th>   <th>by</th>   <th>Time</th>
      </tr>
    </thead>
    <tbody id="github-issues">
    </tbody>
    </table>

  </div>


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
        <script>
        $(function() {
            $.getJSON("https://api.github.com/repos/jyheo/RACS2020online/issues/<?php echo $paper_json["github_issue_id"]; ?>/comments", function(result){
                $.each(result, function(i, field){
                    $("#github-issues").append('<tr><td>' + '<a href="' + field.html_url + '">' + field.body + '</a></td>' +
                    '<td><img class="rounded-circle" height="30" src="'+ field.user.avatar_url + '"/> &nbsp;' + field.user.login + '</td>' +
                    '<td>' + field.updated_at + '</td></tr>');
                });
            });
        });
        </script>
    </body>
</html>
