<?php

require_once("../model/Produto.php");

class ProdutoController {
    public function cadastrar()
    {
        //$produto = new Produto('Descricao', 2.50);

        $pagina = require_once("../view/cadastrar.php");

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $produto = new Produto($_POST["descricao"], $_POST["preco"]);
            $produto->cadastrar();
        }

        return $pagina;
    }


    public function listar()
    {
        $produto = new Produto();
        $listaArray = $produto->listar();
        $pagina = require_once("../view/listar.php");

        return $pagina; 
    }
    
    public function editar()
    {
        $id = $_GET['id'];

        $produto = new Produto();
        $resultado = $produto->buscaPorId($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $produto->descricao = $_POST['descricao'];
            $produto->preco = $_POST['preco'];
            $produto->editar($id);
        }

        $pagina = require_once("../view/editar.php"); 
        return $pagina;
    }

    public function excluir()
    {
        $id = $_GET['id'];
        $produto = new Produto();
        $produto->excluir($id);

        header("Location: http://localhost:8081/aula04/controller/ProdutoController.php?metodo=listar");
    }

}   

$metodo = "listar";
if(isset($_GET['metodo']))
{
    $metodo = $_GET['metodo'];
}


$controller = new ProdutoController();
$controller->$metodo();