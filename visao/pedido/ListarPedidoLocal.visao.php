
<h2> Listar Pedidos: </h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>CPF</th>
            <th>Número pedido</th>
            <th>Data da compra</th>
            <th>CEP</th>
            <th>Detalhar</th>
            
        </tr>
    </thead>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td> <?=$pedido['cpf']?></td>
        <td><?=$pedido['idPedido']?></td> 
        <td><?=$pedido['DataCompra']?></td> 
        <td><?=$pedido['CEP']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./pedido/ver/<?=$pedido['idPedido']?>"> DETALHAR <?php } ?></td>
        
    </tr>
    <?php endforeach; ?>
    
</table>


