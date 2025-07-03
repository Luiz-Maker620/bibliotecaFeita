<?php

   include 'conexao.php'

    if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $nomeFuncionario = $_POST ['nomeFuncionario'];
      $telefone = $_POST ['telefone'];
      $idcliente = $_POST ['idcliente'];
 
      $sql = "INSERT INTO funcionario (nomeFuncionario, telefone, cpf)
              VALUES ('$nomeFuncionario','$telefone','$idcliente')";
 
      if ($mysqli-> query($sql) ) {
          echo 'funcionario cadastrado';
      } else {
            echo 'erro' . $mysqli->erro;
      }

 }

?>
