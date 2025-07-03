<?php
    include 'conexao.php'

    $sql = "SELECT * FROM funcionario"
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>idfuncionario</th></tr>
        <tr><th>nomeFuncionario</th></tr>
        <tr><th>telefone</th></tr>
        <tr><th>idcliente</th></tr>";
        
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idfuncionario'] . "</td>";
            echo "<td>" . $row['nomeFuncionario'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td>" . $row['idcliente'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
       } else {
            echo "<p>Nenhum funcionario cadastrado</p>";
            }    


?>