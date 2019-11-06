

<div style="display: inline;">
<div style=" margin-left: 5%; float: left; background-color: black; width: 40%; height: 350px;">
    <p style="color: white;"> Resumo do pedido </p>
</div>



<div style=" margin-right: 5%; float: right; background-color: black; width: 40%; height: 350px;">
    <p style="color: white;"> Resumo da entrega </p>

    <select name="idEndereco" style="padding: 10px 52px;">
            <?php foreach ($enderecos as $endereco):?>
            <option value="<?=$endereco["idEndereco"]?>"><?=$endereco["Logra"]?></option>
            <?php endforeach;?>
        </select>

    </form>
</div>
</div>


<br><br><br>


<div style=" margin-left: 5%; width: 90%; background-color: black; color: white; height: 400px;"
<p> Escolha a Forma de Pagamento: </p>

<form action="" method="POST">
    
<select name="idFormaPagamento" style="padding: 10px 52px;">
        <?php foreach ($pagamentos as $pagamento):?>
        <option value="<?=$pagamento["idFormaPagamento"]?>"><?=$pagamento["descricao"]?></option>
        <?php endforeach;?>
    </select>
    
</form>