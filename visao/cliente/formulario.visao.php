<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>

<h1>Cadastro</h1>

<form action="" method="POST">

    <input placeholder="Nome" type="name" name="nome" value="<?= @ $cliente['nome'] ?>">

    <br><br>

    <input placeholder="Senha" type="password" name="senha" value="<?= @ $cliente['senha'] ?>">

    <br><br>


    <input placeholder="Email" type="Email" name="Email" value="<?= @ $cliente['email'] ?>"> 

    <br><br>

    <input placeholder="CPF" type="number" name="cpf" value="<?= @ $cliente['cpf'] ?>"> 

    <br><br>

    <h3>Sexo: </h3>

    
    <input type="radio" name="sexo" value="F"> Feminino
    <input type="radio" name="sexo" value="M"> Masculino
    
    <br><br>

    <input placeholder="Data" type="date" name="nascimento" value="<?= @ $cliente['nascimento'] ?>">

    <br><br>
    <input type="submit" name="Enviar">
</form>


