
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<?php

  $host =  $_SERVER["REQUEST_URI"];

  if($host=="/SICC/Ingreso.php"){
    echo'
    <div class="contenedorMenu">
        <input type="submit" value="Ingreso Bombero" class="buttonS" onclick=location.href="Ingreso.php"  />
        <br><br><br><br>
        <input type="submit" value="Central de Alarmas" class="buttonM"  onclick=location.href="Central.php" />
        <br><br><br><br>
        <input type="submit" value="Cuartel Primera" class="buttonM"  onclick=location.href="Primera.php" />
        <br><br><br><br>
        <input type="submit" value="Cuartel Segunda" class="buttonM" onclick=location.href="Segunda.php" />
        <br><br><br><br>
        <input type="submit" value="Cuartel Tercera" class="buttonM" onclick=location.href="Tercera.php" />
    </div>
    ';
  }elseif($host=="/SICC/Central.php" || $host=="/SICC/Listado.php" || $host=="/SICC/Alerta.php"){
      echo'
      <div class="contenedorMenu">
          <input type="submit" value="Ingreso Bombero" class="buttonM" onclick=location.href="Ingreso.php"  />
          <br><br><br><br>
          <input type="submit" value="Central de Alarmas" class="buttonS"  onclick=location.href="Central.php" />
          <br><br><br><br>
          <input type="submit" value="Cuartel Primera" class="buttonM"  onclick=location.href="Primera.php" />
          <br><br><br><br>
          <input type="submit" value="Cuartel Segunda" class="buttonM" onclick=location.href="Segunda.php" />
          <br><br><br><br>
          <input type="submit" value="Cuartel Tercera" class="buttonM" onclick=location.href="Tercera.php" />
      </div>
      ';
    }elseif($host=="/SICC/Primera.php"){
        echo'
        <div class="contenedorMenu">
            <input type="submit" value="Ingreso Bombero" class="buttonM" onclick=location.href="Ingreso.php"  />
            <br><br><br><br>
            <input type="submit" value="Central de Alarmas" class="buttonM"  onclick=location.href="Central.php" />
            <br><br><br><br>
            <input type="submit" value="Cuartel Primera" class="buttonS"  onclick=location.href="Primera.php" />
            <br><br><br><br>
            <input type="submit" value="Cuartel Segunda" class="buttonM" onclick=location.href="Segunda.php" />
            <br><br><br><br>
            <input type="submit" value="Cuartel Tercera" class="buttonM" onclick=location.href="Tercera.php" />
        </div>
        ';
      }elseif($host=="/SICC/Segunda.php"){
          echo'
          <div class="contenedorMenu">
              <input type="submit" value="Ingreso Bombero" class="buttonM" onclick=location.href="Ingreso.php"  />
              <br><br><br><br>
              <input type="submit" value="Central de Alarmas" class="buttonM"  onclick=location.href="Central.php" />
              <br><br><br><br>
              <input type="submit" value="Cuartel Primera" class="buttonM"  onclick=location.href="Primera.php" />
              <br><br><br><br>
              <input type="submit" value="Cuartel Segunda" class="buttonS" onclick=location.href="Segunda.php" />
              <br><br><br><br>
              <input type="submit" value="Cuartel Tercera" class="buttonM" onclick=location.href="Tercera.php" />
          </div>
          ';
        }elseif($host=="/SICC/Tercera.php"){
            echo'
            <div class="contenedorMenu">
                <input type="submit" value="Ingreso Bombero" class="buttonM" onclick=location.href="Ingreso.php"  />
                <br><br><br><br>
                <input type="submit" value="Central de Alarmas" class="buttonM"  onclick=location.href="Central.php" />
                <br><br><br><br>
                <input type="submit" value="Cuartel Primera" class="buttonM"  onclick=location.href="Primera.php" />
                <br><br><br><br>
                <input type="submit" value="Cuartel Segunda" class="buttonM" onclick=location.href="Segunda.php" />
                <br><br><br><br>
                <input type="submit" value="Cuartel Tercera" class="buttonS" onclick=location.href="Tercera.php" />
            </div>
            ';
          }else{
              echo'
              <div class="contenedorMenu">
                  <input type="submit" value="Ingreso Bombero" class="buttonM" onclick=location.href="Ingreso.php"  />
                  <br><br><br><br>
                  <input type="submit" value="Central de Alarmas" class="buttonM"  onclick=location.href="Central.php" />
                  <br><br><br><br>
                  <input type="submit" value="Cuartel Primera" class="buttonM"  onclick=location.href="Primera.php" />
                  <br><br><br><br>
                  <input type="submit" value="Cuartel Segunda" class="buttonM" onclick=location.href="Segunda.php" />
                  <br><br><br><br>
                  <input type="submit" value="Cuartel Tercera" class="buttonM" onclick=location.href="Tercera.php" />
              </div>
              ';
            }





 ?>
