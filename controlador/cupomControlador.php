<?php

require_once "modelo/cupomModelo.php";

function adicionar(){
	
	if (ehPOST()) {
          
            $nome = $_POST["nome"];

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
         $msg = adicionarCategoria($nome);
		echo $msg;
        }             

    } else {
	exibir("cupom/formulario");
    }
		
} 


	function listarCupons(){
		$dados = array();
		$dados["copons"] = pegarTodosCupons();
		exibir("cupom/listar", $dados);

	}
        
        /* VER A CUPONS */
        
        function ver($id){
            $dados["cupom"] = pegarCupomPorId($id);
            exibir("cupom/visualizar", $dados);
        }

        
        /* DELETAR CATEGORIA */
        
        function deletar($id){
            $msg = deletarCategoria($id);
            redirecionar("categoria/listarCategorias");
        }

         /* EDITAR CATEGORIA */
        
        function editar($id){
            
            if (ehPost()){    
                $nome = $_POST["nome"];		
                $desc = $_POST["descricao"];

                editarCategoria($id, $nome, $desc);
                redirecionar("categoria/listarCategorias");
            }else{
                $dados["categoria"] = pegarCategoriaPorId($id);
                exibir("categoria/formulario", $dados);
            }
        }