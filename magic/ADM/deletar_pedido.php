<?php
include('../conexao.php');
$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM pedidos WHERE id=" . $id;

if ($conn->query($sql) === TRUE) {
    header("HTTP/1.1 200 OK");
?>
    <html>
    <head>
    </head>
    <body>
        <center>
            <h3>Pedido deletado com sucesso!</h3>
            <a href="index.php">Voltar</a>
        </center>
    </body>

    </html>
<?php
} else {
    echo "Error deleting record: " . $conn->error;
}
?>