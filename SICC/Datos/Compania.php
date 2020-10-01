<?php



  class Compania{
    private $id,$nombre,$ubicacion;

    public function __construct(){}

    public function CompaniaL($id,$nombre,$ubicacion){
      $this->id=$id;
      $this->nombre=$nombre;
      $this->ubicacion=$ubicacion;
    }

    public function __get($propiedad){
      return $this->$propiedad;
    }
    public function __set($propiedad,$valor){
      return $this->$propiedad = $valor;
    }




  }




 ?>
