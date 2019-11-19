<?php

require_once 'modelo/produtoModelo.php';
require_once 'modelo/cupomModelo.php';

/** anon */
    function adicionar($id) {
        if(isset($_SESSION["carrinho"])) {
            $produtos = $_SESSION["carrinho"]; 
        } else {
            $produtos = array();
        }

        $produtos[] = $id;
        $_SESSION["carrinho"] = $produtos;
        
        redirecionar("sacola/listar");
    }
    
    
   
/** anon */
function remover($idproduto)
{
    //unset($_SESSION["carrinho"]);
	 print_r ($_SESSION["carrinho"]);
    
    for ($i = 0; $i <= count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i] == $idproduto) {
            $indice = $i;
            unset($_SESSION["carrinho"][$indice]);
        }
    }
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
	redirecionar("sacola/listar");
}
    function listar(){
      $produtos= array();
      $total = 0;
        if(isset($_SESSION["carrinho"])) {
         for ($i=0; $i < count($_SESSION["carrinho"]); $i++){
           $produtos[$i] = pegarProdutoPorId($_SESSION["carrinho"][$i]);
           $total += $produtos[$i]['Descricao'];
         } 
        } else {
           echo "Não existe sessao carrinho!";
           echo "Carrinho vazio!";
        }
        
        $_SESSION['total'] = $total;
           $dados = array();
           $dados["total"] = $total;
           $dados["produtos"] = $produtos;
           exibir("sacola/listar", $dados);
    
    }

    function desconto () {
  if (ehPost()) {
    $desconto = $_POST["nome"];
    $porcentagem_cupom = Caldesconto($desconto);
  

    //$desconto = 0;
    $total = 0;
  
  $valorTotal = $_SESSION['total'];
  $valorTotal = $valorTotal - $desconto;
  $dados["produtos"] = $_SESSION["carrinho"];
  $dados["total"] = $valorTotal;
  $_SESSION['total'] = $valorTotal;
  $_SESSION["quantcarrinho"] = 1;
  $valorTotal = $valorTotal - (($porcentagem_cupom/100) * $valorTotal); 
    if (isset($_SESSION["carrinho"])) {
      $produtosCarrinho = array();
      foreach ($_SESSION["carrinho"] as $produtoSessao) {
        //$_SESSION["quantcarrinho"] += $produtoSessao["quantidade"];
       $produtoBanco = pegarProdutoPorId($produtoSessao);
        $produtosCarrinho[] = $produtoBanco;
    }
    $dados["produtos"] = $produtosCarrinho;
    $dados['total'] = $valorTotal;
    exibir("sacola/listar", $dados);
  } else {
    exibir("sacola/listar", $dados);
  }
}
}
