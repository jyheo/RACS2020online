<?php
  if((!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "") && $_SERVER['HTTP_HOST'] != 'localhost'){
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  }
  
  session_start();
  if( isset( $_SESSION[ 'username' ] ) ) {
    $is_auth = TRUE;
  }
?>