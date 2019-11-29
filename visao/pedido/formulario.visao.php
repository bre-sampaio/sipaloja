<div style="display: inline; width: 50%; margin: auto;">
    
    <h2 class="h22"> Resumo do Pedido </h2>
            <div> 
                <div style="float: left; width: 70%;"> 
                    <p style="color: black; font-size: 20px;"> Produtos <Br>
                    <p style="color: black; font-size: 20px;"> Frete </p>   
                </div>

                
                <div style="float: right; width: 25%;"> 
                    <p style="color: black; font-size: 20px;"> R$ <?php if (isset($total)) { echo $total; }?> </p>
                    <p style="color: black; font-size: 20px;"> - </p>   
                </div>
                
                
            </div>
    <bR><br><br><br><br>
            
            <div style="margin: -5px ;color: #d3d3d3; width: 100%; border: solid 1px;"></div>
            <div style="display: inline;">
                <p style=" color: black; float: left; margin-right: 70%; font-size: 20px;"> Total <b style="color: black;"></p> <bR>
                    <span class="price"><b style="color: #000000; float: right;">  R$ <?php if (isset($total)) { echo $total;}?></b> </span>
            </div>
  
            
            <br><br>  
  <form action="" method="POST">
              <h2 class="h22"> Endereco de entrega </h2> 


            <select name="idEndereco" style="padding: 10px 80px;">
                <?php foreach ($enderecos as $endereco): ?>
                    <option value="<?= $endereco["idEndereco"] ?>"><?= $endereco["Logra"] ?></option>
                <?php endforeach; ?>
            </select>


            <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>

            <div>
                <h2 class="h22"> Escolha a Forma de Pagamento: </h2>

                <select name="idFormaPagamento" style="padding: 10px 80px; margin-left: 2%;">
                    <?php foreach ($pagamentos as $pagamento): ?>
                        <option value="<?= $pagamento["idFormaPagamento"] ?>"><?= $pagamento["descricao"] ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            
            <br><br><BR>
            
            <button type="submit" class="botaoV"> Finalizar </button>  
       </form>
    
</div>   



<style> 
    .h22{
        background-color: #d3d3d3;
        font-size: 20px;
    }
    
        .botaoV{
        margin-left: 40%;
        border: solid;
        background-color: black;
        color: white;
        border-color: black;
        padding: 12px 28px;
        font-size: 15px;
        text-align: center; 
    }
    
    
</style>