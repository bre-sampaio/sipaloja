<?php
    if (ehPOST()){
        foreach($errors as $erro){
            echo "$erro <br>";
        }
    }

?>

<h1> Cadastro dos Produtos: </h1>

<form action="" method="POST">
    <input placeholder="Nome do Produto" type="text" name="Nome" value="<?= @ $produto['Nome'] ?>"> <br><br>
    
    <input placeholder="Descrição" type="text" name="Descricao" value="<?= @ $produto['Preco'] ?>"> <br><br>
    
    <input placeholder="Preço" type="text" name="Preco" value="<?= @ $produto['Descricao'] ?>"> <br><br>
    
    <input placeholder="Tamanho" type="text" name="Tamanho" value="<?= @ $produto['Tamanho'] ?>"> <br><br>
    
    <input placeholder="Imagem" type="text" name="img" value="<?= @ $produto['img'] ?>"> <br><br>
  
    <input placeholder="Categoria" type="text" name="Categoria" value="<?= @ $produto['Categoria'] ?>"> <br><br>
    
    <input placeholder="Estoque Mínimo" type="number" name="Estoquemin" value="<?= @ $produto['Estoquemin'] ?>"> <br><br>
  
    <input placeholder="Estoque Máximo" type="number" name="Estoquemax" value="<?= @ $produto['Estoquemax'] ?>"> <br><br>
	
            <input type="submit" name="Enviar">
</form>

