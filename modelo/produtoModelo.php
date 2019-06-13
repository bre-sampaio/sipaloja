<?php

function adicionarProdutos ($nome_produto,$descricao,$valor,$tamanho,$estoque,$categoria){
     $sql = "INSERT INTO produtos(id_produto,nome_produto,descricao,valor,tamanho,estoque,categoria) VALUES (NULL,'$nome_produto','$descricao','$valor','$tamanho','$estoque','$categoria')";
    $resultado = mysqli_query($cnx=conn(),$sql);
    if(!$resultado) { die('Erro ao cadastrar produto'. mysqli_error($cnx));}
    return 'Produto cadastrado com sucesso!';
}
