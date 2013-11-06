<?php
// Imprimir una cookie individual
echo $_COOKIE["TestCookie"];
echo $HTTP_COOKIE_VARS["TestCookie"];

//Otra manera de depurar/probar es viendo todas las cookies
print_r($_COOKIE);
?>
