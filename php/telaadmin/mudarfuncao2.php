<?php
$RM = $_GET['RM'];
$funcao = $_GET['funcao'];

include_once("conexao.php");

//$ativo = ($tipo == "s") ? "s" : "n"; // Defina $ativo com base em $tipo

$stmt = "update usuarios set funcao = '$funcao' where RM = '$RM';";

mysqli_query($conn,$stmt);

if($funcao = "alu"){
    header("location: logoutadm.php");
}

header("location: telaadmin2.php");

mysqli_close($conn);
?>