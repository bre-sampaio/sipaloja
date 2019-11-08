<?php

function adicionarCupom($nome, $desconto){
     $sql = "INSERT INTO cupom(idCupom, nome, desconto) VALUES (NULL, '$nome', '$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
       die('Erro ao adicionar cupom '. mysqli_error($cnx));
    }
  
    return 'Cupom adicionado com sucesso! <br><br> <a href="./adicionar" class="btn btn-primary">Voltar</a>';
}

function pegarTodosCupons(){
		$sql = "SELECT * FROM cupom";
		$resultado = mysqli_query(conn(), $sql);
		$cupons = array();
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$cupons[] = $linha;
		}

		return $cupons;
	}
      
     /* VER CUPOM PELO ID */   
        
        function pegarCupomPorId($id){
            $sql = "SELECT * FROM cupom WHERE idCupom = $id";
            $resul = mysqli_query(conn(), $sql);
            $cupom = mysqli_fetch_assoc($resul);
            return $cupom;
        }
        
     /* DELETAR CUPOM */   
        function deletarCupom($id){
            $sql = "DELETE FROM cupom WHERE idCupom= $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao deletar cupom' . mysqli_error($cnx));
            }
            return 'Cupom deletado com secesso';
        }

         /* EDITAR CUPOM */
      
            function editarCupom($id, $nome, $desc){
            $sql = "UPDATE cupom SET nome = '$nome' WHERE idCupom = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao editar cupom' . mysqli_error($cnx));
            }
            return 'Cupom editado com secesso';
        }
        
        
        
        /*desconto*/
        
function Caldesconto ($nome) {
    $sql = "SELECT desconto FROM cupom WHERE nome = '$nome'";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = mysqli_fetch_assoc($resultado);
    return $cupons['desconto'];
}

        
        