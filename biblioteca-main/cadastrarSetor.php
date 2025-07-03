<?php

   include 'conexao.php'

     if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $nomeSetor = $_POST ['nomeSetor'];
      $generoSetor = $_POST ['generoSetor'];
      $idlivro = $_POST ['idlivro'];
 
      $sql = "INSERT INTO cliente (nomeCliente, setor, idlivro)
              VALUES ('$nomeLivro','$setor','$idlivro')";
 
      if ($mysqli-> query($sql) ) {
          echo 'setor cadastrado';
      } else {
           echo 'erro' . $mysqli->erro;
      }

 }

?>