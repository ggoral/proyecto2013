<?php
require_once "modelo.php";

$articulo = new Articulo();
//$atributos = array($_POST['user'],$_POST['password']);
 
$atributos = array("mate");

$result = $articulo->obtener_articulo_por_nombre($atributos);
$cantidad = $articulo->cantidad_resultados($result);
print_r($result);

$articulos = $articulo->getTodosLosArticulos();
$cantidad = $articulo->cantidad_resultados($result);
print_r($articulos);

foreach ($articulos as $articulo){
  echo $articulo['fecha']," ";
  echo $articulo['titulo'],"\n";
}
?>