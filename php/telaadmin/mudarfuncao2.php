<?php
$RM = $_GET['RM'];
$funcao = $_GET['funcao'];

include_once("conexao.php");


$stmt = "update usuarios set funcao = '$funcao' where RM = '$RM';";

mysqli_query($conn,$stmt);


header("location: telaadmin2.php");

mysqli_close($conn);
?>