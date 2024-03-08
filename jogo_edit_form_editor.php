<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Edição Jogo</title>
        <meta charset="UTF-8">
        <link rel ="stylesheet" href="estilos/estilo.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
    require_once "includes/login.php";
?>

<div id="corpo">
    <?phpif(!is_admin()){
        echo msg_erro('Área Restrita! Você não é administrador');
    }else{
        if(!isset($_POST['nome'])){
            require "jogo"
        }
    }
    }