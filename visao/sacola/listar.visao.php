
    <?php foreach ($produtos as $produto): ?>
  
    <?php endforeach; ?>



<h1 style="text-align: center;">CARRINHO <img src="img_sipa/sacola.jpg" style="border-radius: 100%; width: 9%;"></h1>

<br><br>

<div id="pri">
	<div class="img" style="display: inline; float: left; width: 25%; margin-right: 7%; margin-left: 5%;">
            <img src="<?=$produto['img']?>" alt="imagem"  style="width: 100%; height: 300px;">
	</div>

	<div class="desc" style=" float: left; width: 30%; padding: 20px;">
            <h2><?=$produto['Nome']?></h2>
            <p style="font-size: 20px;">  <?=$produto['Preco']?> </h4> <br> Tamanho: <?=$produto['Tamanho']?> <br><br> Quantidade <br></p> 
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> - </p> 
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> 1 </p> 
            <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> +</p>
	</div>

	<div class="preço" style="  float: right; width: 24%; text-align: center; padding: 95px; margin-right: 20px;">
            <br><h4> R$ <?=$produto['Descricao']?> <br>
	</div>
    <br>
</div>		
 

        <a href="./sacola/remover/<?=$produto['idProduto']?>"> DELETAR </a>

<br><br>
