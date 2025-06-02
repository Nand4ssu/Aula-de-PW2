<?php
    
    require_once 'Conexao.php'; //Conecta no banco

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (!empty($email) && !empty($senha) && !empty($nome)){

        //criptografando a senha que o usuário digitou
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        //vamos realizar o DML (INSERT) 
        $sql = "INSERT INTO
                usuarios (nome, email, senha)
                VALUES (:nome, :email, :senha)";
        //(parametros) : | indicam que ali será colocado um valor
        //que veio do formulário, ex  :nome, :email.... 

        $requisicao = $conexao->prepare($sql);

        //pegar os valores das variáveis (que veio do HTML)
        //vamos passar como parametros para o script que vai
        //executar no banco
        $requisicao->bindParam(':nome', $nome);
        $requisicao->bindParam(':email', $email);
        $requisicao->bindParam(':senha', $senhaHash);

        try{
            $requisicao->execute();
            echo "Usuário cadastrado com êxito!";
        }catch(PDOException $e){
            echo "Erro ao cadastrar: ". $e->getMessage();
        }

    }else{
        echo '<p style="color: red;">Preencha todos os campos.</p>';
    }
?>