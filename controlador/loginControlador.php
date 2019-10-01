<?php

require_once "modelo/clienteModelo.php";


/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarClientePorEmailSenha($email, $senha);
        
        if (acessoLogar($usuario)) {
            alert("bem vindo" . $login);
            redirecionar("paginas/sobre");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/formulario");
}
/** anon */
function logout() {
    acessoDeslogar();
    alert("deslogado com sucesso!");
    redirecionar("cliente");
}
?>