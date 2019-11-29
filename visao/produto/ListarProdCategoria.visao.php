<div class="listaProdutos">
<h2>Produtos por categoria</h2>
 <div style="color: #d3d3d3; width: 100%; border: solid 1px;"></div>

    <?php
    foreach ($categorias as $categoria):
        ?>
    <h2 class="h22"><?= $categoria['nome'] ?></h2>	
    
     <div style="color: #d3d3d3; width: 100%; border: solid 1px;"></div>
     
        <div class="tabela1">
            <div class="NomeProduto">
                <h3>Produto</h3>
            </div>
            <div class="PrecoProduto">
                <h3>Preço</h3>
            </div>
            <div class="EstoqueProduto">
                <h3>Estoque</h3>
            </div>
            <div class="OperacoesProduto">
                <h3>Opções</h3>
            </div>
        </div>        
     <br><br><br>
        <?php
        foreach ($produtos as $produto):
            if ($categoria["idCategoria"] == $produto["Categoria"]) { ?>
     
                <div class="tabela2">
                    
                    <div class="nome">
                            <p><?= $produto['Nome'] ?></p>
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
                <?php
            }
        endforeach;
    endforeach;
    ?>
</div><br>
<a href="categoria/adicionar"><button class="botao2">Nova Categoria</button></a>
<a href="produto/adicionar"><button class="botao2">Novo Produto</button></a><br><br>
<a href="cliente/Adm"><button class="botao">Voltar</button></a><br><br>


<style> 
    .listaProdutos{
        width: 40%;
        margin: auto;
    }
    
    .h22{
        background-color: #d3d3d3;
    }
    
    .tabela1{
        display: inline;
    }
    
    .NomeProduto{
        width: 15%;
        float: left;
        margin-right: 6%;
    }
    
    .PrecoProduto{
        width: 15%;
        float: left;
         margin-right: 6%;
    }
    
    .EstoqueProduto{
        width: 15%;
        float: left;
         margin-right: 6%;
    }
    
    .OperacoesProduto{
        width: 15%;
        float: left;
    }
    
    .tabela2{
        display: inline;
    }
    
    .nome{
       width: 15%;
        float: left;
    }
    
     .sobrePrecoProduto{
       width: 15%;
        float: left;
    }
    
    .sobreEstoqueProduto{
       width: 15%;
        float: left;
    }
    
    
    
    
</style> 