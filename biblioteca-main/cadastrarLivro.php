<?php
   
   include 'conexao.php'

     if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $nomeLivro = $_POST ['nomeLivro'];
      $autor = $_POST ['autor'];
      $idcliente = $_POST ['idcliente'];
 
      $sql = "INSERT INTO livro (nomeCliente, autor, idcliente)
              VALUES ('$nomeLivro','$autor','$idcliente')";
 
      if ($mysqli-> query($sql) ) {
          echo 'Livro cadastrado';
      } else {
           echo 'erro' . $mysqli->erro;
      }

 }

?>
