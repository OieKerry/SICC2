<html>
<title>Modo de PRUEBA</title>


<?php require("Top.php") ?>




<?php

    require("Menu.php");


     ?>



    <div class="divFondo">
<?php

    require ("Datos/BomberoDAO.php");

    $b1 = new BomberoDAO();
    $b1->test();


  ?>



      <br><br><br><br><br>

    </div>

        </form>


</html>
