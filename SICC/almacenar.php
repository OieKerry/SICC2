
<?php require("Top.php") ?>


<?php
  require("Menu.php"); ?>

  <div class="divFondo">



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
      echo "<h4> Nombre :".$nombre. " ".$apellidos. "</h4>" ;
      echo "<h4> RUN  :".$run. "</h4>" ;
      echo "<h4> Fecha de Nacimiento :".$fechaNac. "</h4>" ;
      echo "<h4> Domicilio :".$domicilio. "</h4>" ;
      echo "<h4> Teléfono :".$telefono. "</h4>" ;
      echo "<h4> Isapre :".$isapre. "</h4>";
      echo "<h4> Grupo Sanguineo :".$gurpoSanguineo. "</h4>" ;
      echo "<h4> Familiar de Contacto :".$familiarContacto. "</h4>" ;
      echo "<h4> Telefono de Contacto :".$telefonoContacto. "</h4>";
      echo "<h4> Compañía :".$compañia. "</h4>" ;
      echo "<h4> Cargo :".$cargo. "</h4>" ;
      echo "<h4> Especialidad :".$especialidad. "</h4>" ;
      echo "<h4> Maquinista :".$maquinista. "</h4>" ;
      echo "<h4> Imagen :".$imagen. "</h4>" ;


  }
  if(isset($_POST['btnVolver'])){
    header("Location:Home.php");
  }
  if(isset($_POST['btnLimpiar'])){
    header("Location:Ingreso.php");
  }


 ?>
</div>
