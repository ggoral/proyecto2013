<?php
session_start();

if (isset($_SERVER))
  {
  $HOST = $_SERVER['HTTP_HOST'];
  $URI = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $EXTRA = 'controller/frontcontroller.php';
  header("Location: http://$HOST$URI/$EXTRA");
  }
else {
    header("Location: index.php?usuario=anonimous");
  }
?>