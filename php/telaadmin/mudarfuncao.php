<?php
$RM = $_GET['RM'];
$funcao = $_GET['funcao'];

include_once("conexao.php");

//$ativo = ($tipo == "s") ? "s" : "n"; // Defina $ativo com base em $tipo

$stmt = "update usuarios set funcao = '$funcao' where RM = '$RM';";

mysqli_query($conn,$stmt);

// if (mysqli_query($conn, $stmt)) {
//     if ($ativo == "s") {
//         header("location: telaadmin.php");
//     } else {
//         header("location: desativaruser.php");
//     }
// } else {
//     echo "<p>Erro ao ativar usuário</p>";
//     echo "<p><a href='telaadmin.php'>Voltar</a></p>";
// }
header("location: telaadmin2.php");

mysqli_close($conn);
?>