
    <?php foreach ($produtos as $produto): ?>
  
    <?php endforeach; ?>



<h1 style="text-align: center;">CARRINHO</h1>

<br><br>

<div id="pri" style="display: inline; width: 99%;">
	<div class="img" style="display: inline; float: left; width: 25%; margin-right: 2%;">
            <img src="<?=$produto['img']?>" alt="imagem"  style="width: 99%; height: 300px;">
	</div>

	<div class="desc" style=" float: left; width: 30%;">
            <h2><?=$produto['Nome']?></h2>
            <p style="font-size: 20px; width: 40%;">  <?=$produto['Preco']?> </p> <p style="font-size: 20px;"> Tamanho: <?=$produto['Tamanho']?> </p>
            <p style="font-size: 20px;"> R$ <?=$produto['Descricao']?> <br></p> 
            <p style="font-size: 18px;"> Quantidade </p>
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> - </p> 
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> 1 </p> 
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> +</p>
            
        </div>

	<div class="preço" style="  float:left;">

  <a href="./sacola/remover/<?=$produto['idProduto']?>" style="float: right; background-color: black; color: white; padding: 20px 35px; margin-top: 60px;"> DELETAR </a>
        
	</div>
    <br><br>
    <div class="resumo" style="background-color: black; padding: 20px; float: right; width:20%; height: 400px;"> 
        <h2 style="color: white; text-align: center;"> Resumo do pedido </h2>
        
        <a href="./pedido/salvar" style="float: right; background-color: black; color: white; padding: 20px 35px; margin-top: 60px;"> Finalizar </a>
    </div>
    
    </div> 
    
		
 


<br><br>
