<?php
 
class database {
  private $conexion;

  function crear_conexion()
    {
      if(!isset($this->conexion))
      {
        $db_host="127.0.0.1";
        $db_user="ggoral";
        $db_pass="proyecto";
        $db_base="mymvc";
        $this->conexion = new PDO("mysql:dbname=$db_base;host=$db_host",$db_user,$db_pass);
      }
    }

  function cerrar_conexion()
    {
      $this->conexion = null;
    }

  function consulta_base_de_datos($consulta, $atributos=null)
    {
      $this->crear_conexion();
      try
      {
        $query = $this->conexion->prepare($consulta);
        $query->execute($atributos);
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        //$resultado = $query->fetch();
      }
      catch(PDOException $e)
      {
        $resultado = 'Error: ' . $e->getMessage();
      }
      return $resultado;
    }
 
  function cantidad_resultados($resultado)
    {
      return sizeof($resultado);
    }
  }

?>