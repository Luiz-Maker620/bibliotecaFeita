<?php

   include 'conexao.php';

     if ($_SERVER["REQUEST_METHOD"] == "POST")  {
          $nomeBibliotecario = $_POST ['nomebibliotecario'];
          $email = $_POST ['email'];
 
      $sql = "INSERT INTO bibliotecario (nomeBibliotecario, email)
                VALUES ('$nomeBibliotecario', '$email')";

      if ($mysqli->query($sql) ) {
           echo "pessoa cadastrada";
      } else {
           echo "Erro: " . $mysqli->error;
      }

 }

?>

