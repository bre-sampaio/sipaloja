
<h2>Lista de produtos por categoria</h2>
<div id="listaProdutos">
    <?php
    foreach ($categorias as $categoria):
        ?>
        <h2><?= $categoria['nome'] ?></h2>	
        <div class="campos">
            <div class="campoNomeProduto">
                <h3>Produto</h3>
            </div>
            <div class="campoPrecoProduto">
                <h3>Preço</h3>
            </div>
            <div class="campoEstoqueProduto">
                <h3>Estoque</h3>
            </div>
            <div class="campoOperacoesProduto">
                <h3>Operações</h3>
            </div>
        </div>        

        <hr size="" width="100%">
        <?php
        foreach ($produtos as $produto):
            if ($categoria["idCategoria"] == $produto["Categoria"]) {
                ?>
                <div class="cadaProduto">
                    <div class="sobreNomeProduto">
                        <div>
                            <p><?= $produto['Nome'] ?></p>
                        </div>
                    </div>
                    <div class="sobrePrecoProduto">
                        <p><?= $produto['Descricao'] ?></p>
                    </div>
                    <div class="sobreEstoqueProduto">
                        <p><?= $produto['Estoque'] ?></p>
                    </div>
                    <div class="sobreOperacoesProduto">
                        <a href="./produto/ver/<?= $produto['idProduto'] ?>" class="btn btn-secondary">VER</a>

                        <a href="./produto/editar/<?= $produto['idProduto'] ?>" class="btn btn-info">EDITAR</a>

                        <a href="./produto/deletar/<?= $produto['idProduto'] ?>" class="btn btn-danger">DELETAR</a>

                    </div>
                </div>
                <hr size="" width="100%">
                <?php
            }
        endforeach;
    endforeach;
    ?>
</div><br>
<a href="categoria/adicionar"><button class="botao2">Nova Categoria</button></a>
<a href="produto/adicionar"><button class="botao2">Novo Produto</button></a><br><br>
<a href="cliente/Adm"><button class="botao">Voltar</button></a><br><br>
