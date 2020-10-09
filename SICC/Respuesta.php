<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Respuesta</title>
  </head>
  <body>
    <?php require "Top.php"; require "Menu.php" ?>
    <div class="divFondo">          <input type="button" onclick="window.location.href='Alerta.php'" class="btnForm" value="volver">
      <h1>Enviando Alarma <br></h1>
<h2>
      <?php
      if(!isset($_POST["B-1"]) AND !isset($_POST["B-2"]) AND !isset($_POST["B-3"]) and !isset($_POST["Q-1"]) and !isset($_POST["R-1"]) and !isset($_POST["BX-1"]) and !isset($_POST["X-1"]) and !isset($_POST["BX-2"])
        && !isset($_POST["R-2"])){
        echo   ' <script languaje="javascript">alert("Debe seleccionar una alerta"); window.location.href="Alerta.php";</script> ' ;

      }


      if(isset($_POST["tc1"])){

        if(isset($_POST["B-1"])){
          echo "B-1 compañia 1<br>";
        }if(isset($_POST["Q-1"])){
        echo "Q-1 compañia 1<br>";
      }if(isset($_POST["R-1"])){
          echo "R-1 compañia 1<br>";
        }if(isset($_POST["BX-1"])){
        echo "BX-1 compañia 1<br>";
      }if(isset($_POST["X-1"])){
        echo "X-1 compañia 1<br>";
        }
    }      if(isset($_POST["tc2"])){

            if(isset($_POST["B-2"])){
              echo "B-2 compañia 2<br>";

              }if(isset($_POST["R-2"])){
                  echo "R-2 compañia 1<br>";
                }if(isset($_POST["BX-2"])){
                echo "BX-2 compañia 1<br>";
              }
        }      if(isset($_POST["tc3"])){

                if(isset($_POST["B-3"])){
                  echo "B-3 compañia 3<br>";
                }
                }

    ?>


</h2>

    </div>

  </body>
</html>
