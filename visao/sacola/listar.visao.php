<h1 style="text-align: center;">CARRINHO</h1>

<br><br>
<div style="width: 100%;display: flex; flex-direction: row; justify-content: space-between;">

  
    <div style="width: 77%;">
        <?php foreach ($produtos as $produto): ?>
            <div id="pri" style="display: inline; width: 100%;">
                <div class="img" style="display: inline; float: left; width: 25%; margin-right: 2%;">
                    <img src="<?= $produto['img'] ?>" alt="imagem"  style="width: 99%; height: 500px;">
                </div>

                <div class="desc" style=" float: left; width: 30%;">
                    <h2 style="margin-top: 50px;"><?= $produto['Nome'] ?></h2>
                    <p style="font-size: 20px; width: 40%;">  <?= $produto['Preco'] ?> </p> <p style="font-size: 20px;"> Tamanho: <?= $produto['Tamanho'] ?> </p>
                    <p style="font-size: 20px;"> R$ <?= $produto['Descricao'] ?> <br></p> 
                    <p style="font-size: 18px;"> Quantidade </p>
                    <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> - </p> 
                    <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> 1 </p> 
                    <p style="border: solid; width: 10%; display: inline; float: left; text-align: center; font-size: 20px;"> +</p>

                </div>

                <div class="preço" style="  float:left;">

                    <a href="./sacola/remover/<?= $produto['idProduto'] ?>" style="float: right; background-color: black; color: white; padding: 20px 35px; margin-top: 60px;"> DELETAR </a>

                </div>
                <br><br><br><br><br><BR><BR><BR><BR><R><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><br><br><br><BR><bR>
            </div> 
        <?php endforeach; ?>  
    </div>

    <div class="resumo" style="display: flex; flex-direction: column;background-color: black; padding: 20px; width:23%; height: 650px;"> 
        <h2 style="color: white; text-align: center;"> SUBTOTAL </h2> <br>
        <span class="price"><b style="color: #000000;"> R$ <?php if(isset($total)){echo $total;} ?> </b> </span>

        <br>
        
        
        <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>
        <P style="color: white;"> Cupom de Desconto </p>

        <form action="sacola/desconto" method="POST">
            <input type="text" name="nome" value="" style="margin-left: 5%; padding: 7px; width: 270px;">
            <button type="submit">Enviar</button>
        </form>
        
        <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>

    
        <p style="color: white;"> DIGITE O CEP DO ENDEREÇO DE ENTREGA:
        <div style="display: flex; flex-direction: row; align-items: center;">

            <input placeholder=" _____-___" type="" name="cep" value="" style="height: 35px; width: 200px; float: left; margin-right: 5%; margin-left: 5%;"> </p>

            <button style="background-color: white; padding: 6px 10px; color: black;"> Calcular </button> </a>
        </div>
        <br>
        
         <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>

        <p style="float: left; color: white"> Total <b style="color: white;"> <bR><BR>
         R$ <?php if(isset($total)){echo $total;} ?> </b> 
     </span> 
 </p>
        <br>

        
        <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>

        <a href="./pedido/salvar" style="width: 80%; text-align: center; border-radius: 3px; font-weight: bold;background-color: #33cc00; color: #000000; padding: 15px 0; margin: auto;"> Finalizar </a>
        <br> 
        <a href="./pedido/salvar" style="width: 80%; text-align: center; border-radius: 3px; font-weight: bold;background-color:#cccccc; color: #000000; padding: 15px 0; margin: auto;"> Continuar Comprando </a>
    </div>

</div>