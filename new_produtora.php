<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Novo Usuário</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos/estilo.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
           require_once "includes/banco.php";
           require_once "includes/funcoes.php";
           require_once "includes/login.php";
        ?>
        <div id="corpo">
            <?php
                if(!is_admin()){
                    echo msg_erro('Área restrita! Você não é administrador!');
                }else{
                    if(!isset($_POST['produtora'])){
                        require "new_produtora_form.php";
                }else{
                    $produtora = $_POST['produtora'];
                    $pais = $_POST['pais'];

                    if(empty($produtora) && ($pais)){
                        echo msg_sucesso('Digite a nova produtora e o pais de origem');
                    }else{
                        $q = "INSERT INTO produtoras (produtora,pais) VALUES('$produtora', '$pais')";
                        if($banco->query($q)){
                            echo msg_sucesso('a produtora $produtora foi adicionado com sucesso');
                        }else{
                            echo msg_erro('Não foi possivel adicionar a nova produtora $produtora');
                        }
                    }
                 }

             }
             echo voltar();
             ?>
             </div>
            </body>
            </html>
