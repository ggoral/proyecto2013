<?php
if (!isset($_COOKIE["ultimaVisita"])) {
  setCookie("ultimaVisita", time() );
  $mensaje="Bienvenido a mi sitio.....";
  }
else
  $mensaje="Hola nuevamente......";
echo time();
echo $mensaje;
?>
