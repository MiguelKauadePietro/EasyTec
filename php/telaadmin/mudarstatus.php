<?php

    $email = $_GET['email'];
    $ativo = $_GET['ativo'];

    include_once("conexao.php");

    $stmt = "update tbusuarios set ativo = '$ativo' where email = '$email';";

    if(mysqli_query($conn,$stmt)){
        if($ativo == "s"){
            header("location:telaadministrador.php");
        }else{
            header("location:Desativarusuario.php");
        }
        header("location:telaadministrador.php");
    }else{
        echo "<p>Erro ao ativar usuário</p>";
        echo "<p><a href = 'telaadministrador.php'>Voltar</a></p>";
    }
mysqli_Close($conn);
?>