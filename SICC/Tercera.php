<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" type="text/css" href="style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <h1 style="text-align:center"><img src="Imagenes\dacc0d9c-5f4f-480b-a283-83207c747bbd 2.jpg" class="logo" alt="">   Sistemas de Control de Cuarteles - Cuerpo bomberos de Machali</h1>

  <body>



<div class="contenedorTablas">

    <?php

    require("Menu.php");
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


          echo "<table class='tablaUsuarios'>
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
