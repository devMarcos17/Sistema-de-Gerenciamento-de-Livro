<?php

use Marcos\Modelo\Estoque;
use Marcos\Modelo\Livro;

require_once __DIR__ . "/../../config/autoload.php";
require_once __DIR__ . "/../../config/conexao.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    $generos = $_POST["generos"];
    $autor = $_POST["autor"];

    $livro = new Livro($nome, $generos, $autor);
    $estoque = new Estoque($conexao);
    $sucesso = $estoque->cadastrarLivro($livro);

    if($sucesso){
       header("Location: /paginas/paginaInicial.php?cadastroLivro=true");
       exit;
    }
    header("Location: /paginas/paginaCadastrarLivro.php?cadastroLivro=false");

}
?>