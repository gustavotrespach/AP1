<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

    <?php require_once("navbar.php");?>


    <h1 class="text-center">Lista de Produtos</h1>  
    <div class="container">
        <table class="table table-success table-striped">
            <tr>
                <td>Descrição</td>
                <td>Preço</td>
            </tr>
            <?php  foreach($listaArray as $produto): ?>
            <tr>
                <td><?php echo $produto["descricao"]; ?></td>
                <td><?php echo $produto["preco"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>