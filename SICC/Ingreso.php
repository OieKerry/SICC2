<html>
<title>INGRESO</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php require("Top.php") ?>


<?php

    require("Menu.php"); ?>

        <form class="divFondo" action="almacenar.php" method="post" autocomplete="off">
              <h2 align="center">Ingreso de Nuevo Bombero</h2>
            <fieldset class="contPersonal2">
                <legend>Datos Personales</Legend>

                  <div class="input-info">
                      <label class="info-label">Nombre:</label>
                      <input type="text" name="nombre">
                  </div>
                  <div class="input-info">
                      <label class="info-label">Apellidos:</label>
                      <input type="text" name="apellidos">
                  </div>
                  <div class="input-info">
                      <label class="info-label">R.U.N.:</label>
                      <input type="text" name="r.u.n.">
                  </div>
                  <div class="input-info">
                      <label class="info-label">Fecha de Nacimiento:</label>
                      <input type="date" name="fechanac">
                  </div>
                  <div class="input-info">
                      <label class="info-label">Domicilio:</label>
                      <input type="text" name="domicilio">
                  </div>
                  <div class="input-info">
                      <label class="info-label">Telefono:</label>
                      <input type="text" name="telefono">
                  </div>



            <br>
            <br><br>

            <div class="input-info">
                <label class="info-label">Isapre:</label>
                <input type="text" name="isapre">

            </div>

            <div class="input-info">
                <label class="info-label">Grupo Sanguineo:</label>
                <input type="text" name="grupoSanuineo" >
            </div>

            <div class="input-info">
                <label class="info-label">Familiar de Contacto:</label>
                <input type="text"name="familiarContacto">
            </div>

            <div class="input-info">
                <label class="info-label">Telefono de Contacto:</label>
                <input type="text"name="telefonoContacto">
            </div>

          </fieldset>

            <fieldset class="contPersonal3">
                <legend>Datos Bombero</legend>

                Compañia : <select name="Compañia">
                             <option selected value="0"> Elige una opción </option>
                             <option value="1">Primera Compañia</option>
                             <option value="2">Segunda Compañia</option>
                             <option value="3">Tercera Compañia</option>
                            </select>
              <br><br>
                Cargo : <select name="cargo">
                             <option selected value="0"> Elige una opción </option>
                             <option value="1">Primera Compañia</option>
                             <option value="2">Segunda Compañia</option>
                             <option value="3">Tercera Compañia</option>
                            </select>
            <br><br>
                Especialidad : <select name="especialidad">
                             <option selected value="0"> Elige una opción </option>
                             <option value="1">Primera Compañia</option>
                             <option value="2">Segunda Compañia</option>
                             <option value="3">Tercera Compañia</option>
                            </select>
                          <br><br>    Maquinista : <select name="maquinista">
                             <option selected value="0"> Elige una opción </option>
                             <option value="1">Primera Compañia</option>
                             <option value="2">Segunda Compañia</option>
                             <option value="3">Tercera Compañia</option>
                            </select>
            <br><br><br>

            Fotografía  <input type="file" name="archivoImagen">

          <br><br><br><br><br><br><br><br><br><br>
              <div class="contBotones">
                  <input type="submit" class="buttonI" name="btnIngresar" value="Ingresar"> <input type="submit" class="buttonI" name="btnVolver" value="Volver"> <input type="submit" class="buttonI" name="btnLimpiar" value="Limpiar">

              </div>
<br>
</fieldset>



        </form>


</html>
