<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body style="padding:30px;">
    <?php
    include('../conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM pedidos where id=" . $id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $cliente = $row["cliente"];
            $servicos = $row["servicos"];
            $valor = $row["valor"];
        }
    } else {
        echo "0 results";
    }
    ?>
    <form action="edita_pedido_banco.php?id=<?php echo $id;?>" method="POST">

        <div class="form-group">
            <label for="exampleInputEmail1">Nome cliente:</label>
            <input type="text" class="form-control" name="cliente" value="<?php echo $cliente; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Serviços</label>
            <input type="text" class="form-control" name="servicos" value="<?php echo $servicos; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Valor</label>
            <input type="number" class="form-control" name="valor" value="<?php echo $valor; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Alterar pedido</button>
    </form>

    </button>
</body>