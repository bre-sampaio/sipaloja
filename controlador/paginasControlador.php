<?php

require_once 'modelo/produtoModelo.php';
/** anon */
function index() {
    $dados = array();
    $dados['produtos'] = pegarTodosProdutos();
    exibir("paginas/sobre", $dados);
}

function mapa(){
	exibir("paginas/mapa");
}
