<?php
spl_autoload_register(function(string $nome)
{
   $caminho = str_replace("Marcos", "src", $nome . ".php");
   $novoCaminho = str_replace("\\", DIRECTORY_SEPARATOR, $caminho);
   $caminhoFinal = __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . $novoCaminho;

   if(file_exists($caminhoFinal)){
    require_once $caminhoFinal;
   }
});
?>