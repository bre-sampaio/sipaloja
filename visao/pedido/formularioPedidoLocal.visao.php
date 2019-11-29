<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>

<h2 class="h23">Informe a cidade: </h2> <br>
<div style="color: #d3d3d3; width: 36%; margin: auto; border: solid 1px;"></div><br><BR>


<form action="" method="POST" class="form2">
    <div class="city">
        <label for="~cidade">-></label>
        <input type="text" class="text" name="cidade"><br><br>
    </div>
    <button class="botao2">Enviar</button>
</form>

<style> 
    .form2{
        padding-left:15%;
        margin:auto;
        display: inline;
        width: 50%;
    }
    
    .botao2{
        border: solid;
        background-color: black;
        color: white;
        border-color: black;
        padding: 12px 28px;
        font-size: 15px;
        text-align: center;
        margin-left: 2%;
    }
    
    .city{
        float: left;
    }
    
    .h23{
        margin: auto;
        width: 36%;
    }
    
    .text{
        padding: 15px 90px;
    }
    
</style>