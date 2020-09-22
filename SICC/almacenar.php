
    <link rel="stylesheet" type="text/css" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <h1 style="text-align:center" ><img src="Imagenes\dacc0d9c-5f4f-480b-a283-83207c747bbd 2.jpg" class="logo" alt="">   Sistemas de Control de Cuarteles - Cuerpo bomberos de Machali</h1>



      <h2  style="text-align:center">Bombero Ingresado Correctamente</h2>
<?php
    require("Menu.php"); ?>
<div class="contenedorInformacion">


<?php

  //DATOS A Ingresar
  $nombre= $_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $run=$_POST['run'];
  $fechaNac=$_POST['fechaNac'];
  $domicilio=$_POST['domicilio'];
  $telefono=$_POST['telefono'];
  $isapre=$_POST['isapre'];
  $gurpoSanguineo=$_POST['grupoSanuineo'];
  $familiarContacto=$_POST['familiarContacto'];
  $telefonoContacto=$_POST['telefonoContacto'];
  $compañia=$_POST['Compañia'];
  $cargo=$_POST['cargo'];
  $especialidad=$_POST['especialidad'];
  $maquinista=$_POST['maquinista'];
  $imagen=$_POST['archivoImagen'] ;


  if(isset($_POST['btnIngresar'])){
      echo "<h3> Nombre :".$nombre. " ".$apellidos. "</h3>" ;
      echo "<h3> RUN  :".$run. "</h3>" ;
      echo "<h3> Fecha de Nacimiento :".$fechaNac. "</h3>" ;
      echo "<h3> Domicilio :".$domicilio. "</h3>" ;
      echo "<h3> Teléfono :".$telefono. "</h3>" ;
      echo "<h3> Isapre :".$isapre. "</h3>";
      echo "<h3> Grupo Sanguineo :".$gurpoSanguineo. "</h3>" ;
      echo "<h3> Familiar de Contacto :".$familiarContacto. "</h3>" ;
      echo "<h3> Telefono de Contacto :".$telefonoContacto. "</h3>";
      echo "<h3> Compañía :".$compañia. "</h3>" ;
      echo "<h3> Cargo :".$cargo. "</h3>" ;
      echo "<h3> Especialidad :".$especialidad. "</h3>" ;
      echo "<h3> Maquinista :".$maquinista. "</h3>" ;
      echo "<h3> Imagen :".$imagen. "</h3>" ;


  }
  if(isset($_POST['btnVolver'])){
    header("Location:Home.php");
  }
  if(isset($_POST['btnLimpiar'])){
    header("Location:Ingreso.php");
  }


 ?>
</div>
