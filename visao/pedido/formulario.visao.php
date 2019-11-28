<div style="display: inline;">
    <form action="" method="POST">

            <div> 
                <div style="float: left; width: 70%;"> 
                    <p style="color: white; font-size: 20px;"> Produtos <Br> <a href="" style="margin-left: 10%;"> visualizar </a>
                    <p style="color: white; font-size: 20px;"> Frete </p>   
                </div>

                <div style="float: right; width: 25%;"> 
                    <p style="color: white; font-size: 20px;"> R$ <?php if (isset($total)) { echo $total; }?> </p>
                    <p style="color: white; font-size: 20px;"> - </p>   
                </div>
            </div> <br><BR><br><BR><br><BR><BR><BR>
            <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>

            <p style=" color: white"> Total <b style="color: white;"> <bR><BR>
                    <span class="price"><b style="color: #000000;">  R$ <?php if (isset($total)) { echo $total;}?></b> </span>
            </p>

            <h2> Endereco de entrega </h2> 


            <select name="idEndereco" style="padding: 10px 80px;">
                <?php foreach ($enderecos as $endereco): ?>
                    <option value="<?= $endereco["idEndereco"] ?>"><?= $endereco["Logra"] ?></option>
                <?php endforeach; ?>
            </select>


            <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>

            <div>
                <p> Escolha a Forma de Pagamento: </p>

                <select name="idFormaPagamento" style="padding: 10px 80px; margin-left: 2%;">
                    <?php foreach ($pagamentos as $pagamento): ?>
                        <option value="<?= $pagamento["idFormaPagamento"] ?>"><?= $pagamento["descricao"] ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <button type="submit"> Finalizar </button>
        </div>     
</div>
    </form>
</div>

<br><BR><BR><BR><BR>

    <form action="" method="POST">
        <div style=" width: 30%; height: 600px; color: black;">
            <h1 style="text-align: center;"> Resumo do Pedido </h1>
        <div style="margin: 5px ;color: #d3d3d3; width: 100%; border: solid 1px;"></div>
        
        <div style="display: inline;"> 
            <p style="font-size: 25px; float: left; width: 45%;"> Produtos </p>
            <p style="font-size: 20px; float: right;"> R$ <?php if (isset($total)) { echo $total; }?></p> <br><br><br><br>
            <p style="font-size: 25px; float: left;width: 93%;">Frete </p>   
            <p style="font-size: 30px; float: right;width: 3%;"> - </p>  
        </div>    
        
        </div>
    </form>
