<?php

require_once "servico/validarServico.php";
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

function adicionar() {
    if (ehPOST()) {
        $nome_produto = $_POST ["Nome"];
        $desc = $_POST ["Descricao"];
        $preco = $_POST ["Preco"];
        $tamanho = $_POST ["Tamanho"];
        $img = $_POST ["img"];
        $categoria = $_POST ["Categoria"];
        $estoquemin = $_POST ["Estoquemin"];
        $estoquemax = $_POST ["Estoquemax"];


        $errors = array();

        if (strlen(trim($nome_produto)) == 0) {
            $errors[] = "Insira um nome válido!! <br>";
        }

        if (strlen(trim($desc)) == 0) {
            $errors[] = "Insira uma descrição válida!! <br>";
        }

        if (strlen(trim($preco)) == 0) {
            $errors[] = "Insira um preço válido!! <br>";
        }


        if (count($errors) > 0) {
            $dados = array();
            $dados["errors"] = $errors;
            $dados["categorias"] = pegarTodosCategorias();
            exibir("produto/formularioProd", $dados);
        } else {
            $msg = adicionarProduto($nome_produto, $desc, $preco, $tamanho, $img, $categoria, $estoquemin, $estoquemax);
            echo $msg;
        }
    } else {
        $dados = array();
        $dados["categorias"] = pegarTodosCategorias();
        exibir("produto/formularioProd");
    }
}

/* chama a func "pegarTodosProduto" para passar os dados para a func "exibir" */

function listarProdutos() {
    $dados = array();
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

/* VER O PRODUTO */

function ver($id) {
    $dados["produto"] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

/* DELETAR PRODUTO */

function deletar($id) {
    $msg = deletarProduto($id);
    redirecionar("produto/listarProdutos");
}

/* EDITAR PRODUTO */

function editar($id) {

    if (ehPost()) {
        $nome_produto = $_POST ["Nome"];
        $desc = $_POST ["Descricao"];
        $preco = $_POST ["Preco"];
        $tamanho = $_POST ["Tamanho"];
        $img = $_POST ["img"];
        $categoria = $_POST ["Categoria"];
        $estoquemin = $_POST ["Estoquemin"];
        $estoquemax = $_POST ["Estoquemax"];

        editarProduto($nome_produto, $desc, $preco, $tamanho, $img, $categoria, $estoquemin, $estoquemax);
        redirecionar("produto/listarProdutos");
    } else {
        $dados["produto"] = pegarProdutoPorId($id);
        $dados["categorias"] = pegarTodosCategorias();
        exibir("produto/formularioProd", $dados);
    }
}

?>