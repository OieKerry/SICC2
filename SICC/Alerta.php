<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>

    <?php require("Top.php") ?>


  <?php
      require("Menu.php"); ?>

      <div class="divFondo">
          <input type="button" onclick="window.location.href='Central.php'" class="btnForm" value="volver">
        				<h2 align="center">Tonos de Alerta a Cuarteles</h2>
        <form method="post" action="respuesta.php" class="form1">
          <h2 style="text-align:center"> Primera Compañía </h2>
          <br/ >
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad B-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="B-1" type="checkbox" class="largerCheckbox" />
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad Q-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="Q-1" type="checkbox"  class="largerCheckbox"/>
        </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" > Unidad R-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
              <input name="R-1" type="checkbox"  class="largerCheckbox"/>
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad BX-1:&nbsp;</label>
              <input name="BX-1" type="checkbox"  class="largerCheckbox"/>
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" > Unidad X-1:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input name="X-1" type="checkbox"  class="largerCheckbox"/>
          </div>

          <input class="buttonTC" name="tc1" type="submit" value="Tonos Cuartel">
        </form>



        <form method="post" action="respuesta.php" class="form3">
          <h2 style="text-align:center"> Tercera Compañía </h2>
          <br/ >
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad B-3:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="B-3"  type="checkbox" class="largerCheckbox" />
          </div><br>


          <br><br><br><br><br><br><br><br><br>
          <input class="buttonTC"name="tc3" type="submit" value="Tonos Cuartel">
        </form>

        <form method="post" action="respuesta.php" class="form2">
          <h2 style="text-align:center"> Segunda Compañía </h2>
          <br/ >
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad B-2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="B-2" type="checkbox" class="largerCheckbox" />
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad BX-2:&nbsp;</label>
                <input name="BX-2" type="checkbox" class="largerCheckbox" />
          </div><br>
          <div class="input-info">
              <label class="info-label" class="txtAlerta" >Unidad R-2:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="R-2" type="checkbox" class="largerCheckbox" />
          </div><br><br><br><br><br>

          <input class="buttonTC" name="tc2" type="submit" value="Tonos Cuartel">
        </form>


    </div>





  </body>
</html>
