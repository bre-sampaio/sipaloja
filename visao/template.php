<?php require_once "biblioteca/acesso.php"; ?>

<html>
    <head>
        <title>Sipa Loja</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>

    <body class="container">

        <div class="tudo">


            <div id="inicio"> 
                <a href="/SipaLoja/" > <img src="./publico/img_sipa/oie_transparent.png" id="img1"> </a>

                <form method="POST" action="produto/buscar" id="pesquisa" style="display: inline;">
                    <div class="bloco">
                        <input type="text" name="busca" placeholder="  Pesquisa">
                    </div>
                </form> 
                <div id="esque"> 
                    <?php if (acessoUsuarioEstaLogado()) { ?>
                        <a href="./cliente/ver/<?= acessoPegarUsuarioLogado() ?>" style="color: white;"><img src="./publico/img_sipa/profile.jpg" id="sac"></a>
                        <?php }
                        ?>

                        <a href="./sacola/listar"> <img src="./publico/img_sipa/sacola.jpg" id="sac"> </a>
                        <a href="./login/"> <img src="./publico/img_sipa/login.jpg" id="lo"> </a>
                    </div>

                </div>

                <div id="menu">

                    <ul id="ul1">   
                        <?php if (acessoPegarPapelDoUsuario() == 'admin') { ?>
                            <a href="./cliente/listarClientes" style="color: white;"> Usuarios </a></li>

                            <li id="li1">
                                <a href="./produto/listarProdutos" style="color: white;"> Produtos </a></li>

                            <li id="li1"> 
                                <a href="./pagamento/listarPagamentos" style="color: white;"> Formas de Pagamento </a></li>

                            <li id="li1"> 
                                <a href="./categoria/listarCategorias" style="color: white;"> Categorias </a></li>

                            <li id="li1"> 
                                <a href="./cupom/listarCupons" style="color: white;"> Cupons </a></li>

                            <li id="li1"> 
                                <a href="./pedido/listarPedidos" style="color: white;"> Pedidos </a></li>
                            
                             <li id="li1"> 
                                 <a href="./cliente/Adm" style="color: white;"> Administrador </a></li>

                        <?php } ?>
                    </ul>
                </div>


            </div>
            <br><br>


            <br>

            <main class="container" id="site">
                <?php require $viewFilePath; ?>
        </main>

        <br><br>

        <div id="rodape">
            <div id="list2">
                <ul id="ul2">
                    <li id="l2"> <b> INSTITUCIONAL </b> </li>
                    <li id="l2">Quem somos</li>
                    <li id="l2">Contato </li>
                    <li id="l2">Central de Atendimento</li>
                </ul>

                <ul id="ul3">
                    <li> <b> ATENDIMENTO </b> </li>
                    <li>(15) 32726532</li>
                    <li>De segunda à sexta </li>
                    <li> Das 8h às 19h</li>
                </ul>

                <ul id="ul4">
                    <li> <b> POLÍTICA  </b> </li>
                    <li> Privacidade</li>
                    <li> Promoções e Descontos  </li>
                    <li> Prazos e Entregas</li>
                </ul>
            </div>
            <hr/>
            <p id="p10">&copy; Todos os direitos reservados</p>
            <p id="p11">Design: Brenda Sampaio e Mateus Holtz</p>
            <p id="p12"> Email da loja: sipaloja@gmail.com </p>

            <div id="esque2">
                <img src="./publico/img_sipa/facebook.svg" id="facebook">
                <img src="./publico/img_sipa/twitter.svg" id="twitter">
                <img src="./publico/img_sipa/insta.png" id="insta">
            </div>   

    </body>
</html>
