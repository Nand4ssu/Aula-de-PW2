<?php

    session_start();
    if(!isset($_SESSION["usuario_id"])){
        header("Location: LogarUsuario.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?></h1>
    <h2>so visualiza aqui se estiver logado</h2>
</body>
</html>