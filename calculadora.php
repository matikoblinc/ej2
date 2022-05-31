<?php 

function calcularDanio($vida, $ataque, $pocion)
{
    $danios = array("golpe" => 10, "patada" => 20, "espadazo" => 50);    
    $danio = $danios[$ataque];

    //echo ("ataque: $ataque<br>");
    //echo ("vida: $vida<br>");
    //echo ("pocion: $pocion");

    
    if ($vida < 50 && $pocion == 3)
    {
        $danio *= 2;
    }
    if ($ataque == "golpe" && $pocion == 1)
    {  
        $danio *= 3;
    }
    if ($ataque == "patada" && $pocion == 2)
    {
        $danio *= 3;
    } 

    return $danio;
}

function calcularVida($vida, $ataque, $pocion){
    return $vida - calcularDanio($vida, $ataque, $pocion);
}

?>