<?php
    include 'conexao.php';

    $sql = "SELECT * FROM setor";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>idsetor</th></tr>
        <tr><th>nomeSetor</th></tr>
        <tr><th>generoSetor</th></tr>
        <tr><th>idlivro</th></tr>";
        
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idsetor'] . "</td>";
            echo "<td>" . $row['nomeSetor'] . "</td>";
            echo "<td>" . $row['generoSetor'] . "</td>";
            echo "<td>" . $row['idlivro'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
       } else {
            echo "<p>Nenhum setor cadastrado</p>";
            }    


?>