<?php

require_once "modelo/clienteModelo.php";



function adicionar(){
	
	if (ehPOST()) {
            
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];
            $email = $_POST["Email"];
            $sexo = $_POST["sexo"];
            $cpf = $_POST["cpf"];
            $nascimento = $_POST["nascimento"];
            
	$errors = array();
	
        if (strlen(trim($nome)) == 0) {
            $errors[] = "Informe um nome válido";
	}
		

	//validação da senha

	if (strlen(trim($senha)) == 0) {
           $errors[] = "Você deve inserir uma senha válida<br><BR>";
	}
	
	
	//validação do email

	if (strlen(trim($email)) == 0){
            $errors[] = 'Informe um email <br><BR>';
	}else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                 $errors[] = 'Informe um email válido <br>';
            }
        }

        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("cliente/formulario", $dados);
        } else {     
            $msg = adicionarCliente($nome,  $senha, $email, $cpf, $sexo, $nascimento);
		echo $msg;
        }

    } else {
		exibir("cliente/formulario");
    }
		
} 

	/* chama a func "pegarTodosClientes" para passar os dados para a func "exibir" */

	function listarClientes(){
		$dados = array();
		$dados["clientes"] = pegarTodosClientes();
		exibir("cliente/listar", $dados);

	}
        
        /* VER O CLIENTE */
        
        function ver($id){
            $dados["cliente"] = pegarClientePorId($id);
            exibir("cliente/visualizar", $dados);
        }

        
        /* DELETAR CLIENTE */
        
        function deletar($id){
            $msg = deletarCliente($id);
            redirecionar("cliente/listarClientes");
        }

        
        /* EDITAR CLIENTE */
        
        function editar($id){
            
            if (ehPost()){    
                $nome = $_POST["nome"];
                $senha = $_POST["senha"];
                $email = $_POST["Email"];
                $sexo = $_POST["sexo"];
                $cpf = $_POST["cpf"];
                $nascimento = $_POST["nascimento"];

                editarCliente($id, $nome, $senha,$email, $cpf, $sexo, $nascimento);
                redirecionar("cliente/listar");
            }else{
                $dados["cliente"] = pegarClientePorId($id);
                exibir("cliente/formulario", $dados);
            }
        }


?>