<?php
    $requisicao = $_POST['requisicao'];

    switch($requisicao){
        
        case 'Atualizar';
            include 'AtualizarUsuario.php';
            break;

        case 'Cadastrar';
            include 'CadastroUsuario.php';
            break;

        case 'Consultar';
            include 'ConsultaUsuario.php';
            break;

        case 'Remover';
            include 'RemoveUsuario.php';
            break;

        default:
            echo "Acão inválida, por gentileza selecionar uma opção válida";
            break;
    }



















?>