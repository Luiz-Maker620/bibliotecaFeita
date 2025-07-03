<?php

   include 'conexao.php'

     if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $nome = $_POST ['nome'];
      $email = $_POST ['email'];
      $idade = $_POST ['idade'];
 
      $sql = "INSERT INTO bibliotecario (nome, email, idade)
              VALUES ('$nome','$email','$idade')";
 
      if ($mysqli-> query($sql) ) {
          echo 'pessoa cadastrada';
      } else {
           echo 'erro' . $mysqli->erro;
      }

 }

?>