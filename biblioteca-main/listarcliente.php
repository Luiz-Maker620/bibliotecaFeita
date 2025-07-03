<?php
    include 'conexao.php'

    $sql = "SELECT * FROM cliente"
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>idcliente</th></tr>
        <tr><th>nomeCliente</th></tr>
        <tr><th>telefone</th></tr>
        <tr><th>cpf</th></tr>";
        
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idcliente'] . "</td>";
            echo "<td>" . $row['nomeCliente'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td>" . $row['cpf'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
       } else {
            echo "<p>Nenhum cliente cadastrado</p>";
            }    

?>