<?php
    include 'conexao.php'

    $sql = "SELECT * FROM livro"
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>idlivro</th></tr>
        <tr><th>nomeLivro</th></tr>
        <tr><th>autor</th></tr>
        <tr><th>idcliente</th></tr>";
        
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idlivro'] . "</td>";
            echo "<td>" . $row['nomeLivro'] . "</td>";
            echo "<td>" . $row['autor'] . "</td>";
            echo "<td>" . $row['idcliente'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
       } else {
            echo "<p>Nenhum livro cadastrado</p>";
            }    


?>