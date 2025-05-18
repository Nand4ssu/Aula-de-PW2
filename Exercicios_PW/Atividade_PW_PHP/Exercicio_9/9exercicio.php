
<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $num3 = $_POST["num3"];

if ($num1 >= $num2 && $num1 >= $num3) {
    
    if ($num2 >= $num3) {
        
        echo"A ordem decrescente é: $num1, $num2, $num3";
    } else {
        echo"A ordem decrescente é: $num1, $num3, $num2";
    }
} else if ($num2 >= $num1 && $num2 >= $num3) {
    if ($num1 >= $num3) {
        echo"A ordem decrescente é: $num2, $num1, $num3";
    } else {
        echo"A ordem decrescente é: $num2, $num3, $num1";
    }
} else {
    echo"A ordem decrescente é: $num3, $num2, $num1";
}

?>
