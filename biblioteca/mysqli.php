<?php

function conn() {
    $cnx = mysqli_connect("localhost", "id10017274_bebekarolsampaio", "sipaloja", "id10017274_sipaloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}


