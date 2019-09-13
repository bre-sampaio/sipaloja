<?php

require_once 'modelo/produtoModelo.php';

function adicionar($idproduto) {
 if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    } else {
        $produtos = $_SESSION["carrinho"];
    }
    $produtos[] = $produto;
    $_SESSION["carrinho"] = $produtos;
    redirecionar("sacola/listar");
}


function listar() {
    if (isset($_SESSION["carrinho"])) {
        $todos = array();
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
        $todos[] = pegarProdutoPorId($produto);
        endforeach;
    } else {
        echo "Não existe sessao carrinho!";
        echo "Sacola vazia!";
    }
    $dados = array();
    $dados["produtos"] = $todos;
    exibir('carrinho/listar', $dados);
}
