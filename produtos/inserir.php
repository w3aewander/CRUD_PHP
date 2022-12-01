<?php require '../header.php'?>
    <div class="container mb-2">
    <h1>Inserir novo Produto</h1>
    <hr />

    <div class="card">
        <form method="POST" action="/produtos/inserir.php">
        <div class="card-header">
            <div class="card-title">
                Cadastro de Produtos
                <span class="fa fa-spinner fa-2x fa-fw" id="progresso" style="display: none"></span>
            </div>
        </div>
        <div class="card-body">
            <h2>Vamos cadastrar alguns produtos.</h2>
            <p>O código do produto será gerado automaticamente, então o campo não será editável.</p>
           <div class="form-group col-md-2">
              <label for="produto_codigo">Código do Produto</label>
              <input type="text" class="form-control" id="produto_codigo" name="produto_codigo" value="0" readonly="readonly" >
           </div>
           
           <div class="row">
                <div class="form-group col-md-8">
                    <label for="produto_descricao" >Descrição</label>
                    <input type="text" class="form-control" id="produto_descricao" name="produto_descricao" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="produto_preco_custo">Preço de custo</label>
                    <input type="number" step=".1" class="form-control" id="produto_preco_custo" name="produto_preco_custo">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="produto_preco_venda">Preço de venda</label>
                    <input type="number"  step=".1" class="form-control" id="produto_preco_venda" name="produto_preco_venda">
                </div>
                <div class="form-group col-md-2">
                    <label for="produto_qtde_estoque">Quantidade em estoque</label>
                    <input type="number" class="form-control" id="produto_qtde_estoque" name="produto_qtde_estoque">
                </div>
            </div>
        </div>

        <div class="card-footer">
               <div class="btn-group gap-1">
                    <button type="button" class="btn btn-danger ">Voltar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
               </div>
        </div>

    </form>
    </div>

    
    <?php 
     
     require '../config/conexao.php';
     if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $descricao = $_REQUEST['produto_descricao'];
        $preco_custo = $_REQUEST['produto_preco_custo'];
        $preco_venda = $_REQUEST['produto_preco_venda'];
        $qtde_estoque = $_REQUEST['produto_qtde_estoque'];

        $sql =  " insert into produtos ( descricao, preco_custo, preco_venda,qtde_estoque) ";
        $sql .= " values( ?, ?, ?, ?)";

        $stm = $conexao->prepare($sql);

        $stm->bindValue(1,    strtoupper($descricao) );
        $stm->bindValue(2,  $preco_custo );
        $stm->bindValue(3,  $preco_venda );
        $stm->bindValue(4, $qtde_estoque);

        if ( $stm->execute() ){
            echo "registro salvo com sucesso";
        } else {
            echo "Erro ao tentar salvar o registro o produto";

        }

        header("Location: /index.php");
     }
    ?>
 
<?php require '../footer.php'?>