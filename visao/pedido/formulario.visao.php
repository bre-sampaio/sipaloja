<div style="display: inline;">
  
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
  <form action="" method="POST">
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
       </form>
    
</div>   
