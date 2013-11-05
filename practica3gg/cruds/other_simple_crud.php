<?php

class Operaciones {     
private $database;

protected $id;
protected $atributos;

protected $tabla;
protected $campos;

public function __construct($link) {
    $this->database = $link;
}

public function insertar() {
    if (!$this->verificarCamposNulos($this->atributos, $this->campos))
        echo 'Campos nulos<br />';
    else {
        $this->prepararCampos();
        $placeholders = $this->generarPlaceholders();           

        $stmt = $this->database->prepare("INSERT INTO {$this->tabla} ({$this->campos}) VALUES ({$placeholders})");

        $valores = array_values($this->atributos);
        $stmt->execute($valores);

        $stmt = NULL;           
        echo 'Se ha insertado exitosamente';
    }
}

public function modificar() {
    if (!$this->verificarCamposNulos() || empty($this->id))
        echo 'Campos nulos<br />';
    else {
        $this->prepararCampos('=?');                        

        $stmt = $this->database->prepare("UPDATE {$this->tabla} SET {$this->campos} WHERE id = {$this->id}");

        $valores = array_values($this->atributos);
        $stmt->execute($valores);

        $stmt = NULL;           
        echo 'Se ha modificado exitosamente';           
    }
}

private function generarPlaceholders() {
    for($i=0;$i<count($this->atributos);$i++) 
        $qmarks[$i] = '?';

    return implode(',', $qmarks);
}

// Check if the values to be inserted are NULL, depending on the field format given
private function verificarCamposNulos() {
    $n_campos = explode(',', $this->campos);

    $valores = array_values($this->atributos);

    foreach($n_campos as $i => $result) {       
        if (strstr($result, '@'))           
            if (empty($valores[$i]))
                return false;
    }

    return true;
}   

// Removes the '@' from each field, used to check which fields are NOT NULL in mysql
private function prepararCampos($sufijo = NULL) {
    $n_campos = explode(',', $this->campos);

    foreach($n_campos as $i => $result)         
        $n_campos[$i] = str_replace('@', '', $result) . $sufijo;

    $this->campos = implode(',', $n_campos);
}
}
?>