<?php
require_once "modelo/pedidoModelo.php";
require_once "modelo/pagamentoModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/produtoModelo.php";
require_once 'modelo/cupomModelo.php';

function salvar () {
      $produtos= array();
      $total = 0;
      if(isset($_SESSION["carrinho"])) {
         for ($i=0; $i < count($_SESSION["carrinho"]); $i++){
           $produtos[$i] = pegarProdutoPorId($_SESSION["carrinho"][$i]);
           $total += $produtos[$i]['Descricao'];
         }     
    if (ehPost ()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idcliente = acessoPegarUsuarioLogado();
        $idEndereco = $_POST["idEndereco"];
        $valorcupom =  $_SESSION['desconto'];
        $produtosCarrinho = $_SESSION["carrinho"];    
        
    $msg = salvarPedido($idFormaPagamento, $idcliente, $idEndereco, $valorcupom, $produtosCarrinho);
    echo $msg;
    
    }
     
      
    $finalizar = acessoPegarUsuarioLogado() ;
    
    $dados = array();
    $dados["enderecos"] = pegarFinalizar($finalizar);
    $dados["pagamentos"] = pegarTodosPagamentos();
    
   $dados["total"] =  $_SESSION['desconto'];
   $dados["produtos"] = $produtos;
    
    exibir("pedido/formulario", $dados);
    
}
}


function listarPedidos () {
    $dados = array ();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir ("pedido/listar", $dados);
}

function ver ($idPedido) {
    $dados["pedidos"] = pegarPedidoPorId($idPedido);
     $dados["pedidosProduto"] = pegarProdutoPorPedido($idPedido);
    exibir ("pedido/visualizar" , $dados);
}


