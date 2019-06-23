<h2> Listar Produtos: </h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th> ID </th>
            <th> NOME </th> 
            <th> DESCRIÇÃO </th> 
            <th> PREÇO </th> 
            <th> TAMANHO </th>
            <th> IMG </th> 
            <th> CATEGORIA </th> 
            <th> ESTOQUE MINIMO </th> 
            <th> ESTOQUE MAXIMO </th>
            
            <th> VER </th> 
            <th> EDITAR </th>
            <th> DELETAR </th>
        </tr>
    </thead>
    
     <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idProduto']?></td>

        <td><?=$produto['Nome']?></td>

        <td><?=$produto['Descricao']?></td>

        <td> <?=$produto['Preco']?> </td>

        <td> <?=$produto['Tamanho']?> </td>

        <td> <?=$produto['img']?> </td>

        <td> <?=$produto['Categoria']?> </td>
        
        <td> <?=$produto['Estoquemin']?> </td>

        <td> <?=$produto['Estoquemax']?> </td>

        
 <td><a href="/produto/ver/<?=$produto['idProduto']?>" class="btn btn-secondary">VER</a></td>

        <td><a href="/produto/editar/<?=$produto['idProduto']?>" class="btn btn-info">EDITAR</a></td>

        <td><a href="/produto/deletar/<?=$produto['idProduto']?>" class="btn btn-danger">DELETAR</a></td>
         </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 
<a href="/produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>


