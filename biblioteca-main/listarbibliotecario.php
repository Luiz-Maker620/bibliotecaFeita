<?php
    include 'conexao.php'

    $sql = "SELECT * FROM bibliotecario"
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>idbibliotecario</th></tr>
        <tr><th>nomeBibliotecario</th></tr>
        <tr><th>email</th></tr>
        <tr><th>idcliente</th></tr>";
        
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idbibliotecario'] . "</td>";
            echo "<td>" . $row['nomebibliotecario'] . "</td>";
            echo "<td>" . $row['generobibliotecario'] . "</td>";
            echo "<td>" . $row['idcliente'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
       } else {
            echo "<p>Nenhum setor cadastrado</p>";
            }    

?>








