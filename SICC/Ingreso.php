<html>
<title>INGRESO</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php require("Top.php");
          require("Menu.php");
          require ("Datos/ListasDAO.php");
            $listas = new ListasDAO(); ?>

        <form class="divFondo" action="almacenar.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <h2 align="center">Ingreso de Nuevo Bombero</h2>
            <fieldset class="contPersonal2">
                <legend>Datos Personales</Legend>

                  <div class="input-info">
                      <label class="info-label">Nombre:</label>
                      <input type="text" pattern="[^'\x22]+" name="nombre"  required>
                  </div>
                  <div class="input-info">
                      <label class="info-label">Apellidos:</label>
                      <input type="text" pattern="[^'\x22]+" name="apellidos"  required>
                  </div>
                  <div class="input-info">
                      <label class="info-label" >R.U.N.:</label>
                      <input type="text" pattern="\d{3,8}-[\d|kK]{1}" title="Debe ser un Rut válido" name="rut" required>
                  </div>
                  <div class="input-info">
                      <label class="info-label">Fecha de Nacimiento:</label>
                      <input type="date"  pattern="[^'\x22]+"name="fechanac"  required>
                  </div>
                  <div class="input-info">
                      <label class="info-label">Domicilio:</label>
                      <input type="text" pattern="[^'\x22]+" name="domicilio"  required>
                  </div>
                  <div class="input-info">
                      <label class="info-label">Telefono:</label>
                      <input type="text" pattern="[^'\x22]+" name="telefono" pattern="[0-9]+"  required>
                  </div>


            <div class="input-info">
                <label class="info-label">Prevision:</label>
                <select name="prevision" required>
                         <?php

                             $listas->listarPrevision("0");
                           ?>
                        </select>
                </div>

              <div class="input-info">
                  <label class="info-label">Grupo Sanguineo:</label>
                      <select name="grupoSanguineo" required>
                               <?php

                                   $listas->listarGS("0");
                                 ?>
                              </select>
              </div>


            <div class="input-info">
                <label class="info-label">Familiar de Contacto:</label>
                <input type="text" pattern="[^'\x22]+" name="familiarContacto"  required>
            </div>

            <div class="input-info">
                <label class="info-label">Telefono de Contacto:</label>
                <input type="text"name="telefonoContacto" pattern="[0-9]{7,10}"  required>
            </div>

          </fieldset>






            <fieldset class="contPersonal2">
                <legend>Datos Bombero</legend>


                <div class="input-info">
                    <label class="info-label">Compañía:</label>
                    <select name="Compañia" required>
                                 <?php

                                     $listas->listarComp("0");
                                   ?>
                              </select>
                </div>
                <div class="input-info">
                    <label class="info-label">Cargo:</label>
                    <select name="cargo" size="0" required>
                             <?php

                                 $listas->listarCargos("0");
                               ?>
                            </select>

          </div>
          <div class="input-info">
              <label class="info-label">Especialidad:</label>
              <select name="especialidad" required>
                             <?php

                                 $listas->listarEspecialidades("0");
                               ?>
                            </select>
                          </div>
            <div class="input-info">
                      <label class="info-label">Curso</label>
                      <select name="curso" required>
                     <?php
                         $listas->listarCursos("0");
                       ?>
                  </select>
                </div>

                <div class="input-info">
                          <label class="info-label">Maquinista</label>
                          <p>Si</p>
                          <input type="radio" name="maquinista" value="si">
                          <p>No</p>
                      <input type="radio" name="maquinista" value="no">
                    </div>
                    Fotografía  <input type="file" name="archivoImagen" id="archivoInput" accept="image/x-png,image/jpeg" onchange="return validaEXT()">
            <div id="visorArchivo">

            </div>
          <br>
              <div class="contBotones">
                  <input type="submit" class="buttonI" name="btnIngresar" value="Ingresar">
                   <input type="submit" class="buttonI"  onclick="window.location.href='Home.php'" name="btnVolver" value="Volver"> <input type="reset" class="buttonI" name="btnLimpiar" value="Limpiar">
              </div>

<br>
</fieldset>

<script type="text/javascript">
  function validaEXT(){
    var archivoInput = document.getElementById("archivoInput");
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.png|.jpg|.jpeg)$/i;
    if(!extPermitidas.exec(archivoRuta)){
      alert('Archivo no permitido, verifique que sea una imagen ');
      archivoInput.value="";
      return false;
    }else{
      if(archivoInput.files && archivoInput.files[0]){
        var visor = new FileReader();
        visor.onload=function(e){
          document.getElementById('visorArchivo').innerHTML=
          '<embed src="'+e.target.result+'" width="140" height="160">  ';
        };
        visor.readAsDataURL(archivoInput.files[0]);
      }
    }


  }
</script>


        </form>


</html>
