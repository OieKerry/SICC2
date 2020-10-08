<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

            <?php
              require("Top.php");
              require("Menu.php");
              include "Datos/ListasDAO.php";
              $listas = new ListasDAO();
              include "Datos/BomberoDAO.php";
              $bomberoDAO = new BomberoDAO();
              include "Clases/Bombero.php";

               ?>
  </head>
  <body>

                    <?php
                      $rut = $_GET["RUN"];
                      $bomberoDAO->getBombero($rut);

                    ?>




  </body>
</html>
