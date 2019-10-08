<?php

require_once 'modelo/produtoModelo.php';

/** anon */
function adicionar($id) {
	if (isset($_SESSION["carrinho"])) {
		$produtos = $_SESSION["carrinho"];
	} else {
		$produtos = array();
	}
	$chave = existeProdutoNoCarrinho($produtos, $id);
	
	if($chave === false) {
		$produto = viewProduto($id);
		$produto["quantidade"] = 1;
		$produtos[] = $produto;
	} else {
		$produto = $produtos[$chave];
		$produto["quantidade"]++;
		$produtos[$chave] = $produto;
	}
	$_SESSION["carrinho"] = $produtos;
	redirecionar("sacola/index");
}
/** admin */
function existeProdutoNoCarrinho($produtos, $id) {
	foreach ($produtos as $chave => $produto) {
		if ($produto["idproduto"] == $id) { //ja existe
			return $chave;
		} 
	}
	return false;
}



/** anon */
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
