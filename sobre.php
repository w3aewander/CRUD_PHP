<?php require __DIR__ . '/header.php'; ?>

  <div class="container">
    <h1>Sobre</h1>
    <hr />
    <div class="card card-text p-4">
        CRUD - Create, Read, Update and Delete<hr>
        São operações de entrada e saída de dados em um banco de dados. Os processos mais comuns são: inserir um novo registro, atualizar um registro existente, deletar registros<br>
        O Primeiro passo é criar um formulário para manutenção dos registros na tabela desejada.<br>
        Para isso vamos usar o PHP com MySQL. O arquivo de configuração está no diretório config da aplicação em um arquivo no formato JSON, que é o mais comum de ser utilizado hoje, mas, as configurações ou parâmetros de conexão com o banco, poderia set também em arquivo de texto no formato INI, XML, YAML, CSV ou outros..<br>
        Vamos adotar múltiplas páginas para um melhor entendimento de todas as operações. <br>
        <p>Para acessar um banco de dados é necessário usar credenciais para acesso, isto é, precisa de um usuário e uma senha, além do endereco IP ou nome do servidor, porta e o nome do banco. <br>
        É comum utiliarmos o termo DSN - Datasource Name - que é chamado de string de conexão no seguinte formato (MySQL): mysql:host="ip_ou_nome_servidor;port=3306;dbname=nome_banco".
        <br>Vamos usar também o PDO para as transações no banco. <br>
    </div>

  <?php require  __DIR__ . '/footer.php'; ?>