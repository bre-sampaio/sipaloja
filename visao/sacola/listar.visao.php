
    <?php foreach ($produtos as $produto): ?>
  
    <?php endforeach; ?>



<h1 style="text-align: center;">CARRINHO</h1>

<br><br>

<div id="pri">
	<div class="img" style="display: inline; float: left; width: 25%; margin-right: 2%;">
            <img src="<?=$produto['img']?>" alt="imagem"  style="width: 99%; height: 300px;">
	</div>

	<div class="desc" style=" float: left; width: 30%;">
            <h2><?=$produto['Nome']?></h2>
            <p style="font-size: 20px;">  <?=$produto['Preco']?> </p> <p style="font-size: 20px;"> Tamanho: <?=$produto['Tamanho']?> </p>
            <p style="font-size: 20px;"> R$ <?=$produto['Descricao']?> <br></p> 
            <p style="font-size: 18px;"> Quantidade </p>
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> - </p> 
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> 1 </p> 
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> +</p>
            
        </div>

	<div class="preço" style="  float:left;">

  <a href="./sacola/remover/<?=$produto['idProduto']?>" style="float: right; background-color: black; color: white; padding: 20px 35px; "> DELETAR </a>
        
	</div>
    </div> 
    

    <div class="resumo" style="background-color: black; padding: 20px; float: right; width:40%;"> 
    
    </div>		
 


<br><br>
