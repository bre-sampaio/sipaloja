
<table class="table" border="1">
    <thead>
        <tr>
            <th>Nome </th>
            <th>Preço </th>
        </tr>
    </thead>
    
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nome_produto']?></td>
        
        <td><?=$produto['preco']?></td>
    </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 


