<?php

   include 'conexao.php';

     if ($_SERVER["REQUEST_METHOD"] == "POST")  {
          $nomeSetor = $_POST ['nomeSetor'];
          $generoSetor = $_POST ['generoSetor'];
 
      $sql = "INSERT INTO setor (nomeSetor, generoSetor)
              VALUES ('$nomeSetor','$generoSetor')";
 
      if ($mysqli-> query($sql) ) {
          echo 'setor cadastrado';
      } else {
           echo 'Erro' . $mysqli->erro;
      }

 }

?>

