<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>

<!--Reset de estilização do browser -->
<link rel="stylesheet" type="text/css" href="./../../CSS/container-layout/reset.css">

<!-- Estilização do cabeçalho -->
 <link rel="stylesheet" type="text/css" href="./../../CSS/container-layout/cabecalho.css">

<!--Estilização do carrossel -->
 <link rel="stylesheet" type="text/css" href="./../../CSS/componentes/carrossel.css">

<!--Estilização do menu -->
<link rel="stylesheet" type="text/css" href="./../../CSS/componentes/menu.css">

<!--CSS destinado as principais configurações de estilos do portal-->
<link rel="stylesheet" type="text/css" href="./../../CSS/container-layout/principal.css">

</head>
<body>
    <!--Cabeçalho -->
    <?php 
        include '../view/Cabecalho.php';
    ?>
    <main class="container-principal">
        <div class="carrossel">
        <div class="slides"> 
            <img src="./../../SRC/images/destaques/pastilha.jfif" alt="Pastilha de freios Gol 1996">
            <img src="./../../SRC/images/destaques/mocinetica.jfif" alt="Mocinética">
            <img src="./../../SRC/images/destaques/parabrisa.jfif" alt="Parabrisa Pálio 2003">
            <img src="./../../SRC/images/destaques/gol.jfif" alt="Bico Injetor Gol 1996-01">
        </div>
        <button class="prev" onclick="mudarSlide(-1)"></button>
        <button class="next" onclick="mudarSlide(1)"></button>
        </div>
    </main>
    <!-- Rodapé -->
     <script src="./../../JS/carrossel.js"></script>
</body>
</html>