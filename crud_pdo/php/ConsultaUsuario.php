<?php
     require_once'Conexao.php'; //conecta ao banco

    $nome = $_POST['nomeFormulario'];
    $email = $_POST['emailFormulario'];

    if(!empty($email) && !empty($nome)){
        //instrução DQL
        $sql = "SELECT * FROM usuarios WHERE email = :email ";

        //preparar a remoção de dados no banco
        $requisicao = $conexao->prepare($sql);
        //vamos pegar o e-mail digitado no form e passar por parametro,
        //isso fará que a consulta na variavel $sql, use o e-mail que
        //o usuario digitou, o bindParam serve para evitar SQLInjection.
        //é uma proteção da aplicação no banco de dados.
        $requisicao->bindParam(':email', $email);
        try{
            $requisicao->execute();
            //especificar como queremos o retorno da consulta no banco de dados
            //FETCH_ASSOC indica que queremos retornar um array indexado
                $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);

                if($usuario){
                    echo "Nome: ". $usuario['nome'] . "<br>";
                    echo "Email: ". $email['email'] . "<br>";
                }else{
                    echo "Usuario não encontrado";
                }
            }catch(PDOException $e){
            echo "Erro ao consultar: " . $e-> getMessage();
        }
        }else{
             echo "Digite um e-mail e um nome para consultar algum usuario!";
        }

?>