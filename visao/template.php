<html>
    <head>
        <title>Sipa Loja</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    
    <body class="container">

        <ul>
            <li> <a href="./cliente/listarClientes"> Listar Clientes </a></li>
            
            <li> <a href="./produto/listarProdutos"> Listar Produtos </a></li>
       
            <li> <a href="./categoria/listarCategoria"> Listar Categoria </a></li>
        </ul>
            
        
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
