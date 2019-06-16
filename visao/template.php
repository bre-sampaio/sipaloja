<html>
    <head>
        <title>Sipa Loja</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    
    <body class="container">

        <div id="menu">
            <ul id="ul1">
                <li id="li1"> <a href="./cliente/listarClientes" style="color: white;"> Listar Clientes </a></li>

                <li id="li1"> <a href="./produto/listarProdutos" style="color: white;"> Listar Produtos </a></li>

                <li id="li1"> <a href="./categoria/listarCategorias" style="color: white;"> Listar Categoria </a></li>
            </ul>
        </div>
        <br><br><br>
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>


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
<p id="p11">Design: Brenda e Pedro </p>
<p id="p12"> Email da loja: sipaloja@gmail.com </p>
						
		<div id="esque2">
			<img src="img_sipa/facebook.svg" id="facebook">
			<img src="img_sipa/twitter.svg" id="twitter">
			<img src="img_sipa/insta.png" id="insta">
		</div>   
   
    </body>
</html>
