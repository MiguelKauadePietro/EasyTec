<?php
$RM = $_GET['RM'];
$tipo = $_GET['tipo'];

include_once("conexao.php");

$ativo = ($tipo == "s") ? "s" : "n"; // Defina $ativo com base em $tipo

$stmt = "update usuarios set ativo = '$ativo' where RM = '$RM';";

if (mysqli_query($conn, $stmt)) {
    if ($ativo == "s") {
        header("location: telaadmin.php");
    } else {
        header("location: desativaruser.php");
    }
} else {
    echo "<p>Erro ao ativar usuário</p>";
    echo "<p><a href='telaadmin.php'>Voltar</a></p>";
}

mysqli_close($conn);
?>