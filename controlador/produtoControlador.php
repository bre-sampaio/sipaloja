<?php

require_once "modelo/produtoModelo.php";

function adicionar() {
    if (ehPost()) {
        $nome_produto = $_POST ["nome"];
        $descricao = $_POST ["descricao"];
        $valor = $_POST ["valor"];
        $tamanho = $_POST ["tamanho"];
        $estoque = $_POST ["estoque"];
        $categoria = $_POST ["categoria"];
        $msg = adicionarProdutos($nome_produto, $descricao, $valor, $tamanho, $estoque, $categoria);
        echo $msg;
    } else {
        
    }
    exibir("produtos/formulario");
} 









?>