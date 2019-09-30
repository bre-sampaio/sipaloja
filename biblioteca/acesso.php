<?php

define('ACESSO', true);

function acessoLogar($cliente) {
    if(!empty($cliente)) { //se o usuario não for vazio, logo existe o usuário na base com as credenciais
        $_SESSION["acesso"] = array( //cria a sessao acesso com os dados do usuario
            "email" => $cliente["email"], 
            "papel" => $cliente["tipoCliente"]
        );
        return true; 
    }
    return false;
}

function acessoDeslogar() {
    if (isset($_SESSION["acesso"])) {
        $_SESSION["acesso"] = null;
        unset($_SESSION["acesso"]);
    }
}

function acessoClienteEstaLogado() {
    return isset($_SESSION["acesso"]);
}

function acessoPegarTipoDoCliente() {
    if (acessoClienteEstaLogado()) {
        return $_SESSION["acesso"]["tipo"];
    }
}

function acessoPegarClienteLogado() {
    if (acessoClienteEstaLogado()) {
        return $_SESSION["acesso"]["email"];
    }   
}
