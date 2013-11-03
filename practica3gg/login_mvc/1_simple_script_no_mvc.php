<?php
 
// Conectar con la base de datos y seleccionarla
$conexion = mysql_connect('localhost', 'ggoral', 'proyecto');
mysql_select_db('mymvc', $conexion);

// Ejecutar la consulta SQL
$resultado = mysql_query('SELECT user,pass FROM usuario', $conexion);
?>
 
<html>
  <head>
    <title>Listado de Usuarios</title>
  </head>
  <body>
    <h1>Listado de Usuarios</h1>
    <table>
      <tr><th>Usuario</th><th>Pass</th></tr>
<?php
  // Mostrar los resultados con HTML
  while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
  {
    echo "\t<tr>\n";
    printf("\t\t<td> %s </td>\n", $fila['user']);
    printf("\t\t<td> %s </td>\n", $fila['pass']);
    echo "\t</tr>\n";
  }
  ?>
      </table>
    </body>
  </html>
   
<?php
 
// Cerrar la conexion
mysql_close($conexion);
 
?>

