<?php

  include 'conexion.php';
  include '../Clases/Compañia.php';


  class CompaniaDAO{

    function __construct(){}

      function lista(){

        $arreglo  = array();

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
          $id = $row['id_compania'];
          $nombre = $row['nombre'];
          $ubicacion = $row['ubicacion'] ;
          

          }

        }






  }

  $compan = new CompaniaDAO();
  $arreglo = $compan->lista();
  echo $arrelo[0];




 ?>
