<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>


<form action="" method="POST" class="form1">
    <div class="div2">
        <label for="data1">Data 1:</label><br>
        <input type="date" class="d1" name="data1"><br><br>
        <label for="data2">Data 2:</label><br>
        <input type="date" class="d1" name="data2"><br><br>
    </div>
    <button class="botao2">Enviar</button>
</form>
<br><Br><BR>
<a href="cliente/Adm"><button class="botaoV">Voltar</button></a>
<style> 
    .botao2{
        border: solid;
        background-color: black;
        color: white;
        border-color: black;
        padding: 12px 28px;
        font-size: 15px;
        text-align: center; 
        float: right;
        margin-top: 7%;
        margin-left: 40%;

    }
    
    .botaoV{
        margin-left: 45%;
        border: solid;
        background-color: black;
        color: white;
        border-color: black;
        padding: 12px 28px;
        font-size: 15px;
        text-align: center; 
    }
    
    .form1{
        margin: auto;
        display: inline;
        width: 50%;
    }
    
    .d1{
        height: 40px;
        width: 80%;
    }
    
    .div2{
        float: left;
        width: 45%;
    }

</style>
