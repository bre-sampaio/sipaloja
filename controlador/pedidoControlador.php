<?php
require_once "modelo/pedidoModelo.php";
require_once "modelo/pagamentoModelo.php";
require_once "modelo/enderecoModelo.php";

function salvar () {
    if (ehPost ()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idcliente = $_SESSION["idCliente"];
        $idEndereco = $_POST["idEndereco"];
        $valorcupom = $_POST["valorcupom"];
        $produtosCarrinho = $_SESSION["carrinho"];    
        
    $msg = salvarPedido($idFormaPagamento, $idcliente, $idEndereco, $valorcupom, $produtosCarrinho);
    echo $msg;
    
    }else{
        
    }
    
    $finalizar = acessoPegarUsuarioLogado() ;
    
    $dados = array();
    $dados["enderecos"] = pegarFinalizar($finalizar);
    $dados["pagamentos"] = pegarTodosPagamentos();
    exibir("pedido/formulario", $dados);
    
}


function listar () {
    $dados = array ();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir ("pedidos/listar", $dados);
}

function ver ($idPedido) {
    $dados["pedidos"] = pegarPedidoPorId($idPedido);
    exibir ("pedidos/visualizar" , $dados);
}


