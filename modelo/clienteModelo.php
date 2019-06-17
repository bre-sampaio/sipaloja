<?php

	function adicionarCliente($nome, $senha,$email, $cpf, $sexo, $nascimento){
		$sql = "INSERT INTO cliente ( nome, 
                                             senha,  email, 
                                              
                                              cpf, 
					      sexo, 
                                              nascimento)
				VALUES('$nome', 
					'$senha', 
					'$email', 
						'$cpf', 
						'$sexo', 
						'$nascimento')";

		$resultado = mysqli_query($cnx = conn(), $sql);

		if(!$resultado) {

			die('erro ao cadastrar cliente <br>' .mysqli_error($cnx));
		}

		return 'Cadastro realizado com sucesso! <br><br> <a href="./adicionar" class="btn btn-primary">Voltar</a>';
	}



	function pegarTodosClientes(){
		$sql = "SELECT * FROM cliente";
		$resultado = mysqli_query(conn(), $sql);
		$clientes = array();
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$clientes[] = $linha;
		}

		return $clientes;
	}
      
     /* VER CLIENTE PELO ID */   
        
        function pegarClientePorId($id){
            $sql = "SELECT * FROM cliente WHERE idcliente = $id";
            $resul = mysqli_query(conn(), $sql);
            $cliente = mysqli_fetch_assoc($resul);
            return $cliente;
        }
        
     /* DELETAR CLIENTE */   
        function deletarCliente($id){
            $sql = "DELETE FROM cliente WHERE idcliente = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao deletar cliente' . mysqli_error($cnx));
            }
            return 'Cliente deletado com secesso';
        }





















?>

