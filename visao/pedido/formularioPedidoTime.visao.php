<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>
<h2 class="h23">Selecione o periodo de tempo: </h2> <br>
<div style="color: #d3d3d3; width: 36%; margin: auto; border: solid 1px;"></div><br><BR>

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
<style> 
    .botao2{
        border: solid;
        background-color: black;
        color: white;
        border-color: black;
        padding: 12px 28px;
        font-size: 15px;
        text-align: center;
        margin-top: 5%;
    }
   
    .form1{
        padding-left:15%;
        margin:auto;
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
    
    .h23{
        margin: auto;
        width: 36%;
    }

</style>
