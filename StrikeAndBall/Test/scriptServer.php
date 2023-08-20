<?php
  include("../config.php");

  $cnn = "mysql:host=$host;dbname=$db_name";
  try
  {
      $db = new PDO($cnn , "$db_user", "$db_psw");
      $sql = "SELECT * FROM Utenti";
      $table = $db->query($sql);
      $re=$table->fetchAll(PDO::FETCH_ASSOC);
      //foreach ($re as $row)
      //{
        //  echo ($row['IDUtente']. " " .$row['Cognome'] . " " . $row['Nome']." " . $row['DataNascita']);
          //echo "<br>";
        //$result = $table->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($result);
      //}
      echo json_encode($re);

  } catch (PDOException $e) {
      echo 'Errore: ' . $e->getMessage();
  }

?>
