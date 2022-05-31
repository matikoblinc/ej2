<?php 
    include_once("./calculadora.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de daño</title>
</head>
<body>
    <h2>Calculadora de daño</h2>
    <form action="./index.php" method="POST">
    <input type="number" name="vida">
</br>
<p>Seleccione el tipo de ataque:
        <select name = "ataque">
            <option value = "golpe">golpe</option>
            <option value = "patada">patada</option>
            <option value = "espadazo">espadazo</option>
        </select>
        </p> 
        <p>
    <input type= "radio" value= "1" name= "pocion">Pocion de veneno </br>
    <input type= "radio" value= "2" name= "pocion">Pocion de fuego </br>
    <input type= "radio" value= "3" name= "pocion">Pocion de adormecimiento</br>
</p>
<p>
    <input type = "submit" value="Calcular">
</p>
    </form>
    <?php
        if(isset($_POST["ataque"]))
        {
           echo ("<h3> La cantidad de vida restante es: " . calcularVida($_POST["vida"], $_POST["ataque"], $_POST["pocion"] . "</h3>"));
        }
    ?>
</body>
</html>