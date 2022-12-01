<?php
$arq = file_get_contents('../config/config.json');
$config = json_decode($arq);

$dbhost = $config->dbhost;
$dbport = $config->dbport;
$dbname = $config->dbname;
$dbuser = $config->dbuser;
$dbpass = $config->dbpass;


$dsn = "mysql:host=$dbhost;port=$dbport;dbname=$dbname";

if ( ! $conexao = new PDO($dsn,$dbuser, $dbpass) ){
    die('Erro na conexao com o banco de dados.');
} 

//echo 'Conectado com sucesso.';

