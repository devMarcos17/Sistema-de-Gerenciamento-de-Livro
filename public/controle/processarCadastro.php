<?php

use Marcos\Modelo\Cadastrar;
use Marcos\Modelo\Usuario;

require_once __DIR__ . "/../../config/autoload.php";
require_once __DIR__ . "/../../config/conexao.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $usuario = new Usuario($nome, $senha);
    $cadastrar = new Cadastrar($conexao);
    $suceso = $cadastrar->cadastrarUsuario($usuario);

    if($suceso){
        header("Location: /paginas/paginaEntrar.php?cadastro=true");
        exit;
    }
    header("Location: paginaCadastrar.php?cadastro=false");
    exit;
}
?>