<?php

require_once "modelo/categoriaModelo.php";

function adicionar(){
	
	if (ehPOST()) {
          
            $nome = $_POST["nome"];
			
            $desc = $_POST["descricao"];

	$msg = adicionarCategoria($nome, $desc);
		echo $msg;


	} else {
		exibir("categoria/formulario");
	}
		
} 


	function listarCategorias(){
		$dados = array();
		$dados["categorias"] = pegarTodosCategorias();
		exibir("categoria/listar", $dados);

	}
        
        /* VER A CATEGORIA */
        
        function ver($id){
            $dados["categoria"] = pegarCategoriaPorId($id);
            exibir("categoria/visualizar", $dados);
        }

        
        /* DELETAR CATEGORIA */
        
        function deletar($id){
            $msg = deletarCategoria($id);
            redirecionar("categoria/listarCategorias");
        }
