    <h2>Detalhes do cliente</h2>

<p>id: <?=$cliente['idcliente']?></p>

<p>nome: <?=$cliente['nome']?></p>

<p>senha: <?=$cliente['senha']?></p>

<p>email: <?=$cliente['email']?></p>

<p>cpf: <?=$cliente['cpf']?></p>

<p>sexo: <?=$cliente['sexo']?></p>

<p>Data de Nascimento: <?=$cliente['nascimento']?></p>

<br>
<h2>Enderecos</h2>
 <?php foreach ($enderecos as $endereco): ?>
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

<a href="./cliente/adicionar" class="btn btn-primary" <br><br><br>Adicionar novo cliente</a> <br>
<a href="./endereco/adicionar/<?=$cliente['idcliente']?>" class="btn btn-primary" <br><br>Adicionar novo endereço</a>