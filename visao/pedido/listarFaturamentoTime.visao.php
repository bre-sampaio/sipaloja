<h2 class="h23">Os pedios <?php echo "Entre " . $data1 . " até " . $data2 ?>:</h2> <br>
<div style="color: #d3d3d3; width: 36%; margin: auto; border: solid 1px;"></div><br>

<div id="listaPedidos">

        <div class="tabela1">
            <div class="NomeProduto">
                <h3>Pedido</h3>
            </div>
            <div class="PrecoProduto">
                <h3>Data</h3>
            </div>
            <div class="EstoqueProduto">
                <h3>Valor</h3>
            </div>
        </div>  
 
    <?php
    $totalFaturamento = 0;
    foreach ($pedidos as $pedido):
        ?>
    <br><BR><Br>
     <div class="tabela2">
           <div class="nome">
               <p><?= $pedido['idPedido'] ?></p>
            </div>
            <div class="sobrePrecoProduto">
               <p><?= $pedido['DataCompra'] ?></p>
            </div>
            <div class="sobreEstoqueProduto">
                 <p><?= $pedido['valorPedido'] ?></p>
            </div>
    </div>
      
        <?php
        $totalFaturamento += $pedido['valorPedido'];
    endforeach;
    ?><br><br><br><br>
 </div>   
    <div style="color: #d3d3d3; width: 36%; margin: auto; border: solid 1px;"></div>
    
        <p class="total">Total faturado: R$<?= $totalFaturamento ?></p>
<br>

<a href="./cliente/Adm"><button class="botaoV">Voltar</button></a>


<style>
        #listaPedidos{
        width: 35%;
        margin: auto;
    }
    
    .h23{
            margin: auto;
            width: 36%;
        }
    
    .tabela1{
        display: inline;
    }
    
    .NomeProduto{
        width: 25%;
        float: left;
        margin-right: 6%;
    }
    
    .PrecoProduto{
        width: 25%;
        float: left;
         margin-right: 6%;
    }
    
    .EstoqueProduto{
        width: 15%;
        float: left;
         margin-right: 6%;
    }
    
     .tabela2{
        display: inline;
    }
    
    .nome{
       width: 32%;
        float: left;
    }
    
     .sobrePrecoProduto{
       width: 32%;
        float: left;
    }
    
    .sobreEstoqueProduto{
       width: 18%;
        float: left;
    }
    
    .total{
        margin-left: 32%;
        font-size: 18px;
        color: #646464;
    }
    
    .botaoV{
        margin-left: 45%;
        border: solid;
        background-color: black;
        color: white;
        border-color: black;
        padding: 12px 28px;
        font-size: 15px;
        text-align: center; 
    }

</style> 
