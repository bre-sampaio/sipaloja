<?php

require_once "modelo/produtoModelo.php";

function adicionar(){
    if (ehPOST()){
        $nome_produto = $_POST ["Nome"];
        $desc = $_POST ["Descricao"];
        $preco = $_POST ["Preco"];
        $tamanho = $_POST ["Tamanho"];
        $img = $_POST ["img"];
        $categoria = $_POST ["Categoria"];
        $estoquemin = $_POST ["Estoquemin"];
        $estoquemax = $_POST ["Estoquemax"];
        
        $msg = adicionarProduto($nome_produto, $desc, $preco, $tamanho, $img, $categoria, $estoquemin, $estoquemax);
        echo $msg;
    } else {
         exibir("produto/formularioProd");
    }
   
} 


/* chama a func "pegarTodosProduto" para passar os dados para a func "exibir" */

	function listarProdutos(){
		$dados = array();
		$dados["produtos"] = pegarTodosProdutos();
		exibir("produto/listar", $dados);

	}

 /* VER O PRODUTO */
        
        function ver($id){
            $dados["produto"] = pegarClientePorId($id);
            exibir("produto/visualizar", $dados);
        }

        
        /* DELETAR PRODUTO */
        
        function deletar($id){
            $msg = deletarProduto($id);
            redirecionar("produto/listarProdutos");
        }





?>