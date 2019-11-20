

<div style="display: inline;">

    <div class="resumo" style="display: inline; flex-direction: column;background-color: black; margin-left: 5%; float: left;width:25%; height: 360px; margin-right: 2%;"> 
        <h2 style="color: white; text-align: center;"> Resumo do Pedido </h2>

         <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>
         <div> 
         <div style="float: left; width: 70%;"> 
             <p style="color: white;"> () produtos <Br> <a href="" style="margin-left: 10%;"> visualizar </a>
            <p style="color: white;"> Frete </p>   
         </div>
         
         <div style="float: right; width: 25%;"> 
             <p style="color: white;"> R$ <?php if(isset($total)){echo $total;} ?> </p>
            <p style="color: white;"> - </p>   
         </div>
         </div> <br><BR><br><BR><br>
       <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>
         
        <p style=" color: white"> Total <b style="color: white;"> <bR><BR>
        <span2 class="price"><b style="color: #000000;">  R$ <?php if(isset($total)){echo $total;} ?></b> </span>
        </p>
</div>


<div class="resumo" style="display: inline; flex-direction: column;background-color: black; margin-left: 5%; float: left;width:25%; height: 360px; margin-right: 2%;"> 
        
<div style="margin-left: 2%;">
   
<h2> Endereco de entrega </h2> 

   <?php foreach ($enderecos as $endereco):?>   
<p> <?= @ $endereco['Logra'] ?></p>

<p> <?= @ $endereco['Comp'] ?></p>

<p><?=@$endereco['Bairro']?></p>

<p><?= @$endereco['Cidade'] ?></p>

<p> <?= @ $endereco['CEP'] ?></p>
    <?php endforeach;?>   
    
    
    <!-- <form action="" method="POST">
    <select name="idEndereco" style="padding: 10px 80px;">
            <?php foreach ($enderecos as $endereco):?>
            <option value="<?=$endereco["idEndereco"]?>"><?=$endereco["Logra"]?></option>
            <?php endforeach;?>
    </select>

    </form> -->
</div>
 
    <div style="margin: 5px ;color: #FFFFFF; width: 100%; border: solid 1px;"></div>
  
<div>
<p> Escolha a Forma de Pagamento: </p>

<form action="" method="POST">
    
<select name="idFormaPagamento" style="padding: 10px 80px; margin-left: 2%;">
        <?php foreach ($pagamentos as $pagamento):?>
        <option value="<?=$pagamento["idFormaPagamento"]?>"><?=$pagamento["descricao"]?></option>
        <?php endforeach;?>
    </select>
    
</form>
</div>
</div>
</div>      

    <br>
    <div style="background-color: black; width: 50%;">
        <h2> Opcoes de Entrega </h2> 
        <div style="background-color: white;">
            
        </div>
       
    </div>

</div>
