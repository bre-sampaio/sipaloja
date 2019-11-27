<h2 style="margin: auto;">Detalhes do produto</h2> <br><br>

<div style="display: inline; margin: auto; width: 70%;">
    
    <div style="float: left;width: 55%;">
   <div style="float: left; width: 12%;">
        <img src="<?=$produto['img']?>" style="width:100%; height: 95px; "><br><br>
        <img src="<?=$produto['img']?>" style="width:100%; height: 95px;"><br><br>
	<img src="<?=$produto['img']?>" style="width:100%; height: 95px; "><br><br>
	<img src="<?=$produto['img']?>" style="width:100%; height: 95px;"><br><br>
        <img src="<?=$produto['img']?>" style="width:100%; height: 95px;">
    </div>
        
    <div style="float: right;">   
        <img src="<?=$produto['img']?>" alt="imagem" style="width: 65%; height: 556px; margin-left: -2%;">
    </div>
    </div>


<div class="pala">
    <h1 style="margin-top: 11px;"> <?=$produto['Nome']?> </h1> 
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
</div>
    </div>
    <br><br>

    <div style=" margin: auto; width: 70%;">    
    <h2> Descrição</h2> 
<div style="color: #d3d3d3; width: 100%; border: solid 1px;"></div>
    <p>
        Camiseta de algodão com silk frontal. <br>
        Basiquinha pra agradar todo mundo. <br>
        Composição: 100% Algodão. <br>
        Modelo Masculino: 1,80 de altura e veste G. <br>
        Modelo Feminino: 1,60 de altura e veste P. <br><br>

        <b>Instruções de Lavagem:</b> <br>
        - Lave com água em temperatura ambiente. <br>
        - Não usar alvejantes. <br>
        - Não usar secadora. <br>
        - Passar em temperatura mínima, pelo avesso e evitando a área estampada. <br>
        - Não limpar a seco. 
    </p>
    </div>
    
<!-- <p>idProduto: <?=$produto['idProduto']?></p>

<p>Nome: <?=$produto['Nome']?></p>

<p>Preco: <?=$produto['Preco']?></p>

<p>Descricao: <?=$produto['Descricao']?></p>

<p>Tamanho: <?=$produto['Tamanho']?></p>

<p>img: <img src="<?=$produto['img']?>" alt="imagem" width="10%"> </p>

<p>Categoria: <?=$produto['Categoria']?></p>

<p>Estoquemin: <?=$produto['Estoquemin']?></p>

<p>Estoquemax: <?=$produto['Estoquemax']?></p>

<a href="./sacola/adicionar/<?=$produto['idProduto']?>"> carrinho </a>

<a href="./produto/adicionar" class="btn btn-primary" <br><br><br>Adicionar novo produto</a> -->