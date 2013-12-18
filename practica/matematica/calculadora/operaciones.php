<?php 

$valor1 = $_POST['num1']; 
$valor2 = $_POST['num2']; 
$opcion = $_POST['opc']; 

switch ($opcion) {
    case 1:$suma =$valor1+$valor2;
        echo "$valor1+$valor2 = <h2>$suma</h2>";
        break;
    case 2:$resta = $valor1-$valor2;
        echo "$valor1 - $valor2 = <h2>$resta</h2>";
        break;
    case 3:$multiplicacion=$valor1*$valor2;
        echo "$valor1 X $valor2 = <h2>$multiplicacion</h2>";
        break;
    case 4:$divicion=$valor1/$valor2;
        echo"$valor1 / $valor2 = <h2>$divicion</h2>";
        break;
    default:
        break;
}
echo "</br><a href='calculadora.html'>volver</a>";
?>