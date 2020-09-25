<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php require("Top.php") ?>


  <body>

<?php
    require("Menu.php"); ?>

    <div class="divFondoTablas">
              <h3 style="text:center">Bomberos Tercera Compañía  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     Disponibles : 10 Bomberos</h3>
    <?php

    $datosBomberos= array("Bombero1"=>array("Nombre"=>"Denis",
                                       "Apellido"=>"Fuentes",
                                       "Bombero"=>"Profesional",
                                       "Tipo"=>"Agua-Rescate-Escala",
                                       "Maquinista"=>"Maquinista"),


                          "Bombero2"=>array("Nombre"=>"Denis",
                                                             "Apellido"=>"Fuentes",
                                                             "Bombero"=>"Profesional",
                                                             "Tipo"=>"Agua-Rescate-Escala",
                                                             "Maquinista"=>"Maquinista"),


                          "Bombero3"=>array("Nombre"=>"Denis",
                                                             "Apellido"=>"Fuentes",
                                                             "Bombero"=>"Profesional",
                                                             "Tipo"=>"Agua-Rescate-Escala",
                                                             "Maquinista"=>"Maquinista"),
                                        "Bombero4"=>array("Nombre"=>"Denis",
                                                                           "Apellido"=>"Fuentes",
                                                                           "Bombero"=>"Profesional",
                                                                           "Tipo"=>"Agua-Rescate-Escala",
                                                                           "Maquinista"=>"Maquinista"),
                                                      "Bombero5"=>array("Nombre"=>"Denis",
                                                                                         "Apellido"=>"Fuentes",
                                                                                         "Bombero"=>"Profesional",
                                                                                         "Tipo"=>"Agua-Rescate-Escala",
                                                                                         "Maquinista"=>"Maquinista"),

                                                                     "Bombero6"=>array("Nombre"=>"Denis",
                                                                                                        "Apellido"=>"Fuentes",
                                                                                                        "Bombero"=>"Profesional",
                                                                                                        "Tipo"=>"Agua-Rescate-Escala",
                                                                                                        "Maquinista"=>"Maquinista"),
                                                                                   "Bombero7"=>array("Nombre"=>"Denis",
                                                                                                                      "Apellido"=>"Fuentes",
                                                                                                                      "Bombero"=>"Profesional",
                                                                                                                      "Tipo"=>"Agua-Rescate-Escala",
                                                                                                                      "Maquinista"=>"Maquinista"),
                                                                                                 "Bombero8"=>array("Nombre"=>"Denis",
                                                                                                                                    "Apellido"=>"Fuentes",
                                                                                                                                    "Bombero"=>"Profesional",
                                                                                                                                    "Tipo"=>"Agua-Rescate-Escala",
                                                                                                                                    "Maquinista"=>"Maquinista"),
                                                                                                               "Bombero9"=>array("Nombre"=>"Denis",
                                                                                                                                                  "Apellido"=>"Fuentes",
                                                                                                                                                  "Bombero"=>"Profesional",
                                                                                                                                                  "Tipo"=>"Agua-Rescate-Escala",
                                                                                                                                                  "Maquinista"=>"Maquinista"),
                                                                                                                             "Bombero10"=>array("Nombre"=>"Denis",
                                                                                                                                                                "Apellido"=>"Fuentes",
                                                                                                                                                                "Bombero"=>"Profesional",
                                                                                                                                                                "Tipo"=>"Agua-Rescate-Escala",
                                                                                                                                                                "Maquinista"=>"Maquinista")


  );
    for($i = 0;$i<count($datosBomberos);$i++){
      $suma=1+$i;
      $variable="Bombero".$suma;
          echo "<table class='tablaUsuarioss'>
                <tr>
                  <td> <img width='100%'src='Imagenes/userBombero.png'></td>
                </tr>
                <tr>

                  <td>".$datosBomberos[$variable]["Nombre"]." ".$datosBomberos[$variable]["Apellido"]."</td>
                </tr>

                <tr>
                  <td>Bombero ".$datosBomberos[$variable]["Bombero"]." </td>
                </tr>
                <tr>
                  <td>Tipo: ".$datosBomberos[$variable]["Tipo"]."</td>
                </tr>
                <tr>
                  <td>Maquinista</td>
                </tr>
              </table>";

    }
    ?>

    </div>

  </body>
</html>
