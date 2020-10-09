<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

        <?php require("Top.php");

          require("Menu.php");
          require "Datos/BomberoDAO.php";

      		$bombero = new BomberoDAO();

           ?>

          <div class="divFondo" id="divListado">


          <input type="button" onclick="window.location.href='Central.php'" class="btnForm" value="volver">
            <h2 align="center">Listado de Bomberos </h2>
            				<fieldset class="divListado">
            					<legend>Primera Compañia</legend>
            					<?php
                			$bombero->listaBomberosCompania("1");
            					 ?>
            				</fieldset>
            				<fieldset class="divListado">
            					<legend>Segunda Compañia</legend>
            					<?php

        			$bombero->listaBomberosCompania("2");
            					 ?>
            				</fieldset>
            				<fieldset class="divListado">
            					<legend>Tercera Compañia</legend>
            					<?php
        			$bombero->listaBomberosCompania("3");
            					 ?>
            				</fieldset>

  </body>
</html>
