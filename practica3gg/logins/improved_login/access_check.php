<?php
session_start();
if (array_key_exists('user', $_SESSION)){
  $usuario = $_SESSION['user'];
}
else{
  header("location: login.php?error=error");
}
?>