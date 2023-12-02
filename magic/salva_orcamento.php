<?php

include("conexao.php");

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$servico = $_POST["servico"];
$detalhes = $_POST["detalhes"];

$sql = "INSERT INTO `orcamento`(`nome`, `telefone`, `servico`, `detalhes`) VALUES ('".$nome."','".$telefone."','".$servico."','".$detalhes."')";
//echo $sql;

if ($conn->query($sql) === TRUE) {
    header("HTTP/1.1 201 OK");
    ?>
    <html>
        <head>

        </head>
        <body>  
            <center>
                <h3>Orçamento enviado com sucesso!</h3>
            <a href="index.html">Voltar</a>
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