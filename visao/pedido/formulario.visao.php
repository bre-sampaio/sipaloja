


<p> Escolha a Forma de Pagamento: </p>

<form action="" method="POST">
    
<select name="idFormaPagamento" style="padding: 10px 52px;">
        <?php foreach ($pagamentos as $pagamento):?>
        <option value="<?=$pagamento["idFormaPagamento"]?>"><?=$pagamento["descricao"]?></option>
        <?php endforeach;?>
    </select>
    
</form>


<p> Escolha o endereço que deseja receber seu pedido: </p>

<select name="idEndereco" style="padding: 10px 52px;">
        <?php foreach ($enderecos as $endereco):?>
        <option value="<?=$endereco["idEndereco"]?>"><?=$endereco["Logra"]?></option>
        <?php endforeach;?>
    </select>
    
</form>