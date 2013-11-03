<?php
 
// Incluir la lógica del modelo
require_once('modelo.php');
 
// Obtener la lista de artículos
$usuario = new Usuario();
$usuarios = $usuario->obtener_todos_los_usuarios();

// Incluir la lógica de la vista
require('vista.php');
?>