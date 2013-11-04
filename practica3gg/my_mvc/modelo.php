<?php

require_once "database.php";

class Articulo extends Database {

function obtener_articulo_por_nombre($attr=null)
  {
    $this->crear_conexion();
    $query = $this->consulta_base_de_datos("SELECT * FROM articulo WHERE nombre=?",$attr);
    $this->cerrar_conexion();
    return $query;
  }

function getTodosLosArticulos()
  {
  // Conectar con la base de datos y seleccionarla
  $this->crear_conexion();
 
  // Ejecutar la consulta SQL
  $resultado = $this->consulta_base_de_datos('SELECT fecha, titulo FROM articulo');
 
  // Crear el array de elementos para la capa de la vista
  //$articulos = array();
  //while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
  //{
  //  $articulos[] = $fila;
  //}
 
  // Cerrar la conexión
  $this->cerrar_conexion();
 
  return $resultado;
  }

}
?>
