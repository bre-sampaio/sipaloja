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
function remover($id)
{
	$produtos = $_SESSION['carrinho'];
	foreach ($produtos as $key => $produto) {
		if ($produto['idProduto'] == $id) {
			unset($produtos[$key]);
		}
	}
	$_SESSION['carrinho'] = $produtos;
	redirecionar("sacola/listar");
}

   /* function remover($listar){
        foreach($_SESSION["carrinho"] as $key => $produtos){
        
            if($listar == $produtos["produtos"]){
                echo "Deu certo!!";
                echo $produtos["produtos"];
                unset ($_SESSION["carrinho"][$key]);
            }
        }
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    redirecionar("sacola/listar");  
    }
*/

    function listar(){
      
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
        
    
           $dados = array();
           $dados["total"] = $total;
           $dados["produtos"] = $produtos;
           exibir("sacola/listar", $dados);
    
    }
