<?php

function adicionar($idproduto){
//$nome = $_GET["Nome"];

if(isset($_SESSION["carrinho"])) {
    $produtos = $_SESSION["carrinho"]; //peguei
} else {
    $produtos = array();
    redirecionar("sacola/listarSacola");
}

//$produtos[] = $nome;
$_SESSION["carrinho"] = $produtos;
}



function listar(){
    
   
}

function deletar($idproduto){
    
}

?>
<a href="./listar">carrinho</a>

