<?php

$email = $_GET['email'];
$ativo = $_GET['ativo'];

include_once("conexao.php");

$stmt = "update tbusuarios set ativo = '$ativo' where email = '$email';";

if(mysqli_query($conn,$stmt)){
    header("location:telaadministrador1.php");
}else{
    echo "Erro ao ativar usuário";
}

mysqli_close($conn);


?>