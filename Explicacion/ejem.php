<?php
 class Persona{
     private $id_persona;
     private $nombre;
     private $apellidos;
     private $edad;
 }

 function construct(int $id_persona = null, string $nombre, string $apellidos, int $edad){
      $this ->id_persona = $id_persona;
      $this ->nombre = $nombre;
      $this ->apellidos = $apellidos; 
      $this ->edad = $edad;
 }

public function __get($valor_principal)
{
    return $this -> $valor_principal;
}

public function __set($valor_dos, $campo_asignado)
{
    $this->$valor_dos -> $campo_asignado;
}

$Codestack = new Persona(1, "Wendy", "Gomez Estrella" , 17);
