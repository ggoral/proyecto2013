<?php
session_start();

if (array_key_exists('usuario', $_SESSION)) {
  if (isset($_SERVER))
    {
    $HOST = $_SERVER['HTTP_HOST'];
    $URI = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $EXTRA = 'index.html';
    header("Location: http://$HOST$URI/$EXTRA");
    require('vista.php');
    }
  }
else {
    header("Location: index.html");
  }
exit;
?>