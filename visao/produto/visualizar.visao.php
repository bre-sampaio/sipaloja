<h2 style="margin: auto;">Detalhes do produto</h2> <br><br>

    <div style="display: inline;">
<img src="<?=$produto['img']?>" alt="imagem" style="width: 34%; height: 445px; padding-left: 10px; float: left; padding-right: 50px; margin-left: 20%;">
    
<div class="pala">
    <h1 style="margin-top: -7px;"> <?=$produto['Nome']?> </h1> 
    <div id="meio">	
	<p style="padding-left: 10%; font-size: 20px;">Frete grátis para Itapetininga <br> Prazo de fabricação: 1 dia <br> Tamanho: <br> <?=$produto['Tamanho']?> </p>
        <p style="font-size: 20px; margin-top: 20px;"> R$ <?=$produto['Descricao']?></p> <p> ou 5X de R$ 30,00 </p><br>
        <p style="float: left;"> Calcular frete e prazo:  <input placeholder=" _____-___" type="" name="cep" value="" style="height: 30px;"> </p>
        
        <button style=" margin-top: 15px; 
                        background-color: black;
			padding: 6px;
                        margin-left: 4px;
			color: white;
			border-color: black;"> OK </button> </a>
        
        
        <br><br><br>
        <button style=" font-size: 20px; padding-right: 28px; padding-left: 28px; background-color: black;
			padding: 10px;
			color: white;
			border-color: black;"> <a href="./sacola/adicionar/<?=$produto['idProduto']?>"> Adicionar ao carrinho </button> </a>
        
    </div>
   
    
    <div style="background-color: black; margin-top: 200px; height: 400px;">    
        <h2 style="text-align: center; color: white; padding-top: 20px;">Informações do produto</h2>
        <p style="padding-left: 40%; font-size: 20px; color: white;"><br> Descricao: <?=$produto['Descricao']?> <br> Categoria: <?=$produto['Categoria']?><br> Estoquemin: <?=$produto['Estoquemin']?> <br> Estoquemax: <?=$produto['Estoquemax']?></p>
  <p style="color: white; padding-left: 40%; font-size: 20px;">*Cabedal em couro e têxtil<br>
			*Forro têxtil confortável<br>
			*Solado de borracha vulcanizada que adere <br> ao board e garante maior controle<br>
			*Código do artigo: D69237 <br><br><br></p>
    </div>
  
    
    
    
    
<p>idProduto: <?=$produto['idProduto']?></p>

<p>Nome: <?=$produto['Nome']?></p>

<p>Preco: <?=$produto['Preco']?></p>

<p>Descricao: <?=$produto['Descricao']?></p>

<p>Tamanho: <?=$produto['Tamanho']?></p>

<p>img: <img src="<?=$produto['img']?>" alt="imagem" width="10%"> </p>

<p>Categoria: <?=$produto['Categoria']?></p>

<p>Estoquemin: <?=$produto['Estoquemin']?></p>

<p>Estoquemax: <?=$produto['Estoquemax']?></p>

<a href="./sacola/adicionar/<?=$produto['idProduto']?>"> carrinho </a>

<a href="./produto/adicionar" class="btn btn-primary" <br><br><br>Adicionar novo produto</a>