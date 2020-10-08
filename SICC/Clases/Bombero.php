<?php

class Bombero{

  private $nombre,$apellido,$run,$fechaNac,$domicilio,$telefono,$id,$idComp;


  public function __construct($nombre, $apellidos, $run, $fechaNac, $domicilio, $telefono, $idComp){
    $this->nombre = $nombre;
    $this->apellido = $apellidos;
    $this->run = $run;
    $this->fechaNac = $fechaNac;
    $this->domicilio = $domicilio;
    $this->telefono = $telefono;
    $this->idComp = $idComp;
  }


  public function __set($propiedad,$valor){

    $this->$propiedad = $valor;
  }
  public function __get($propiedad){
    return $this->$propiedad;
  }




}

  // $b1 = new Bombero();
  // $b1->constructor("Patricio Alejandro","sánchez vejar","19864118-9","24-03-1998","Los Quintrales #945","932597199","2");
  // echo "Nombre : ".$b1->__get("nombre"). "<br>
  //       Apellidos : ".$b1->__get("apellido"). "<br>
  //       RUN : ".$b1->__get("run"). "<br>
  //       FechaNac : ".$b1->__get("fechaNac"). "<br>
  //       Domicilio : ".$b1->__get("domicilio"). "<br>
  //       Telefono : ".$b1->__get("telefono"). "<br>
  //       idComp : ".$b1->__get("idComp"). "<br>
  //
  // "





 ?>
