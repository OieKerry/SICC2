<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistemas de Control de Cuarteles - Cuerpo bomberos de Machalí</title>
</head>
<body>

	<?php require("Top.php") ?>


<?php
    require("Menu.php");
            require "Datos/BomberoDAO.php";

		$bombero = new BomberoDAO();


		?>

    <div class="divFondo">


				<h2 align="center">Capacidad de Recursos de Bomberos</h2>
				<fieldset class="divC1">
					<legend>Primera Compañia</legend>
					<?php

					$bombero->listaCompania("1");

					 ?>
				</fieldset>
				<fieldset class="divC2">
					<legend>Tercera Compañia</legend>
					<?php

				$bombero->listaCompania("3");

					 ?>
				</fieldset>
				<fieldset class="divC3">
					<legend>Segunda Compañia</legend>
					<?php
				$bombero->listaCompania("2");

					 ?>
				</fieldset>


				<h4>Bomberos Disponibles : 10 bomberos disponibles</h4>
				<button class="btnForm"  onclick="location.href='Listado.php'" >Ver Todo</button>
				<button class="btnForm"  onclick="location.href='Alerta.php'" >Tonos Cuartel</button>



    </div>








</body>
</html>
