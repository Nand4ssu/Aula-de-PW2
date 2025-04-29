<!-- Para iniciar o PHP, utilizamos a tag <?php ?> -->

<?php
    include("conexao.php");
    
    try{
        //Verificar se o nome do usuário já existe
        $varVerifica = $pdo->prepare("SELECT COUNT(*) FROM login WHERE usuario = :usuario");
        $varVerifica->bindParam( ':usuario', $usuario);
        $varVerifica->execute();

        if($varVerifica->fetchColumn() > 0){
            echo 'Usuário já cadastrado!';
            exit;
        }
        //Criptografando a senha
        $senha_hash = password_hash($senha, );
        //Iniciando uma transação 
        $pdo->beginTransaction();

        //Inserindo/Cadastrando usuários na tabela de login
        $varLogin = $pdo->prepare('INSERT INTO login(usuario, senha) VALUES (:usuario, :senha)');
        $varLogin->bindParam(':senha', $senha);
        $varLogin->bindParam(':usuario', $usuario);
        $varLogin->execute();

        //É preeciso pegar o ID do login, para inserir na tabela usuário, pois existe um relacionamento entre elas
        $id_login = $pdo->lastInsertId();

        //Cadastrando/Inserindo usuários na tabela usario 
        $varUsuario = $pdo->prepare('INSERT INTO usuario(nome, email, id_login) VALUES (:nome, :email, :id_login)');
        $varUsuario->bindParam(':id_login', $id_login);
        $varUsuario->bindParam(':nome', $nome);
        $varUsuario->bindParam(':email', $email);
        $varUsuario->execute();

        $pdo->commit();
        echo 'Cadastro Realizado com sucesso!!!';

    }catch(PDOException $e){
        $pdo->rollBack();
        echo "Erro ao Cadastrar". $e->getMessage();
        
    }
?> 