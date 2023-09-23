<?php

$RMuser = $_GET['RM'];

//CONEXÃO COM O BD
include_once("conexao.php");

//INSTRUÇÃO SQL
$stmt = "delte from usuarios where id = '$RMuser';";

//EXECUTANDO O COMANDO SQL
if (mysqli_query($conn, $stmt)) {
    header("Location: telaadmin.php");
} else {
    echo "Erro ao apagar o usuário.<br>" . mysqli_error($conn);
    echo "<br><a href='telaadmin.php'>Voltar</a>";
}

//FECHANDO O BD
mysqli_close($conn);

?>