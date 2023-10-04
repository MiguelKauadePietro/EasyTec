<?php

session_start();
if (isset($_SESSION['usuario_id'])) {
    if ($_SESSION['funcao'] != "adm") {
        $erro = "Você tentou acessar uma área não permitida";
    }
} else {
    $erro = "Usuário não autenticado.";
}

if (isset($erro)) {
    header("location:login.php?erro=" . $erro);
}

?>