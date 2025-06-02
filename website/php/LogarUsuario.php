<?php
    require_once('Conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(!empty($email) && !empty($senha)) {
        //selecionando o e-mail (unico) na tabela
        $sql = 'SELECT * FROM usuarios WHERE email = :email';

        //prepara a consulta
        $requisicao = $conexao->prepare($sql);
        
        //vincula o parametro a ser consultado no banco
        $requisicao->bindParam(':email', $email);

        //executa no banco
        $requisicao->execute();
        
        $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);
        
        //verificamos acima se o usuario existe, agora validaremos se a senha esta OK
        if($usuario && password_verify($senha, $usuario['senha'])){
            //se o login for OK

            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            //se o login estiver OK, ele vai para o HOME
            header('Location: Home.php');
            exit;

        }else{
            echo"Usuario ou senha incorretos";
        }
    }else{
        echo 'Preencha todos os campos';
    }






?>