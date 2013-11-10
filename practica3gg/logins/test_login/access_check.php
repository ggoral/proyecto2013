<?php
session_start();

if (array_key_exists('usuario', $_SESSION)) {
  $usuario = $_SESSION['usuario'];
  }
else { 
  header("location: login.php?error=error");
  }
?>