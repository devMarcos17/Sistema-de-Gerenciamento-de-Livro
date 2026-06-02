<?php

use Marcos\Modelo\Estoque;
use Marcos\Modelo\Livro;

require_once __DIR__ . "/../../config/autoload.php";
require_once __DIR__ . "/../../config/conexao.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $autor = $_POST["autor"];

    $livro = new Livro($nome, $genero, $autor, $id);
    $estoque = new Estoque($conexao);

    $sucesso = $estoque->atualizarLivro($livro);

    if($sucesso){
       header("Location: /paginas/paginaInicial.php?atualizar=true");
       exit;
    }
    header("Location: /paginas/paginaAtualizarLivro.php?atualizar=false");
    exit;
}
?>