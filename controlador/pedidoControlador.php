<?php

require_once "modelo/pedidoModelo.php";
require_once "modelo/pagamentoModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/produtoModelo.php";
require_once 'modelo/cupomModelo.php';

function salvar() {
    $produtos = array();
    $total = 0;
    if (isset($_SESSION["carrinho"])) {
        for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
            $produtos[$i] = pegarProdutoPorId($_SESSION["carrinho"][$i]);
            $total += $produtos[$i]['Descricao'];
        }
        if (ehPost()) {
            $idFormaPagamento = $_POST["idFormaPagamento"];
            $idcliente = acessoPegarUsuarioLogado();
            $idEndereco = $_POST["idEndereco"];
            $valorcupom = $_SESSION['desconto'];
            $produtosCarrinho = $_SESSION["carrinho"];

            $msg = salvarPedido($idFormaPagamento, $idcliente, $idEndereco, $valorcupom, $produtosCarrinho);
            exibir("pedido/pedidoFim");
        }

        $finalizar = acessoPegarUsuarioLogado();

        $dados = array();
        $dados["enderecos"] = pegarFinalizar($finalizar);
        $dados["pagamentos"] = pegarTodosPagamentos();

        $dados["total"] = $_SESSION['desconto'];
        $dados["produtos"] = $produtos;

    } exibir("pedido/formulario", $dados);
}

function listarPedidos() {
    $dados = array();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir("pedido/listar", $dados);
}

function ver($idPedido) {
    $dados["pedidos"] = pegarPedidoPorId($idPedido);
    $dados["pedidosProduto"] = pegarProdutoPorPedido($idPedido);
    exibir("pedido/visualizar", $dados);
}

/** admin */
function listarPedidosTempo() {
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];

        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data2 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data1 > $data2) {
            $erros[] = "Selecione um intervalo de tempo válido.";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosTempo($data1, $data2);
            exibir("pedido/listarPedidoTime", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioPedidoTime", $dados);
        }
    } else {
        exibir("pedido/formularioPedidoTime");
    }
}

/** admin */
function listarPedidosLocal() {
    if (ehPost()) {
        $cidade = $_POST['cidade'];

        $dados = array();
        $erros = array();
        if ($cidade == null) {
            $erros[] = "Insira uma cidade";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosLocalizacao($cidade);
            $dados['cidade'] = $cidade;
            exibir("pedido/listarPedidoLocal", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioPedidoLocal", $dados);
        }
    } else {
        exibir("pedido/formularioPedidoLocal");
    }
}

/** admin */
function calcularFaturamentoTempo() {
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];

        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data2 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data1 > $data2) {
            $erros[] = "Selecione um intervalo de tempo válido.";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarFaturamentoTempo($data1, $data2);
            $dados['data1'] = $data1;
            $dados['data2'] = $data2;
            exibir("pedido/listarFaturamentoTime", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("pedido/formularioFaturamentoTime", $dados);
        }
    } else {
        exibir("pedido/formularioFaturamentoTime");
    }
}
