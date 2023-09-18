<?php

$RM = $_GET['RM'];
$ativo = $_GET['ativo'];

include_once("conexao.php");

$stmt = "update tbusuarios set ativo = '$ativo' where email = '$email';";

if(mysqli_query($conn,$stmt)){
    header("location:telaadmin.php");
}else{
    echo "Erro ao ativar usuário";
}

mysqli_close($conn);

?>