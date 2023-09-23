<?php

session_start();
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['tipo'] != "u") {
        $erro = "Você tentou acessar uma área não permitida";
    }
} else {
    $erro = "Usuário não autenticado.";
}

if (isset($erro)) {
    header("location:login.php?erro=" . $erro);
}

?>