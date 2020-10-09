<?php

  include_once 'conexion.php';


  class ListasDAO{

    function __construct(){}



      function listarComp($dato){
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

        if($dato == "0"){
          echo '<option selected value=""> Elige una opción </option>';
        }
        foreach ($rows as $row) {
          $id = $row['id_compania'];
          $nombre = $row['nombre'];
          $ubicacion = $row['ubicacion'] ;

          if($dato == $id){
          echo '<option selected value="'.$id.'">'.$nombre.'</option>';
          }else{
          echo '<option value="'.$id.'">'.$nombre.'</option>';
        }
        }
      }

      function listarCargos($dato){
        $db = conectar();
        try {
          $stmt = $db->prepare("SELECT * FROM tbl_cargo ");
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
          echo "Ocurrió un error<br>";
          echo $ex->getMessage();
          exit;
        }
        if($dato == "0"){
          echo '<option selected value=""> Elige una opción </option>';
        }
        foreach ($rows as $row) {
          $id = $row['id_cargo'];
          $nombre = $row['nombre'];
          if($dato == $id){
                      echo '<option selected value="'.$id.'">'.$nombre.'</option>';
          }else{

          echo '<option value="'.$id.'">'.$nombre.'</option>';
        }
        }
      }

      function listarEspecialidades($dato){
        $db = conectar();
        try {
          $stmt = $db->prepare("SELECT * FROM tbl_especialidad ");
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
          echo "Ocurrió un error<br>";
          echo $ex->getMessage();
          exit;
        }
        if($dato == "0"){
          echo '<option selected value=""> Elige una opción </option>';
        }
        foreach ($rows as $row) {
          $id = $row['id_especialidad'];
          $nombre = $row['nombre'];
          if($dato == $id){
                      echo '<option selected value="'.$id.'">'.$nombre.'</option>';
          }else{

          echo '<option value="'.$id.'">'.$nombre.'</option>';
        }
        }
      }
      function listarPrevision($dato){
        $db = conectar();
        try {
          $stmt = $db->prepare("SELECT * FROM tbl_prevision ");
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
          echo "Ocurrió un error<br>";
          echo $ex->getMessage();
          exit;
        }
        if($dato == "0"){
          echo '<option selected value=""> Elige una opción </option>';
        }
        foreach ($rows as $row) {
          $id = $row['id_prevision'];
          $nombre = $row['nombre'];
          if($dato == $id){
                      echo '<option selected value="'.$id.'">'.$nombre.'</option>';
          }else{

          echo '<option value="'.$id.'">'.$nombre.'</option>';
        }
        }
      }

      function listarGS($dato){
        $db = conectar();
        try {
          $stmt = $db->prepare("SELECT * FROM tbl_grupo_sanguineo ");
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
          echo "Ocurrió un error<br>";
          echo $ex->getMessage();
          exit;
        }
        if($dato == "0"){
          echo '<option selected value=""> Elige una opción </option>';
        }
        foreach ($rows as $row) {
          $id = $row['id_grupo_sanguineo'];
          $nombre = $row['nombre'];
          if($dato == $id){
                      echo '<option selected value="'.$id.'">'.$nombre.'</option>';
          }else{

          echo '<option value="'.$id.'">'.$nombre.'</option>';
        }
        }
      }

      function listarCursos($dato){
        $db = conectar();
        try {
          $stmt = $db->prepare("SELECT * FROM tbl_cursos ");
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
          echo "Ocurrió un error<br>";
          echo $ex->getMessage();
          exit;
        }
        if($dato == "0"){
          echo '<option selected value=""> Elige una opción </option>';
        }
        foreach ($rows as $row) {
          $id = $row['id_cursos'];
          $nombre = $row['tipo_curso'];
          if($dato == $id){
                      echo '<option selected value="'.$id.'">'.$nombre.'</option>';
          }else{

          echo '<option value="'.$id.'">'.$nombre.'</option>';
        }
        }
      }


  }




 ?>
