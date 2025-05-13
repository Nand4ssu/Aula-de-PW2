<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução - PHP</title>
</head>
<body>
    <?php  
    // Código php precisa sempre estar dentro da tag. O que estiver fora da tag será html
    $nome = "Amanda"; //String 
    $idade = 18; // Inteiro 
    $altura = 1.65; // Real 
    // $ indica que é uma variável.
    $isAluno = false; // Booleano 

    //Imprime/escreve na tela.
    echo $nome;
    
    $texto = "Isso";
    $Texto = "Disso";

    echo "<br> $texto é diferente $Texto";
    echo "<br> Aula de PHP";

    //Imprimir para o usuário: "Meu nome é XXXXXX"

    echo "<br> Olá! Meu nome é $nome <br>";

    echo "pulando linha <br> linha quebrada";

    //Quebrando linhas 
    echo "<br><br><br><hr> ";

    //<br> = quebra de linha 
    echo "<br> nome: $nome <br> idade: $idade <br> altura: $altura";
    ?>
</body>
</html>