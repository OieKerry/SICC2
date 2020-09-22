<html>
<title>INGRESO</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <h1 style="text-align:center"><img src="Imagenes\dacc0d9c-5f4f-480b-a283-83207c747bbd 2.jpg" class="logo" alt="">   Sistemas de Control de Cuarteles - Cuerpo bomberos de Machali</h1>


  <h2 style="text-align:center">Ingreso de Nuevo Bombero</h2>
<?php

    require("Menu.php"); ?>


        <form class="formulario" action="almacenar.php" method="post">

            <div class="contPersonal">
                <h4>Datos Personales</h4>
            Nombre : <input type="text" name="nombre"  >
            <br><br>
            Apellidos : <input type="text" name="apellidos" >
            <br><br>
            RUN :        <input type="text" name="run" >
            <br><br>
            Fecha Nacimiento : <input type="date" name="fechaNac" >
            <br><br>
            Domicilio : <input type="text" name="domicilio" >
            <br><br>
            Teléfono : <input type="text" name="telefono" >
            <br><br>

            <br><br>
            Isapre : <input type="text" name="isapre">
            <br><br>
            Grupo Sanguineo : <input type="text" name="grupoSanuineo" >
            <br><br>
            Familiar de Contacto : <input type="text" name="familiarContacto">
            <br><br>            Telefono de Contacto : <input type="text" name="telefonoContacto" >
                      <br><br>
            </div>

            <div class="contBombero">
                <h4>Datos Bombero</h4>

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
            <br><br>

            Fotografía : <input type="file" name="archivoImagen">

            <br><br><br><br><br><br><br><br><br><br><br>
              <div class="contBotones">
                  <input type="submit" class="button" name="btnIngresar" value="Ingresar"> <input type="submit" class="button" name="btnVolver" value="Volver"> <input type="submit" class="button" name="btnLimpiar" value="Limpiar">

              </div>
<br>
            </div>



        </form>


</html>
