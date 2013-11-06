<?php
$value = 'cualquier cosa';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* expira en una hora */
setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);
?>
