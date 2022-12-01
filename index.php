<?php require __DIR__ . '/header.php'?>

<div class="container">
    <h1>CRUD Básico em PHP</h1>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Cadatro de Produtos
                <span class="fa fa-spinner fa-2x fa-fw" id="progresso" style="display: none"></span>
            </div>
        </div>
        <div class="card-body">
            <h2>Menu Principal</h2>
            <p>Escolha a operação.</p>
           
            <div class="list-group">
                <a class="list-group-item btn btn-danger btn-block " href="sobre.php">Leia-me</a>
            
                <a class="list-group-item btn btn-danger btn-block " href="produtos/listar.php">Inserir</a>
            
                <a class="list-group-item btn btn-danger btn-block " href="produtos/listar.php">Inserir</a>
            
                <a class="list-group-item btn btn-danger btn-block " href="produtos/listar.php">Inserir</a>
            
                <a class="list-group-item btn btn-danger btn-block " href="produtos/listar.php">Inserir</a>
            </div>
            
        </div>   
    </div>
<?php require __DIR__ . '/footer.php'?>