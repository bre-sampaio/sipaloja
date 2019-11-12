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
    
    
    
    function remover($index){
         foreach($_SESSION["carrinho"] as $key => $produtos){
        
       if($index == $produtos["produtos"]){
           echo "Deu certo!!";
           echo $produtos["produtos"];
           unset ($_SESSION["carrinho"][$key]);
       }
       
    }
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    redirecionar("sacola/listar");  
    }


    function listar(){
      
        
        if(isset($_SESSION["carrinho"])) {
         for ($i=0; $i < count($_SESSION["carrinho"]); $i++){
           $produtos[] = pegarProdutoPorId($_SESSION["carrinho"][$i]);
          
         } 
        } else {
           echo "Não existe sessao carrinho!";
           echo "Carrinho vazio!";
        }
        
    
           $dados = array();
           $dados["produtos"] = $produtos;
           exibir("sacola/listar", $dados);
    
    }
