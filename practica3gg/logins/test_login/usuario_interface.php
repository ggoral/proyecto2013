<?php

require_once "conexion.php";
require_once "usuario.php";

class ORM_usuario{

public static function buscar_usuario($id_usuario)
  {
    $conexion = new Conexion();
    $conexion->crear_conexion();
    $query = $conexion->consulta("SELECT * FROM usuario WHERE id_usuario=?",array($id_usuario));
    $row = $query[0];
    $conexion->cerrar_conexion();

    $usuario = new Usuario();
    $usuario->init($row['id_usuario'],$row['username'],$row['password'],$row['email'],$row['id_rol'],$row['activo']);
    return $usuario;
  }

public static function buscar_usuario_login($username, $password)
  {
    $conexion = new Conexion();
    $row = $conexion->consulta_fetch("SELECT * FROM usuario WHERE username=? and password=?",array($username,$password));
    if ($row)
      {
      $usuario = new Usuario();
      $usuario->init($row['id_usuario'],$row['username'],$row['password'],$row['email'],$row['id_rol'],$row['activo']);
      return $usuario;
      }
    return null;
  }

public static function obtener_todos_usuario()
  {
    $conexion = new Conexion();
    $conexion->crear_conexion();
    $query = $conexion->consulta("SELECT * FROM usuario");
    $conexion->cerrar_conexion();
    return $query;
  }

public static function agregar_usuario_campos($username, $password, $email, $id_rol, $activo)
  {
    $conexion = new Conexion();
    $sql_insert = "INSERT INTO usuario (username, password, email, id_rol, activo) VALUES (?,?,?,?,?)";
    $campos = array($username, $password, $email, $id_rol,$activo);
    $query = $conexion->consulta_row($sql_insert,$campos);
    return $query;
  }

public static function eliminar_usuario($id_usuario)
  {
    $conexion = new Conexion();
    $sql_delete = "delete from usuario where id_usuario=?";
    $campos = array($id_usuario);
    $query = $conexion->consulta_row($sql_delete,$campos);
    return $query;
  }

public static function actualizar_usuario($usuario)
  {
    $conexion = new Conexion();
    $sql_update = "UPDATE usuario SET username=?,password=?,email=?,id_rol=?,activo=? WHERE id_usuario=?";
    $campos = array($usuario->getUsername(), $usuario->getPassword(), $usuario->getEmail(), $usuario->getId_rol(), $usuario->getActivo(), $usuario->getId_usuario());
    $query = $conexion->consulta_row($sql_update,$campos);
    return $query;
  }
  
public static function buscar_por_clave($username)
  {
    $conexion = new Conexion();
    $query = $conexion->consulta_fetch("SELECT id_usuario FROM usuario WHERE username=?",array($username));
    $id_usuario = $query['id_usuario'];
    return (int)$id_usuario;
  }
	
public static function agregar_usuario($username, $password, $email, $id_rol, $activo)
  {
    $conexion = new Conexion();
	  $existe = ORM_usuario::buscar_por_clave($username);
	if (!$existe){
		$query = ORM_usuario::agregar_usuario_campos($username, $password, $email, $id_rol, $activo);
		return $query;
	}
	return 0;	
  }

}
?>
