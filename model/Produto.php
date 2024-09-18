<?php

class Produto
{
    public ?string $descricao;

    public ?float $preco;

    public function __construct(
        ?string $descricao = null,
        ?float $preco = null)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }


    public function cadastrar()
    {
        $conn = $this->criaConexaoComBanco();

        $sql = "INSERT INTO produtos (descricao, preco)
        values ('{$this->descricao}', '{$this->preco}')";

        if($conn->query($sql) === TRUE) {
            echo "Registro salvo com sucesso";
        }else {
            echo "Erro ao salvar no banco de dados";
        }
    }

    public function listar()
    {
        $conn = $this->criaConexaoComBanco();

        $resultado = mysqli_query($conn, 'select * from produtos');

        return $resultado;
    }

    public function criaConexaoComBanco()
    {
        $host = 'mysql';
        $user = 'root';
        $pass = '1q2w3e4r5t';
        $db = 'ap1';
        $port = '3306';

        $conn = new mysqli($host, $user, $pass, $db, $port);
        if($conn->connect_errno) {
            echo "Falha: {$conn->connect_errno}";
            exit();
        }
        return $conn;
    }
}


// O base URL / Quem usa Docker = http://localhost:8081
// Qual pasta é precisam estar os arquivos para quem usa Docker? www
// Moveu o as pastas de lugar, usar docker compose up -d para corrigir
//Classes = Pascal Case / Metodos e Atributos = Camel Case