<?php

   include 'conexao.php'

     if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $nomeCliente = $_POST ['nomeCliente'];
      $telefone = $_POST ['telefone'];
      $cpf = $_POST ['cpf'];
 
      $sql = "INSERT INTO cliente (nomeCliente, telefone, cpf)
              VALUES ('$nomeCliente','$telefone','$cpf')";
 
      if ($mysqli-> query($sql) ) {
          echo 'cliente cadastrado';
      } else {
           echo 'erro' . $mysqli->erro;
      }

 }

?>
