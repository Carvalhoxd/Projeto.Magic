<?php

include("../conexao.php");

$cliente = $_POST["cliente"];
$servicos = $_POST["servicos"];
$valor = $_POST["valor"];

$sql = "INSERT INTO `pedidos`(`cliente`, `servicos`, `valor`) VALUES ('".$cliente."','".$servicos."','".$valor."')";
//echo $sql;

if ($conn->query($sql) === TRUE) {
    header("HTTP/1.1 201 OK");
    ?>
    <html>
        <head>

        </head>
        <body>  
            <center>
                <h3>Pedido criado com sucesso!</h3>
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