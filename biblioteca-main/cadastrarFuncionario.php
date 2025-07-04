<?php

   include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $nomeFuncionario = $_POST ['nome'];
      $telefone = $_POST ['telefone'];
 
      $sql = "INSERT INTO funcionario (nomeFuncionario, telefone)
              VALUES ('$nomeFuncionario', '$telefone')";
 
      if ($mysqli-> query($sql) ) {
          echo 'funcionario cadastrado';
      } else {
            echo 'erro' . $mysqli->erro;
      }

 }

?>
