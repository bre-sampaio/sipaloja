
<h2> Listar Pedidos: </h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Id Pedido</th>
            <th>Forma de Pagamento</th>
            <th>Endereço</th>
            <th>Valor cupom</th>
            <th>Detalhes</th>
            
        </tr>
    </thead>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td> <?=$pedido['idPedido']?></td>
        <td><?=$pedido['descricao']?></td> 
        <td><?=$pedido['Logra']?></td> 
        <td><?=$pedido['Valorcupom']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./pedido/ver/<?=$pedido['idPedido']?>"> DETALHAR <?php } ?></td>
        
    </tr>
    <?php endforeach; ?>
    
</table>