    <h2>Detalhes do cliente</h2>

<p>id: <?=$cliente['idcliente']?></p>

<p>nome: <?=$cliente['nome']?></p>

<p>senha: <?=$cliente['senha']?></p>

<p>email: <?=$cliente['email']?></p>

<p>cpf: <?=$cliente['cpf']?></p>

<p>sexo: <?=$cliente['sexo']?></p>

<p>Data de Nascimento: <?=$cliente['nascimento']?></p>

<?php include "endereco/listar.visao.php"; ?>

<a href="./cliente/adicionar" class="btn btn-primary" <br><br><br>Adicionar novo cliente</a> <br>
<a href="./endereco/adicionar/<?=$cliente['idcliente']?>" class="btn btn-primary" <br><br>Adicionar novo endereço</a>