<?php


/*
Ejercicio 3: Hacer una interfaz de usuario(formulario) 
con dos inputs y 4 botones (sumar, restar, multiplicar y dividir)
*/

//isset = Determina si una variable está definida y no es null

$resultado = false;
if(isset($_POST['n1']) && isset($_POST['n2'])){
    if(isset($_POST['sumar'])){
        $resultado = "El resultado de la suma es: ".($_POST['n1']+$_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado de la resta es: ".($_POST['n1']-$_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado de la multiplicacion es: ".($_POST['n1']*$_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado de la division es: ".($_POST['n1'] / $_POST['n2']);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <label for="n1">Numero 1</label><br/>
        <input type="number" name="n1"><br/><br/>

        <label for="n2">Numero 2</label><br/>
        <input type="number" name="n2"><br/><br/>

        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">

        <?php
        if($resultado !=false):
            echo "<h3>$resultado</h3>";
        endif;
        ?>
    </form>
</body>
</html>