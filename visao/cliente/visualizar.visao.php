<?php require_once "biblioteca/acesso.php"; ?>
<div style="margin: auto;"> 
    
<div style="display: inline;">
    
    <div style="float: left;">

        <div style="display: inline;  width: 70%;"> 

            <div style="float: left; width: 30%;">
                <img src="./publico/img_sipa/minhaconta.jpg" style=" width: 100%; height: 300px;"> 
            </div>

            <div style="float: right; width: 67%;">
                <p>nome: <?=$cliente['nome']?></p>

                <p>senha: <?=$cliente['senha']?></p>

                <p>email: <?=$cliente['email']?></p>
            <?php if (acessoPegarPapelDoUsuario() == 'admin') { ?>
                <p>Tipo: <?=$cliente['tipoCliente']?></p>
            <?php } ?>
                <p>cpf: <?=$cliente['cpf']?></p>

                <p>sexo: <?=$cliente['sexo']?></p>

                <p>Data de Nascimento: <?=$cliente['nascimento']?></p>
            </div>

        </div>
</div>

<h2>Enderecos</h2>
 <?php include './visao/endereco/listar.visao.php';?>

<a href="./endereco/adicionar/<?=$cliente['idcliente']?>" class="btn btn-primary">Adicionar novo endereco</a>
</div>
  <br><br><br><br>  
    
<div style="float: right; background-color: black; width: 30%; color: white;">
    <h2> Minha Conta </h2>
    
    <a href=""  class="btn btn-primary"> Pedidos </a> <br><BR>
    <a href=""  class="btn btn-primary"> Vales </a> <br><BR> 
    <a href="./cliente/adicionar/" class="btn btn-primary"> Cadastro </a> <br><br>
    <a href="./endereco/adicionar/<?=$cliente['idcliente']?>"  class="btn btn-primary"> Alterar Endereço </a> <br><BR> 
 
</div>
    
</div>
