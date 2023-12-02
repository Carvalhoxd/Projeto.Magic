<?php

include("../conexao.php");
$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);

$array_resultados = array();
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->cliente = $row['cliente'];
        $obj->servicos = $row['servicos'];
        $obj->valor = $row['valor'];
        $array_resultados[] = $obj;
    }
    header("HTTP/1.1 200 OK");
} else {
    echo "0 results";
}

