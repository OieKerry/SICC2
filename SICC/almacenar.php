
<?php require("Top.php");
      require("Menu.php");

      include "Datos/BomberoDAO.php";
      include "Clases/Bombero.php";
      include "Datos/InfoPersonalDAO.php";
      include "Clases/InfoPersonal.php";

   ?>

  <div class="divFondo">



<?php

  //DATOS A Ingresar
  $nombre= $_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $run=$_POST['rut'];
  $fechaNac=$_POST['fechanac'];
  $domicilio=$_POST['domicilio'];
  $telefono=$_POST['telefono'];
  $prevision=$_POST['prevision'];
  $gurpoSanguineo=$_POST['grupoSanguineo'];
  $familiarContacto=$_POST['familiarContacto'];
  $telefonoContacto=$_POST['telefonoContacto'];
  $compañia=$_POST['Compañia'];
  $cargo=$_POST['cargo'];
  $especialidad=$_POST['especialidad'];
  $maquinista=$_POST['maquinista'];
  $curso=$_POST['curso'];



  if(isset($_POST['btnIngresar'])){
    

    $foto = $_FILES["archivoImagen"]["name"];
    $ruta = $_FILES["archivoImagen"]["tmp_name"];
    $destino = "Fotos/".$run.".jpg";
    copy($ruta,$destino);


      echo "<h4> Nombre :".$nombre. " ".$apellidos. "</h4>" ;
      echo "<h4> RUN  :".$run. "</h4>" ;
      echo "<h4> Fecha de Nacimiento :".$fechaNac. "</h4>" ;
      echo "<h4> Domicilio :".$domicilio. "</h4>" ;
      echo "<h4> Teléfono :".$telefono. "</h4>" ;
      echo "<h4> Prevision :".$prevision. "</h4>";
      echo "<h4> Grupo Sanguineo :".$gurpoSanguineo. "</h4>" ;
      echo "<h4> Familiar de Contacto :".$familiarContacto. "</h4>" ;
      echo "<h4> Telefono de Contacto :".$telefonoContacto. "</h4>";
      echo "<h4> Compañía :".$compañia. "</h4>" ;
      echo "<h4> Cargo :".$cargo. "</h4>" ;
      echo "<h4> Especialidad :".$especialidad. "</h4>" ;
      echo "<h4> Cruso :".$curso. "</h4>" ;
      echo "<h4> Directorio de la foto :".$destino. "</h4>" ;

      $bomberoDAO = new BomberoDAO();
      if($bomberoDAO->siExiste($run)){
        echo   ' <script languaje="javascript">alert("El Bombero ya se encuentra ingresado");</script>  ' ;
            header("Location:Ingreso.php");
      }else{

      $bombero = new Bombero($nombre,$apellidos,$run,$fechaNac,$domicilio,$telefono,$compañia);
      $bomberoDAO->ingresarBombero($bombero);
      $id_bombero = $bomberoDAO->getID($run);
      $info = new InfoPersonal($familiarContacto,$telefonoContacto,$maquinista,$destino,$id_bombero,$especialidad,$cargo,$curso,$prevision,$gurpoSanguineo);
      $infoDAO = new InfoPersonalDAO();
      $infoDAO->insertar($info);
    }

  }
  else{
    header("Location:Home.php");
  }


 ?>
</div>
