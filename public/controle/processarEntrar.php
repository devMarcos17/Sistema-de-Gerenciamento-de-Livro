<?php

use Marcos\Modelo\Entrar;
use Marcos\Modelo\Usuario;

require_once __DIR__ . "/../../config/autoload.php";
require_once __DIR__ . "/../../config/conexao.php";

session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $usuario = new Usuario($nome, $senha);
    $entrar = new Entrar($conexao);
    $sucesso = $entrar->autenticarUsuario($usuario);

    if($sucesso){
        $_SESSION["nome"] = $nome;
        header("Location: /paginas/paginaInicial.php?autenticar=true");
        exit;
    }
    unset($_SESSION["nome"]);
    header("Location: /paginas/paginaEntrar.php?autenticar=false");
    exit;


}
?>