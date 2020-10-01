<?php

  include 'conexion.php';
  include '../Clases/Bombero.php';


  class BomberoDAO{


    function __construct(){}



  //INSERT EL AÑO VA PRIMERO, DESPUES MES Y AL FINAL DIA
  function ingresarBombero($bombero){
    $rut = $bombero->__get("run");
    if(!$this->siExiste($rut)){
                          echo "Se puede ingresar ";
                          $consulta = "insert into tbl_bombero(nombre,apellido,run,fecha_nac,domicilio,telefono,id_compania)
                               values('".$bombero->__get("nombre")."','".$bombero->__get("apellido")."','".$bombero->__get("run")."',
                                  '".$bombero->__get("fechaNac")."','".$bombero->__get("domicilio")."','".$bombero->__get("telefono")."',
                                  '".$bombero->__get("idComp")."' )
                                 ";


                                 $db = conectar();   //realiza la Conexion

                                   $stm = $db->prepare($consulta); //Prepara la $consulta
                                   if($stm->execute()){
                                               echo   ' <script languaje="javascript">alert("se ha guardado");</script>  ' ;
                                               return 1;
                                   }else{
                                                 echo   ' <script languaje="javascript">alert("no se ha guardado");</script>  ' ;
                                                 return 2;
                                   }



          }else{
              echo   ' <script languaje="javascript">alert("Ya se encuentra guardado");</script>  ' ;
              return 3;
     }



  }



//ESTRUCTURA
/*
  $db = conectar();   //realiza la Conexion
  $consulta = "select blabalbal "; //La consulta
  $stm = $db->prepare($consulta); //Prepara la $consulta
  $stmt->execute();
  //PARA INGRESAR



  //PARA LISTAR
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


  foreach ($rows as $row) {
            $id = $row['id_compania'];
            $nombre = $row['nombre'];
            $ubicacion = $row['ubicacion'] ;
  }

*/

  //Verificar
      function testeo(){
        $db = conectar();

        try {
          $stmt = $db->prepare("SELECT * FROM tbl_compania ");
        	$stmt->execute();
        	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            echo "Ocurrió un error<br>";
            echo $ex->getMessage();
            exit;
        }


        foreach ($rows as $row) {

        }

        }

        function test(){
          echo   ' <script languaje="javascript">alert("Se ha podido ingresar");</script>  ' ;

        }


      //SiExiste
      function siExiste($run){

        $db = conectar();

        try {
          $stmt = $db->prepare("SELECT * FROM tbl_bombero WHERE run = '".$run."' ");
        	$stmt->execute();
        	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

          //verificar  echo $stmt->rowCount();
        } catch(PDOException $ex) {
            echo "Ocurrió un error<br>";
            echo $ex->getMessage();
            exit;
        }

        if($stmt->rowCount() > 0){

          return true;


        }else{
          return false;

        }
        }

}

  //
  // $teset = new BomberoDAO();
  //
  // $bombero = new Bombero("Carlos Raúl","Ramos Peñaloza","19923124-1", "1998-02-21","Meson del Nelson", "856452251",2);
  //
  //
  //
  // echo "<br>PRUEBA FINAL<br>";
  //
  //
  // $teset->ingresarBombero($bombero);
  //






 ?>
