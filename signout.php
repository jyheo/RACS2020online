<?php 
  include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signout</title>
  </head>
  <body>
    <?php
      if ( $is_auth ) {
        session_destroy();
        echo '<h1>You have signed out.</h1>';
      } else {
        echo '<h1>You have not signed in.</h1>';
      }
      header( 'Location: index.php' );
    ?>
  </body>
</html>