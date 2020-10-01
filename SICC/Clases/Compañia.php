<?php

class Compañia{
  var $id,$nombre,$ubicacion;


  public function __construct(){}

  public function __set($propiedad,$valor){
    $this->$propiedad = $valor;
  }

  public function __get($propiedad){

  }



}





 ?>
