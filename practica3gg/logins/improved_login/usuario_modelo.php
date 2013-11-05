<?php

require_once "conexion.php";

class Usuario extends onexion{
    private $conn = new Database(); 

function obtener_usuario($attr=null)
  {
    $conn->crear_conexion();
    $query = $conn->consulta_base_de_datos("SELECT * FROM usuario WHERE user=? and pass=?",$attr);
    $conn->cerrar_conexion();
    return $query;
  }

function obtener_pass($attr=null)
  {
    $conn->crear_conexion();
    $query = $conn->consulta_base_de_datos("SELECT * FROM usuario WHERE user=?",$attr);
    $conn->cerrar_conexion();
    return $query;
  }

function obtener_todos_los_usuarios()
  {
  // Conectar con la base de datos y seleccionarla
  $conn->crear_conexion();
 
  // Ejecutar la consulta SQL
  $resultado = $conn->consulta_base_de_datos('SELECT user, pass FROM usuario');
 
  // Crear el array de elementos para la capa de la vista
  //$articulos = array();
  //while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
  //{
  //  $articulos[] = $fila;
  //}
 
  // Cerrar la conexión
  $conn->cerrar_conexion();
 
  return $resultado;
  }

}
?>
