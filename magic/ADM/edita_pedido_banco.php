<?php

include("../conexao.php");

$cliente = $_POST["cliente"];
$servicos = $_POST["servicos"];
$valor = $_POST["valor"];
$id = $_GET["id"];

$sql = "UPDATE pedidos SET cliente='" . $cliente . "',servicos='" . $servicos . "',valor='" . $valor . "' WHERE id=" . $id;

if ($conn->query($sql) === TRUE) {
    //  echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
} //echo $sql;

if ($conn->query($sql) === TRUE) {
    header("HTTP/1.1 200 OK");
?>
    <html>

    <head>

    </head>

    <body>
        <center>
            <h3>Pedido atualizado com sucesso!</h3>
            <a href="index.php">Voltar</a>
        </center>
    </body>

    </html>
<?php

    // echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>