<?php

require_once 'modelo/produtoModelo.php';

function adicionar($idproduto) {
    if (isset($_SESSION["sacola"])) {
        $produtos = $_SESSION["sacola"];
    } else {
        $produtos = [];
    }
    $produtos[] = pegarProdutoPorId($idproduto);
    $_SESSION["sacola"] = $produtos;
    redirecionar("sacola/listar");
}



function listar(){
if (isset($_SESSION["sacola"])) {
        $todos = array();
        $produtos = $_SESSION["sacola"];
        foreach ($produtos as $produto):
            $todos[] = pegarProdutoPorId($produto);
        endforeach;
    } else {
        echo "Não existe sessao sacola!";
        echo "Carrinho vazio!";
    }
    $dados = array();
    $dados["produtos"] = $todos;
    exibir('sacola/listar', $dados);
}


function deletar($idproduto) {
    print_r ($_SESSION["sacola"]);
    
    for ($i = 0; $i <= count($_SESSION["sacola"]); $i++) {
        if ($_SESSION["sacola"][$i] == $idproduto) {
            $indice = $i;
            unset($_SESSION["sacola"][$indice]);
        }
    }
    $_SESSION["sacola"] = array_values($_SESSION["sacola"]);
    redirecionar("sacola/listar");
}




