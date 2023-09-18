<?php

    $email = $_GET['email'];
    $ativo = $_GET['ativo'];

    include_once("conexao.php");

    $stmt = "update tbusuarios set ativo = '$ativo' where email = '$email';";

    if(mysqli_query($conn,$stmt)){
        if($ativo == "s"){
            header("location:telaadmin.php");
        }else{
            header("location:desativaruser.php");
        }
        header("location:telaadmin.php");
    }else{
        echo "<p>Erro ao ativar usuário</p>";
        echo "<p><a href = 'telaadmin.php'>Voltar</a></p>";
    }
mysqli_Close($conn);
?>