<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit();
}

$usuarioNome = $_SESSION['usuario_nome'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $usuarioNome; ?>!</h2>
    <p>Este é o painel de controle.</p>
    <a href="logout.php">Sair</a>
</body>
</html>