<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tcc_db';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (mysqli_connect_errno()) {
    echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
    exit();
}