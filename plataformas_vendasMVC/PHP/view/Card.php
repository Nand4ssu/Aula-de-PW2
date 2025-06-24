<?php
    require_once '../model/Conexao.php';
    require_once '../model/Produto.php';

    //pegando a subcategoria da URL 
    $subcategoria = isset($_GET['subcategoria']) ? urldecode($_GET['subcategoria']): null;

    //
?>