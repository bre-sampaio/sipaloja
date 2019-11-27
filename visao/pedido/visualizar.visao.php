
<h2>Pedidos:</h2>

<p>Id Pedido: <?=$pedidos['idPedido']?></p>
<p>Id Usuario: <?=$pedidos['idcliente']?></p>
<p>Id Forma Pagamento: <?=$pedidos['idFormaPagamento']?></p>
<p>Id Endereço: <?=$pedidos['idEndereco']?></p>
<p>Valor cupom: <?=$pedidos['Valorcupom']?></p>

<h4>PRODUTOS COMPRADOS:</h4>
<?php foreach ($pedidosProduto as $produto) :?>
    <div><?=$produto["Nome"]?><br></div>
<?php endforeach;?>