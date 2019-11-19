<?php

require_once "modelo/cupomModelo.php";
require_once "modelo/produtoModelo.php";

/** admin */
function adicionar(){
	
	if (ehPOST()) {
          
            $nome = $_POST["nome"];
            $desconto= $_POST["desc"];

    /*VALIDAÇÕES*/        
            
        $errors = array();
            
          if(strlen(trim($nome)) == 0){
            $errors[] = "Insira um cupom válido!! <br>";
        }
      
        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cupom/formulario", $dados);
        } else {     
         $msg = adicionarCupom($nome, $desconto);
		echo $msg;
        }             

    } else {
	exibir("cupom/formulario");
    }
		
} 

/** admin */
	function listarCupons(){
		$dados = array();
		$dados["cupons"] = pegarTodosCupons();
		exibir("cupom/listar", $dados);

	}
        
        /* VER A CUPONS */
        
 /** admin */       
        function ver($id){
            $dados["cupom"] = pegarCupomPorId($id);
            exibir("cupom/visualizar", $dados);
        }

        
        /* DELETAR CUPOM */

/** admin */    
        function deletar($id){
            $msg = deletarCupom($id);
            redirecionar("cupom/listarCupons");
        }

         /* EDITAR CUPOM */
        
 /** admin */       
        function editar($id){
            
            if (ehPost()){    
                $nome = $_POST["nome"];

                editarCupom($id, $nome);
                redirecionar("cupom/listarCupons");
            }else{
                $dados["cupom"] = pegarCupomPorId($id);
                exibir("cupom/formulario", $dados);
            }
        }
       
        
  /** anon */  
        
function desconto () {
	if (ehPost()) {
		$desconto = Caldesconto($_POST["nome"]);
	} else {
		$desconto = 0;
        $total = 0;
	}
	$valorTotal = $_SESSION['total'];
	$valorTotal = $valorTotal - $desconto;
	$dados["produtos"] = $_SESSION["carrinho"];
	$dados["total"] = $valorTotal;
	$_SESSION['total'] = $valorTotal;
	$_SESSION["quantcarrinho"] = 0;
	if (isset($_SESSION["carrinho"])) {
		$produtosCarrinho = array();
		foreach ($_SESSION["carrinho"] as $produtoSessao) {
			$_SESSION["quantcarrinho"] += $produtoSessao["quantidade"];
			$produtoBanco = pegarProdutoPorId ($produtoSessao["idProduto"]);
			$produtosCarrinho[] = $produtoBanco;
		}
		$dados["produtos"] = $produtosCarrinho;
		exibir("sacola/listar", $dados);
	} else {
		exibir("sacola/listar", $dados);
	}
}