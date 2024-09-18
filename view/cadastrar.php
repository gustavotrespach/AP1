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

    <div class="container">
        <form action="http://localhost:8081/aula04/controller/ProdutoController.php?metodo=cadastrar"
        method="post">
        <br>
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control"><br>
            <label for="preco" class="form-label">Preço:</label>
            <input type="number" name="preco" id="preco" class="form-control"><br>
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
    </div>
   
</body>
</html>