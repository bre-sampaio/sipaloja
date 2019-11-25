<h2> Listar Pedidos: </h2>

<table class="table">
    <thead>
        <tr>
            <th>Id Pedido</th>
            <th>Forma de Pagamento</th>
            <th>Endereço</th>
            <th>Valor cupom</th>
            <th>Ver Detalhes</th>
            
        </tr>
    </thead>
    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td><?=$pedido['idPedido']?></td>
        <td><?=$pedido['descricao']?></td> 
        <td><?=$pedido['logradouro']?></td> 
        <td><?=$pedido['Valorcupom']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./pedido/ver/<?=$pedido['idpedido']?>"><button class="bot" type="submit" <strong>DETALHAR</strong></button></a> <?php } ?></td>
        
    </tr>
    <?php endforeach; ?>
    
</table>



