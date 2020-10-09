<?php
  require_once 'conexion.php';
  include '../Clases/InfoPersonal.php';


  class InfoPersonalDAO{

    function __construct(){}


    function insertar($infoPersonal){
            $db = conectar();

            $familiarContacto = $infoPersonal->__get("familiarContacto");
            $telefonoContacto= $infoPersonal->__get("telefonoContacto");
            $maquinista= $infoPersonal->__get("maquinista");
            $fotografia= $infoPersonal->__get("foto");
            $id_bombero= $infoPersonal->__get("id_bombero");
            $id_especialidad= $infoPersonal->__get("id_especialidad");
            $id_cargo= $infoPersonal->__get("id_cargo");
            $id_curso= $infoPersonal->__get("id_curso");
            $id_salud= $infoPersonal->__get("id_salud");
            $id_grupo_sanguineo= $infoPersonal->__get("id_grupo_sanguineo");
        $consulta = "
              INSERT INTO tbl_info_personal(familiar_contacto,tel_contacto,maquinista,fotografia,id_bombero,id_especialidad,id_cargo,id_cursos,id_salud,id_grupo_sanguineo)
              VALUES('".$familiarContacto."','".$telefonoContacto."','".$maquinista."','".$fotografia."','".$id_bombero."','".$id_especialidad."','".$id_cargo."','".$id_curso."','".$id_salud."','".$id_grupo_sanguineo."')
             ";



            try {
              $stmt = $db->prepare($consulta);

              if($stmt->execute()){
                    return 1;

              }else{
                        echo   ' <script languaje="javascript">alert("No se pudo Ingresar");</script>  ' ;
                        return 2;
              }
            } catch (PDOException $e) {
              echo   "ERROR".$e;

            }

    }


    function modificarInfo($infoPersonal){
      $familiarContacto = $infoPersonal->__get("familiarContacto");
      $telefonoContacto= $infoPersonal->__get("telefonoContacto");
      $maquinista= $infoPersonal->__get("maquinista");
      $fotografia= $infoPersonal->__get("foto");
      $id_bombero= $infoPersonal->__get("id_bombero");
      $id_especialidad= $infoPersonal->__get("id_especialidad");
      $id_cargo= $infoPersonal->__get("id_cargo");
      $id_curso= $infoPersonal->__get("id_curso");
      $id_salud= $infoPersonal->__get("id_salud");
      $id_grupo_sanguineo= $infoPersonal->__get("id_grupo_sanguineo");
      $db = conectar();
      try{
      $consulta = "
      UPDATE tbl_info_personal ip
      SET ip.familiar_contacto = '".$familiarContacto."', ip.tel_contacto = '".$telefonoContacto."', ip.maquinista='".$maquinista."', ip.fotografia='".$fotografia."',ip.id_especialidad = '".$id_especialidad."',ip.id_cargo='".$id_cargo."',ip.id_cursos='".$id_curso."',
      ip.id_salud='".$id_salud."',ip.id_grupo_sanguineo='".$id_grupo_sanguineo."'
      WHERE id_bombero = '".$id_bombero."'
            ";
            $stm = $db->prepare($consulta); //Prepara la $consulta
            if($stm->execute()){

                        return 1;
            }else{

               return 2;
            }
          }catch(PDOException $e){
            echo   ' <script languaje="javascript">alert("ERROR");</script>  ' ;

          }


      }



  }
  //
  // $teset = new InfoPersonalDAO();
  //
  // $bombero = new InfoPersonal("asúl","44545","si","foto","1","1","1","2","1","1");
  //
  // $teset->insertar($bombero);
  //
  //
  // echo "<br>PRUEBA FINAL<br>";
  //




 ?>
