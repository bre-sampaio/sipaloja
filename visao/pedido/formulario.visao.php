

<div style="display: inline;">
<div style=" margin-left: 5%; float: left;width:30%; height: 350px;">
    <p> Resumo do pedido </p>
</div>



<div style="float: left;width: 30%; height: 350px;">
    <p> Resumo da entrega </p>
    
<form action="" method="POST">
    <select name="idEndereco" style="padding: 10px 52px;">
            <?php foreach ($enderecos as $endereco):?>
            <option value="<?=$endereco["idEndereco"]?>"><?=$endereco["Logra"]?></option>
            <?php endforeach;?>
    </select>

    </form>
</div>


<div style="float: right; margin-left: 5%; width: 30%;height: 400px;"
<p> Escolha a Forma de Pagamento: </p>

<form action="" method="POST">
    
<select name="idFormaPagamento" style="padding: 10px 52px;">
        <?php foreach ($pagamentos as $pagamento):?>
        <option value="<?=$pagamento["idFormaPagamento"]?>"><?=$pagamento["descricao"]?></option>
        <?php endforeach;?>
    </select>
    
</form>
    </div>