
<h2> Listar Pedidos: </h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Id Pedido</th>
            <th>Cpf do cliente</th>
            <th>Data </th>
            <th>Detalhar</th>
            
        </tr>
    </thead>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td> <?=$pedido['idPedido']?></td>
        <td><?=$pedido['cpf']?></td> 
        <td><?=$pedido['DataCompra']?></td> 
        <td><a href="./pedido/ver/<?=$pedido['idPedido']?>">DETALHAR</td>
        
    </tr>
    <?php endforeach; ?>
    
</table>