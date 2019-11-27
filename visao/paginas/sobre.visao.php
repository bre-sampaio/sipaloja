
  <img src="./publico/produtos/img2_logo.gif" style="width: 100%; height: 800px;">
  <img src="./publico/produtos/img1_logo.png" style="width: 100%; height: 800px;">
  <br><br>
<div style="background-color: black; width: 15%; height: 57px; margin: auto;">
    <p style="font-size: 20px; text-align: center; color: white;"> Destaques</p>
</div>


<br><BR>

<div class="pri">
    <?php foreach ($produtos as $produto):?>
    <div id="prod" style="margin-left: 108px;">
            <img src="<?=$produto['img']?>" style="width: 100%; height: 550px;">
            <p id="desc"><?=$produto["Nome"]?><br> R$ <?=$produto['Descricao']?></p><br>
            <a href="./produto/ver/<?=$produto['idProduto']?>">
                <button id="bot2" style="margin-left: 20%;"> Ver o produto </button>
            </a>
           <button id="bot2"> <a href="./sacola/adicionar/<?=$produto['idProduto']?>"> Adicionar ao carrinho </button> </a>
        </div>
    <?php endforeach;?>
</div>
<br><br><br><br>

<a href="./produto/listarProdutos" style="color: black; margin: auto;"> Ver todos os Produtos </a>
<br><br><br><br>

<div style="display: inline;"> 
    <img src="./publico/produtos/img3_logo.png" style="width: 45%; height: 580px; float: left; margin-left: 6%;">
    <img src="./publico/produtos/img4_logo.png" style="width: 45%; height: 580px;">
</div>

<br><br><br><br>

        <div id="prod" style="margin-left: 108px;">
            <img src="" style="width: 100%; height: 550px;">
            <p id="desc"><br> R$ </p><br>
            <a href="./produto/ver/">
                <button id="bot2" style="margin-left: 20%;"> Ver o produto </button>
            </a>
           <button id="bot2"> <a href="./sacola/adicionar/<?=$produto['idProduto']?>"> Adicionar ao carrinho </button> </a>
        </div>

<br><br><br><br>
<div id="cup" style="background-color: black; height: 200px;">
    <p style="color: white; font-size: 20px; padding-left: 23%;"> Eiii, conta pra gente o seu e-mail, te deixaremos por dentro de todas as ofertas em primeira mão :)</p>
    <form action="" method="POST" style="display: inline;"> 
         <input placeholder="Email" type="Email" name="Email" value="" style="height: 50px; width: 50%; margin: 1% 1% 5% 20%; padding-left: 15px; float: left;">
         <button title="Enviar" style="background-color: red;
			color: white;
			border-color: red;
			height: 50px;
                        margin-top: 1%;
			font-size: 20px; float: left; padding-right: 30px; padding-left: 30px;"> Enviar </button>
    </form>
   
    
</div> 

<br><br><br><br>

<h1>Sobre nossa loja: </h1> <br>
<p> Nossa loja é Lorem ipsum habitasse a mi phasellus vitae fames, eleifend lacinia odio ptor vestibulum elit primis non sem nibh consectetur at libero, justo ipsum litora malesuada volutpat himenaeos vitae mauris ipsum leo, gravida magna consequat porttitor potenti ad accumsan cras </p>