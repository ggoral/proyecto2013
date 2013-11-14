<?php
session_start();

if (array_key_exists('usuario', $_SESSION)) {
  print_r($_SESSION);
  if (isset($_SERVER))
    {
    $HOST = $_SERVER['HTTP_HOST'];
    $URI = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $EXTRA = 'controller/frontcontroller.php';
    header("Location: http://$HOST$URI/$EXTRA");
    }
  }
else {
    header("Location: index.php?usuario=anonimous");
  }
?>