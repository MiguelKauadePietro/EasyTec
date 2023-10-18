<?php

$RM = $_GET['RM'];
$ativo = $_GET['tipo'];

include_once("conexao.php");

$stmt = "update usuarios set tipo = '$ativo' where RM = '$RM';";

if (mysqli_query($conn, $stmt)) {
    header("location:telaadmin.php");
} else {
    echo "Erro ao ativar usuário";
}

mysqli_close($conn);

?>