<?php
$caminho = __DIR__ . "/../database/banco.sqlite";
try{
$conexao = new PDO("sqlite:" . $caminho);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>