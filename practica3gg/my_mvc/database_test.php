<?php
require_once "database.php";

$db = new Database();

echo "Crear la conexion\n";
$db->crear_conexion();

echo "Consulta a la Base de Datos\n";
$consulta = "SELECT * FROM articulo WHERE nombre=?";
$atributos_consulta = array("mate");
echo "PDO_SQL: ",$consulta,"\n PDO_ATTR: ";
print_r($atributos_consulta);

$res = $db->consulta_base_de_datos($consulta,$atributos_consulta);
$cant = $db->cantidad_resultados($res);

echo "Cantidad de filas resultantes:",$cant,"\n";
print_r($res);

$db->cerrar_conexion();
echo "Conexion a la Base de Datos Cerrada\n";
?>
