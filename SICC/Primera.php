<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php require("Top.php");
                        require "Datos/BomberoDAO.php";
                        $bombero = new BomberoDAO(); ?>


    <body>



      <?php
          require("Menu.php"); ?>

            <div class="divFondoTablas">
                <h3 style="text:center">Bomberos Segunda Compañía  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Disponibles : <?php echo $bombero->totalBomberosCompania("1")  ?> Bomberos</h3>
          <?php


                      $bombero->listarBomberos("1");



      ?>

    </div>

  </body>
</html>
