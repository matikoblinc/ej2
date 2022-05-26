<?php 

function calcularDanio($vida, $ataque, $pocion){
    $danios = array("golpe" => 10, "patada" => 20, "espadazo" => 50);
    $danio = $danio[$ataque]

    if ($vida < 50 && $pocion == "3")
    {
        $danio * 2;
    }
    if ($ataque == "golpe" && $posion == "1")
    {
        $danio * 3;
    }
    if ($ataque == "patada" $$ $posion == "2")
    {
        $danio * 3;
    } 
}

function calcularVida($vida, $ataque, $pocion){
    $vida = $vida - calcularDanio($vida, $ataque, $pocion);
}

?>