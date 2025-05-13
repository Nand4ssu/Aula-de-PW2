<?php
    //Exemplo 1
    $idade = 19;
    $isCNH = false;

   if ($idade >= 18 && $isCNH ){
    echo "Está apto a dirigir <br>";

   } else if ($isCNH  && $idade >= 18){

    echo "Apto a tirar a CNH, não pode dirigir<br>";
   }else {

    echo " Não está apto a dirigir! <br>";
   }
   //=================
   echo "<br><br><hr>";
   echo "<h2> Exemplo 2 </h2>";
   $possuiAcesso = true; 

   if (!$possuiAcesso){
    echo "Acesso negado! <br>";
   }else{
    echo "Acesso autorizado!! <br>";
   }
   //==============
   echo "<br><br><hr>";
   echo "<h2> Exemplo 3 </h2>";

   $mediaAluno = 10;

   if($mediaAluno >= 9){
    echo "Nota: MB";

   }else if ($mediaAluno >= 7 && $mediaAluno <= 8){
    echo "Nota: B";

   }else if( $mediaAluno >= 5 && $mediaAluno < 7){
    echo "Nota: R";
   }else if($mediaAluno >= 0 && $mediaAluno < 5){
    echo "Nota: I";
   }else{
    echo "Média inválida";
   }
   ?>