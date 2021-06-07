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

 public function getIdPersona():string{
     return $this ->id_persona;
 }

 public function setIdPersona(string $id_persona){
     $this ->id_persona = $id_persona;
}

public function getNombre():string{
    return $this ->nombre;
}

public function setNombre(string $nombre){
    $this ->nombre = $nombre;
}

public function getApellidos():string{
    return $this ->apellidos;
}

public function setApellidos(string $apellidos){
    $this ->apellidos = $apellidos;
}

public function getEdad():string{
    return $this ->edad;
}

public function setEdad(string $edad){
    $this ->edad = $edad;
}

}

$Codestack = new Persona(1, "Wendy", "Gomez Estrella" , 17);

print_r($Codestack-> toArray());