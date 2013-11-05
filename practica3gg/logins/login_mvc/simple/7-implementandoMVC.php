<?php
//Conectamos a la Base
require_once("2-modelo.php");

//Recupero los usuarios
$usuarios=obtener_usuarios();

//Cargo la vista
require("2-vista.php");

?> 




