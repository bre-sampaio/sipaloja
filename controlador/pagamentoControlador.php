<?php

require_once "modelo/pagamentoModelo.php";

function adicionar(){
	
	if (ehPOST()) {
            $pagamento = $_POST["descricao"];

    /*VALIDAÇÕES*/        
            
        $errors = array();
            
          if(strlen(trim($pagamento)) == 0){
            $errors[] = "Insira uma forma de pagamento válida!! <br>";
        }
      
        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("pagamento/formulario", $dados);
        } else {     
         $msg = adicionarPagamento($pagamento);
		echo $msg;
        }             

    } else {
	exibir("pagamento/formulario");
    }
		
} 

	function listarPagamentos(){
		$dados = array();
		$dados["pagamentos"] = pegarTodosPagamentos();
		exibir("pagamento/listar", $dados);

	}
        
        /* VER A CUPONS */
        
        function ver($id){
            $dados["pagamento"] = pegarPagamentoPorId($id);
            exibir("pagamento/visualizar", $dados);
        }

        
        /* DELETAR PAGAMENTO */
        
        function deletar($id){
            $msg = deletarPagamento($id);
            redirecionar("pagamento/listarPagamentos");
        }

         /* EDITAR PAGAMENTO */
        
        function editar($id){
            
	if (ehPOST()) {
            $pagamento = $_POST["descricao"];

                editarPagamento($pagamento);
                redirecionar("pagamento/listarPagamentos");
            }else{
                $dados["pagamento"] = pegarPagamentoPorId($id);
                exibir("pagamento/formulario", $dados);
            }
        }