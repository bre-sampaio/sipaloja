<?php

require_once 'modelo/produtoModelo.php';


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
      
        $total = 0;
        $produtos = array();
        if(isset($_SESSION["carrinho"])) {
         for ($i=0; $i < count($_SESSION["carrinho"]); $i++){
           $produtos[$i] = pegarProdutoPorId($_SESSION["carrinho"][$i]);
           $total += $produtos[$i]['Descricao'];
         } 
        } else {
           echo "Não existe sessao carrinho!";
           echo "Carrinho vazio!";
        }
        
    
           $dados = array();
           $dados["total"] = $total;
           $dados["produtos"] = $produtos;
           exibir("sacola/listar", $dados);
    
    }
