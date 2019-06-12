<?php

function adicionarProduto($nomeProd,  $preco, $desc,   $tamanho, $img,  $estoquemin, $estoquemax){
		$sql = "INSERT INTO cliente (nomeProd, preco, desc, tamanho, img, estoquemin, estoquemax)
				VALUES('$nomeProd',  '$preco', '$desc', '$tamanho', '$img', '$estoquemin', '$estoquemax')";

		$resultado = mysqli_query($cnx = conn(), $sql);

		if(!$resultado) {

			die('erro ao cadastrar cliente <br>' .mysqli_error($cnx));
		}

		return 'Cadastro realizado com sucesso!';
	}

