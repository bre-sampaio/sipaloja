<?php

function adicionarProduto($nome_produto, $preco, $desc, $tamanho, $img, $categoria, $estoquemin, $estoquemax){
     $sql = "INSERT INTO produto(Nome, Preco, Descricao, Tamanho, img, Categoria, Estoquemin, Estoquemax) VALUES ('$nome_produto','$preco', '$desc','$tamanho', '$img', '$categoria', '$estoquemin','$estoquemax')";
    
     $resultado = mysqli_query($cnx = conn(), $sql);
    
    if(!$resultado) {

			die('erro ao cadastrar produto <br>' .mysqli_error($cnx));
		}

                return 'Produto Cadastrado com sucesso! <br><br> <a href="/adicionar" class="btn btn-primary">Voltar</a>';
            
 }

 function pegarTodosProdutos(){
		$sql = "SELECT * FROM produto";
		$resultado = mysqli_query(conn(), $sql);
		$produtos = array();
		while ($linha = mysqli_fetch_assoc($resultado)) {
			$produtos[] = $linha;
		}

		return $produtos;
	}
        
         /* VER PRODUTO POR ID */   
        
        function pegarProdutoPorId($id){
            $sql = "SELECT * FROM produto WHERE idproduto = $id";
            $resul = mysqli_query(conn(), $sql);
            $produto = mysqli_fetch_assoc($resul);
            return $produto;
        }
        
     /* DELETAR PRODUTO */   
        function deletarProduto($id){
            $sql = "DELETE FROM produto WHERE idproduto = $id";
            $resul = mysqli_query($cnx = conn(), $sql);
            
            if(!$resul){
                die('Erro ao deletar produto' . mysqli_error($cnx));
            }
            return 'Prouto deletado com secesso';
        }

      