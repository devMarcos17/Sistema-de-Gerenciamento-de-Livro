<?php
session_start();
if(!isset($_SESSION["nome"])){
    unset($_SESSION["nome"]);
    header("Location: paginaEntrar.php");
    exit;
}
$nome = $_SESSION["nome"];
$maiuscula = strtoupper($nome);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Painel de Livros</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    min-height:100vh;
    background: linear-gradient(135deg, #7b2cbf, #9d4edd);
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:90%;
    max-width:900px;
    background:white;
    border-radius:20px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
    text-align:center;
}

h1{
    color:#7b2cbf;
    margin-bottom:40px;
    font-size:2.2rem;
}

.menu{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(180px, 1fr));
    gap:20px;
}

.menu a{
    text-decoration:none;
    background:linear-gradient(135deg, #7b2cbf, #9d4edd);
    color:white;
    padding:18px;
    border-radius:12px;
    font-size:18px;
    font-weight:bold;
    transition:0.3s;
    box-shadow:0 5px 15px rgba(123,44,191,0.3);
}

.menu a:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 20px rgba(123,44,191,0.5);
}

.usuario{
    background:#f3e8ff;
    color:#7b2cbf;
    padding:12px;
    border-radius:10px;
    margin-bottom:30px;
    font-weight:bold;
}
</style>

</head>
<body>

<div class="container">

    <div class="usuario">
       Sistema de Gerenciamento
    </div>

    <h1><?php echo "BEM-VINDO, $maiuscula"; ?></h1>

    <div class="menu">
        <a href="paginaCadastrarLivro.php">📚 Cadastrar Livro</a>
        <a href="paginaListarLivro.php">📖 Listar Livros</a>
        <a href="paginaAtualizarLivro.php">✏️ Atualizar Livro</a>
        <a href="paginaDeletarLivro.php">🗑️ Deletar Livro</a>
    </div>

</div>

</body>
</html>