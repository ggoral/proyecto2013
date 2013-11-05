<?php

require_once "database.php";

class Usuario extends Database {

function obtener_usuario($attr=null)
  {
    $this->crear_conexion();
    $query = $this->consulta_base_de_datos("SELECT * FROM usuario WHERE user=? and pass=?",$attr);
    $this->cerrar_conexion();
    return $query;
  }

function obtener_pass($attr=null)
  {
    $this->crear_conexion();
    $query = $this->consulta_base_de_datos("SELECT * FROM usuario WHERE user=?",$attr);
    $this->cerrar_conexion();
    return $query;
  }

function obtener_todos_los_usuarios()
  {
  // Conectar con la base de datos y seleccionarla
  $this->crear_conexion();
 
  // Ejecutar la consulta SQL
  $resultado = $this->consulta_base_de_datos('SELECT user, pass FROM usuario');
 
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
