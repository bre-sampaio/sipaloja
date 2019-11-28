<?php require_once "biblioteca/acesso.php"; ?>

<div style="width: 50%; margin: auto;"> 
<h2> Meus Dados</h2>
 <div style="color: #d3d3d3; width: 100%; border: solid 1px;"></div>

 <div style="display: inline;"> 
  
<!--- Esquerda ---> 

  
 <div style="float: left;"> 
    <p> Nome Completo </p>
     <input placeholder="<?=$cliente['nome']?>" style="width: 250px; height: 40px;">

      <p> CPF </p>
     <input placeholder="<?=$cliente['cpf']?>" style="width: 250px; height: 40px;">

      <p> Data de Nascimento </p>
     <input placeholder="<?=$cliente['nascimento']?>" style="width: 250px; height: 40px;">

     <div> 
     <p> Sexo </p>
     <input placeholder="M" style="width: 50px; height: 50px;">
     <input placeholder="<?=$cliente['sexo']?>" style="color: white; width: 53px; height: 50px; background-color: black; border-color: black;">
    </div>
 </div>
 
 
 <!--- Diretita ---> 
 
 
 <div style="float: right;">
     <p> Email </p>
    <input placeholder="<?=$cliente['email']?>" style="width: 250px; height: 40px;">
     
    <p> Senha </p>
    <input placeholder="<?=$cliente['senha']?>" style="width: 250px; height: 40px;">

    <p> Tipo do usuario </p>
    <input placeholder="<?=$cliente['tipoCliente']?>" style="width: 250px; height: 40px;">
    
    <a href="login/logout"><button class="botao">Logout</button></a>

 </div>

 
 </div>
 
 <br><BR><BR><BR><BR><BR><BR><BR><br><BR><BR><BR><BR><BR><BR><BR><br><BR><BR><BR><BR>  
<h2>Enderecos</h2>
<div style="color: #d3d3d3; width: 100%; border: solid 1px;"></div>

<BR>
 <?php include './visao/endereco/listar.visao.php';?>

<a href="./endereco/adicionar/<?=$cliente['idcliente']?>" class="btn btn-primary">Adicionar novo endereco</a>

</div>