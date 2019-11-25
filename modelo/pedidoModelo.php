<?php


function salvarPedido ($idFormaPagamento, $idcliente, $idEndereco, $valorcupom, $produtosCarrinho) {
$sql = "INSERT INTO pedido (idFormaPagamento, idCliente, idEndereco, Valorcupom) VALUES ('$idFormaPagamento','$idcliente', '$idEndereco', '$valorcupom')";
$resultado = mysqli_query ($cnx = conn(), $sql);
$idPedido = mysqli_insert_id($cnx);
foreach ($produtosCarrinho as $id) {
    $idProduto = $id;
    $quantidade = 1;
    
    $sql = "INSERT INTO pedido_produto (idProduto, idPedido, Quantidade) VALUES ('$idProduto', '$idPedido', '$quantidade')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
}
if(!$resultado) { die('Erro ao adicionar um pedido'. mysqli_error($cnx));}
return 'Pedido salvo <br> <a href="./sacola/listar/" class="btn btn-primary">Voltar</a>';  
}
function pegarTodosPedidos (){
    $sql = "SELECT p.*, fp.descricao, e.Logra "
            . "FROM pedido p "
            . "INNER JOIN formapagamento fp "
            . "ON p.idFormaPagamento = fp.idFormaPagamento "
            . "INNER JOIN cliente c "
            . "ON p.idcliente = c.idcliente "
            . "INNER JOIN endereco e "
            . "ON c.idcliente = e.idcliente";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos[] = $linha;
    }
    return $pedidos; 
}
function pegarPedidoPorId ($idPedido) {
    $sql = "SELECT * FROM pedido WHERE idPedido = $idPedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = mysqli_fetch_assoc($resultado);
    return $pedidos;
}

function pegarProdutoPorPedido($id){
    $sql = "SELECT pr.Nome 
            FROM produto pr 
            INNER JOIN pedido_produto pp 
            ON pr.idProduto = pp.idProduto 
            INNER JOIN pedido p 
            ON pp.idPedido = p.idPedido 
            WHERE p.idPedido = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $pedidos[] = $linha;
    }
    return $pedidos;
}