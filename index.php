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
    <form action="./calculadora" method="POST">
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
    <input type= "radio" value= "1" name= "Posion de veneno">Posion de veneno </br>
    <input type= "radio" value= "2" name= "Posion de fuego">Posion de fuego </br>
    <input type= "radio" value= "3" name= "Posion de adormesimiento">Posion de adormesimiento</br>
</p>
<p>
    <button type = "submit">calcular</button>
</p>
    </form>
    <?php
        if(isset($_POST["ataque"])){
           
        }
    ?>
</body>
</html>