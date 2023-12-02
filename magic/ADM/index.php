<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body style="padding:30px;">
    <form action="salva_pedido.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome cliente:</label>
            <input type="text" class="form-control" name="cliente">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Serviços</label>
            <input type="text" class="form-control" name="servicos">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Valor</label>
            <input type="number" class="form-control" name="valor">
        </div>
        <button type="submit" class="btn btn-primary">Salvar novo pedido</button>
    </form>

    </button>
    <br><br>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nome Cliente</th>
                <th scope="col">Serviços</th>
                <th scope="col">Valor</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include('select_pedidos.php');
            foreach ($array_resultados as &$resultado) {
                echo "<tr>";
                echo "<td>" . $resultado->id . "</td>";
                echo "<td>" . $resultado->cliente . "</td>";
                echo "<td>" . $resultado->servicos . "</td>";
                echo "<td>" . $resultado->valor . "</td>";
                echo "<td><a href='editar_pedido.php?id=".$resultado->id."'>Editar</a></td>";
                echo "<td><a href='deletar_pedido.php?id=".$resultado->id."'>Deletar</a></td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>