<?php

function conectar(){
  $db = new PDO('mysql:host=localhost;dbname=db_sicc2;charset=utf8', 'root', 'root');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  return $db;
}

          //
          // try {
          // 	$stmt = $db->prepare("SELECT * FROM tbl_compania ");
          // 	//$stmt->execute( array(':mycountry' => 'USA') );
          // 	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
          // } catch(PDOException $ex) {
          //     echo "Ocurrió un error<br>";
          //     echo $ex->getMessage();
          //     exit;
          // }
          //
          // echo '<ul>';
          // foreach ($rows as $row) {
          // 	echo '<li>'.$row['id_compania'].' : ('.$row['nombre'].') '.$row['ubicacion'].'</li>';
          // }
          // echo '</ul>';



 ?>
