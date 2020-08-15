<?php 
  include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Signin</title>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <?php if ( $is_auth ) {
    echo 'You have already signed in.';
    header( 'Location: index.php' );
  } else { 
    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    if ( strlen($username) > 0 ) {
      if ( $username == 'test' and $password == '123' ) {
        $_SESSION[ 'username' ] = $username;
        header( 'Location: index.php' );
      } else {
        $signin_err = TRUE;
      }
    }
    ?>
    <form action="signin.php" method="POST" class="form-signin">
      <?php if ($signin_err) {
        echo '<h3 class="h3 mb-3 font-weight-normal red">You have entered wrong Username or Password!</h3>';
      } ?>
      <img class="mb-4" src="assets/img/SIGAPP-LOGO.jpg" alt="" height="72">
      <h3><a href="http://www.sigapp.org/RACS/RACS2020/">RACS2020</a></h3>
      Online Conference
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; SIGAPP RACS 2020</p>
    </form>
  <?php } ?>
</body>
</html>
