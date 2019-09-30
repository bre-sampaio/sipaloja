<?php

require_once "modelo/clienteModelo.php";


/** anon */
function adicionar(){
	
	if (ehPOST()) {
           $senha = $_POST["senha"];
           $email = $_POST["Email"];

	$errors = array();
	
	//validação da senha

	if (strlen(trim($senha)) == 0) {
           $errors[] = "Você deve inserir uma senha válida";
	}
	
	
	//validação do email

	if (strlen(trim($email)) == 0){
            $errors[] = 'Informe um email <br><BR>';
	}else{
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                 $errors[] = 'Informe um email válido';
            }
        }

        if (count($errors) > 0){
            $dados = array();
            $dados["errors"] = $errors;
            exibir("login/formulario", $dados);
        } else {     
            $msg = adicionarCliente($senha, $email);
		echo $msg;
        }

    } else {
		exibir("login/formulario");
    }
		
} 
/** anon */
function logout() {
    acessoDeslogar();
    alert("deslogado com sucesso!");
    redirecionar("cliente");
}

?>