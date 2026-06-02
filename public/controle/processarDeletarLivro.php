<?php

use Marcos\Modelo\Estoque;
use Marcos\Modelo\Livro;

require_once __DIR__ . "/../../config/autoload.php";
require_once __DIR__ . "/../../config/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nome = "";
    $genero = "";
    $autor = "";

    $livro = new Livro($nome, $genero, $autor, $id);
    $estoque = new Estoque($conexao);
    $sucesso = $estoque->excluirLivro($livro);
    if ($sucesso) {
        header("Location: /paginas/paginaInicial.php?excluir=true");
        exit;
    }
    header("Location: /paginas/paginaDeletarLivro.php?excluir=false");
    exit;
}
