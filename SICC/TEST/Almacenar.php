<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>HOSL</h2>

    <?php

    $nom = $_REQUEST['nombre'];
    $foto = $_FILES["foto"]["name"];
    $ruta = $_FILES["foto"]["tmp_name"];
    $destino = "Fotos/".$nom.".jpg";
    copy($ruta,$destino);

echo "LISTO";


     ?>
  </body>
</html>
