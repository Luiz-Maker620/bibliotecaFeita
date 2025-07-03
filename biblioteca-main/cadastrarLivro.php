<?php
   
   include 'conexao.php';

     if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $nomeLivro = $_POST ['nomeLivro'];
      $autor = $_POST ['autor'];
 
      $sql = "INSERT INTO livro (nomeLivro, autor)
              VALUES ('$nomeLivro','$autor')";
 
      if ($mysqli-> query($sql) ) {
          echo 'Livro cadastrado';
      } else {
           echo 'erro' . $mysqli->erro;
      }

 }

?>
