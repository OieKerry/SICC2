<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <h1 style="text-align:center"><img src="Imagenes\dacc0d9c-5f4f-480b-a283-83207c747bbd 2.jpg" class="logo" alt="">   Sistemas de Control de Cuarteles - Cuerpo bomberos de Machali</h1>

<?php
    require("Menu.php"); ?>

    <div class="div1">

        <form method="get" action="respuesta.php" class="form1">
          <h2 style="text-align:center"> Primera compañia </h2>
          <br/ >
          <input name="B-1" type="checkbox" /> Unidad B-1:
          <br/ >
          <input name="Q-1" type="checkbox" /> Unidad Q-1:
          <br/ >
          <input name="R-1" type="checkbox" /> Unidad R-1:
          <br/ >
          <input name="BX-1" type="checkbox" /> Unidad BX-1:
          <br/ >
          <input name="X-1" type="checkbox" /> Unidad X-1:
          <input class="btn" type="submit" value="Tonos Cuartel">
        </form>



        <form method="get" action="respuesta.php" class="form3">
          <h2 style="text-align:center"> Tercera compañia </h2>
          <br/ >
          <input name="B-3" type="checkbox" /> Unidad B-3:
          <input class="btn" type="submit" value="Tonos Cuartel">
        </form>

        <form method="get" action="respuesta.php" class="form2">
          <h2 style="text-align:center"> Segunda compañia </h2>
          <br/ >
          <input name="B-2" type="checkbox" /> Unidad B-2:
          <br/ >
          <input name="BX-2" type="checkbox" /> Unidad BX-2:
          <br/ >
          <input name="R-2" type="checkbox" /> Unidad R-2:
          <input class="btn" type="submit" value="Tonos Cuartel">
        </form>
      <div style="text-align: center;">
          <button style="position: absolute;top: 100%;">Salir</button>
      </div>

    </div>





  </body>
</html>
