<?php
// Imprimir una cookie individual
  echo $_COOKIE["ultimaVisita"];
  echo $HTTP_COOKIE_VARS["ultimaVisita"];

//Otra manera de depurar/probar es viendo todas las cookies
  print_r($_COOKIE);
?>
