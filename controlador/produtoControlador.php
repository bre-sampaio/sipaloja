<?php

require_once "modelo/produtoModelo.php";

function adicionar(){
	if (ehPOST()) {

	//validação do nome
		
		if (strlen(trim($_POST['nomeProd'])) == 0) {
 			$errors[] = "Informe um nome válido";
		 }
		$nomeProd = $_POST["nomeProd"];	
                
                $preco = $_POST["preco"];	
                
                $desc = $_POST["desc"];	
                
                $tamanho = $_POST["tamanho"];	
                
                $img = $_POST["img"];	
                
                $estoquemin = $_POST["estoquemin"];
                
                $estoquemax = $_POST["estoquemax"];


                $msg = adicionarProduto($nomeProd, $preco, $desc, $tamanho, $img, $estoquemin, $estoquemax);
                echo $msg;
                
	} else {
		exibir("produto/formularioProd");
	}
	
	
} 









?>