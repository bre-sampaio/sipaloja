
<?php
    if (ehPOST()){
        foreach($errors as $erro){
            echo "$erro <br>";
        }
    }

?>

<h1> ENDEREÇO: </h1>

<form action="" method="POST">
    Logradouro: <input type="text" name="logra" value="<?= @ $endereco['logra'] ?>"> <br><br>
    Complemeto: <input type="text" name="comp" value="<?= @ $endereco['comp'] ?>"> <br> <br>
    Bairro: <input type="text" name="bairro" value="<?= @ $endereco['bairro'] ?>"> <br><br>
    Cidade: <input type="text" name="cidade" value="<?= @ $endereco['cidade'] ?>"> <br> <br>
    CEP: <input type="number" name="cep" value="<?= @ $endereco['cep'] ?>"> <br><br>
	<button type="submit">Enviar</button>
</form>
