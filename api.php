<?php

    $city = $_GET["city"];
    
    //$city = str_replace(" ", "-", $city);
    
    //$city = "london";
    
    $apiKey = "f1ed86f8c2a02293b83c963f2026e096";
    
    $contents = file_get_contents("https://api.openweathermap.org/data/2.5/forecast/hourly?q=".$city."&appid=".$apiKey."&lang=zh_tw");
    
    $contents = json_decode($contents, true);
    
    $cityName = $contents["city"]["name"];
    $description = $contents["list"][7]["weather"][0]["description"];
    $temperature = $contents["list"][7]["main"]["temp"]-273.15;
    
    //print_r($cityName);
    //print_r($description);
    //print_r($temperature);

    $result = "城市: ".$cityName.", 天氣狀況: ".$description.", 溫度: ".$temperature."&#24230;C";
    
    if ($cityName != "") {
        
        echo $result; 
        
    }
    
    
    

?>
