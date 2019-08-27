<h2>Listar enderecos</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID </th>
            <th>LOGRADOURO</th> 
            <th>COMPLEMENTO</th> 
            <th>BAIRRO</th> 
            <th>CIDADE</th>
            <th>CEP</th>
   
   
            <th>VER</th> 
            <th>EDITAR</th>
            <th>DELETAR</th>
        </tr>
    </thead>
    
    <?php foreach ($endereco as $endereco): ?>
    <tr>
        <td><?=$endereco['idEndereco']?></td>

        <td><?=$endereco['idUsuario']?></td>

        <td><?=$endereco['logra']?></td>

        <td> <?=$endereco['comp']?> </td>

        <td> <?=$endereco['cidade']?> </td>

        <td> <?=$endereco['cep']?> </td>



        <td><a href="./endereco/ver/<?=$endereco['idEndereco']?>" class="btn btn-secondary">VER</a></td>

        <td><a href="./endereco/editar/<?=$endereco['idEndereco']?>" class="btn btn-info">EDITAR</a></td>

        <td><a href="./endereco/deletar/<?=$endereco['idEndereco']?>" class="btn btn-danger">DELETAR</a></td>
        </tr>

    <?php endforeach; ?>
</table>
 

<br><br> 
<a href="./endereco/adicionar/" class="btn btn-primary">Adicionar novo endereco</a>

