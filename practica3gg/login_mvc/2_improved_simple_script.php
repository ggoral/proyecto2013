<?php
 
// Conectar con la base de datos y seleccionarla
$conexion = mysql_connect('localhost', 'ggoral', 'proyecto');
mysql_select_db('mymvc', $conexion);

// Ejecutar la consulta SQL
$resultado = mysql_query('SELECT user,pass FROM usuario', $conexion);
 
// Crear el array de elementos para la capa de la vista
$usuarios = array();
while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
{
  $usuarios[] = $fila;
}
 
// Cerrar la conexión
mysql_close($conexion);
 
// Incluir la lógica de la vista
require('vista.php');

?>